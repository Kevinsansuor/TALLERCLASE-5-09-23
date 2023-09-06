<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmación</title>
</head>
<body>
    <?php
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $comentarios = $_POST['comentarios'];
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<p>El correo electrónico proporcionado no es válido.</p>";
    } else {
        echo "<p>Gracias por enviar el formulario:</p>";
        echo "<p>Nombre: $nombre</p>";
        echo "<p>Correo Electrónico: $email</p>";
        echo "<p>Comentarios: $comentarios</p>";
    }
    ?>
</body>
</html>
