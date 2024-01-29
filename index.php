<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

// Simula datos
$datosAfrica = [
    'ip' => '98.76.54.32',
    'pais' => 'Egipto',
    'continente' => 'África',
    'zona_horaria' => 'GMT+2'
];

echo json_encode($datosAfrica);
?>
