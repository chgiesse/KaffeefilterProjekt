<?php
// IF-Abfrage, damit kein Inhalt angezeigt wird, 
// wenn ein User die URL errät
if (isset($_POST['submit'])) {

    require_once '../../helpers/conn.php';

    // mysqli_real_escape_string sorgt dafür, dass nur Text, 
    // aber kein Code in die Datenbank kommt
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
    $pwd2 = mysqli_real_escape_string($conn, $_POST['pwd2']);

    if ($pwd == $pwd2){
        // Passwort verschlüsseln
        $hashPassword = password_hash($pwd,PASSWORD_DEFAULT);
        
        // Nutzer wird in die Datenbank 
            $sql = "INSERT INTO benutzer (name, email, passwort) VALUES ('$name', '$email', '$hashPassword');";
            $result = mysqli_query($conn, $sql);
        // Der User wird bei einem erfolgreichen Prozess auf 
        // die später noch erstellte Seite dashboard.php geschickt
            header("Location: ../../views/cms/login/user-add.php");
            exit();
    }
    else{
        header("Location: ../../views/sign-up.php?error=Passwörter stimmen nicht überein");
        exit();
    }

} else {
// Falls jemand die URL erraten hat, wird er durch
    echo "URL wurde erraten"; 
// das else zum Registrierungsformular geschickt
    // header("Location: ../signup.php");
    exit();
}