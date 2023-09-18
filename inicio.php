<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $apellido = $_POST["apellido"];
    $nombre = $_POST["nombre"];
    $contraseña = $_POST["contraseña"];

    // Verifica las condiciones para redirigir al usuario
    if ($apellido === "Arquibola" && $nombre === "Tomas" && $contraseña === "tom123") {
        // Redirige al usuario a "inicio.html"
        header("Location: inicio.html");
        exit;
    } else {
        // En caso contrario, puedes mostrar un mensaje de error o redirigir a otra página
        echo "Los datos ingresados son incorrectos. Por favor, inténtelo de nuevo.";
    }
}
?>
