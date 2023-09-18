<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $apellido = $_POST["apellido"];
    $nombre = $_POST["nombre"];
    $contraseña = $_POST["contraseña"];

    if ($apellido === "Arquibola" && $nombre === "Tomas" && $contraseña === "tom123") {
        header("Location: inicio.html");
        exit;
    } else {
        echo "Los datos ingresados son incorrectos. Por favor, intentelo de nuevo.";
    }
}
?>
