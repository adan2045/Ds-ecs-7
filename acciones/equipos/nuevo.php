<?php
require_once '../../modelo/Jugador.php';
require_once 'responses/nuevoResponse.php';
require_once 'request/nuevoRequest.php';
header('Content-Type: application/json');

$Resp=new NuevoResponse;

$json=file_get_contents('php://input',true);
$req=json_decode($json);
$CantidadJugadores=0;

foreach($req->ListJugadores as $j){
$CantidadJugadores=$CantidadJugadores + 1;
}

if($CantidadJugadores>=1 && $CantidadJugadores<=5){
$Resp->ItsOk=true;
$Resp->Mensaje=' ';
}else {
$Resp->IsOk= false;
$Resp->Mensaje="El equipo posee " . $CantidadJugadores." y debe poseer entre 1 y 5  jugadores";
  
}

echo json_encode($Resp);



