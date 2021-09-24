<?php 
session_start();

if (isset($_POST['submit'])) {

    require_once '../../helpers/conn.php';
    
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

    
    // Existiert der Benutzername?
    if ( empty($email) || empty($pwd)){
        header("location: ../../views/login.php?error=Keine Daten abgeschickt!");
        exit();
    }
    else {
        $query = "SELECT * FROM benutzer WHERE email = '$email'";
        $result = mysqli_query($conn, $query);
        
        $resultCheck = mysqli_num_rows($result);
    }
    if ($resultCheck < 1) {
        // Prüft ob die Email hinterlegt ist 
        header("location: ../../views/login.php?error=E-Mail Adresse unbekannt!");
        exit();
    } else {
        // Ist das Passwort korrekt?
        // Die Variable row wird als Array mit den Informationen aus der Datenbank befüllt
        if ($row = mysqli_fetch_assoc($result)) {
            // De-Hashing des Passwortes 
            // password_verify($password, $row['password']) gibt true oder false zurück
            $hashedPassword = password_verify($pwd, $row['passwort']);
            if ($hashedPassword == false) {
                header("location: ../../views/login.php?error=Falsches Passwort!");
                exit();
              // elseif fängt unvorhergesehene Fehler ab
            } elseif($hashedPassword == true){
              // Benutzer anmelden
              $_SESSION['session_status'] = "Authorized";
              $_SESSION['session_id'] = $row['user_id'];
              $_SESSION['session_name'] = $row['name'];
              $_SESSION['session_email'] = $row['email'];
              $_SESSION['session_passwort'] = $row['passwort'];
              header ("location: ../../views/cms/blog/blog-add.php");
            }
        }
    }

} else {
    header("location: ../../views/login.php?error=Keine Daten abgeschickt!");
    exit();
}