<?php
    $nombre = $_GET['Nombre'];
    $email = $_GET['Email'];
    $comentarios = $_GET['Comentarios'];

    echo "<h2>Información recibida desde Php</h2>";
    echo "<p>El nombre recibido es :</p>" , $nombre;

?>