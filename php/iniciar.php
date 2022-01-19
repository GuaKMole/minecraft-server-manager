<?php

$exec = exec("sh /var/www/html/minecraft-server-manager/php/startServer.sh");

$response = array('status' => 'ok', 'ip' => $_SERVER["HTTP_HOST"], 'description' => $exec);

file_put_contents("log.log", "Ejecutando PHP", FILE_APPEND | LOCK_EX);

//kk

echo json_encode($response);

?>
