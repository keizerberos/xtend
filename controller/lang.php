<?php
header('Content-type: text/html; charset=ISO-8859-1');
include '../controller/globals.php';
$tarea = $_GET['task'];
if($location_url == ''){
	include('../model/lang.php');
	$clnt= new LANG;
	}
else
	$clnt= new SoapClient(null,	array("location" => $location_url."lang.php","uri" =>"",'encoding'=>'ISO-8859-1'));

if($tarea == "load"){
	$x = $clnt->Listar();
	for ($i = 0 ; $i < count($x); $i++) {
       $y[] = array_map('utf8_encode', $x[$i]); 
	}
	echo json_encode($y);
}

?>