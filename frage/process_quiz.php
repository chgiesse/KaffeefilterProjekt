<?php
// Attribute und Werte feststellen
$attr = $_GET["attr"];
$value = $_GET["value"];

if (!empty($attr)){
    // Start a new Session
    session_start();

    // Session Variable mit Wert besetzen
    $_SESSION[$attr] = $value;

    // Suchkriterien in eigener Session merken
    // Überprüfen, ob bereits Suchkriterien vorhanden sind
    if (isset($_SESSION['search_criteria'])){
        // Suchkriterium vorhanden

        // Gibt es das Attribut schon?
        if (!in_array($attr, $_SESSION['search_criteria'])) {
            // Neues Suchkriterium hinzufügen
            $_SESSION['search_criteria'][] = $attr;
        }  
    }
    
    else{
        // Suchkriterium nicht vorhanden
        // Session anlegen und erstes Suchkriterium hinzufügen
        $_SESSION['search_criteria'] = array();
        $_SESSION['search_criteria'][] = $attr;
    };

    echo '<pre>';
    var_dump($_SESSION['search_criteria']);
    echo '</pre>';

    // Nutzer zu nächster Frage oder alternativ zur Produktseite weiterleiten
    if (!empty($_GET["next"])){
        header('Location: ' . $_GET["next"] . '.html');
    }
    else {
        header('Location: ../views/produkte.php');
    }
} else {
    // Es ist kein Attribut gegeben, wir können direkt weiter gehen
    header('Location: ' . $_GET["next"] . '.html');
}

?>
