<?php
// Inicia la sesión
session_start();

// Destruye la sesión
session_destroy();

// Envía una respuesta JSON para indicar que la sesión se ha cerrado
echo json_encode(array('message' => 'Sesión cerrada'));
?>
