<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $apellido = $_POST["apellido"];
    $nombre = $_POST["nombre"];
    $contraseña = $_POST["contrasenia"];

    if ($apellido === "arquibola" && $nombre === "tomas" && $contraseña === "1234") {
        header("Location: inicio.html");
        exit;
    } else {
        echo "Los datos ingresados son incorrectos. Por favor, intentelo de nuevo.";
    }
}
?>
