<?php



$Resp=new NuevoResponse;

$json=file_get_contents('php://input',true);
$req=json_decode($json);
$CantidadJugadores=0;

if($CantidadJugadores>=1 && $CantidadJugadores<=5){
$Resp->ItsOk=true;
$Resp->Mensaje=' ';
}else {
$Resp->IsOk= false;
$Resp->Mensaje="El equipo posee [cantidadDeJugadoresIndicados] y debe poseer entre 1 y 5  jugadores"
  
};

echo json_encode($Resp);



