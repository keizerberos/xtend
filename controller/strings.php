<?php
header('Content-type: text/html; charset=ISO-8859-1');
include '../controller/globals.php';
//include('../model/vars.php');
//$clnt = new vars();
$tarea = $_GET['task'];
if($location_url == ''){
	include('../model/strings.php');
	$clnt= new VARS;
	}
else
	$clnt= new SoapClient(null,	array("location" => $location_url."strings.php","uri" =>"",'encoding'=>'ISO-8859-1'));


if($tarea == "load"){
	$x = $clnt->Listar();
	$y = array();
	for ($i = 0 ; $i < count($x); $i++) {
		$y[$x[$i]['nam']][$x[$i]['id']] = $x[$i]['val'];
		$y[$x[$i]['nam']]['id'] = $x[$i]['sid'];
		$y[$x[$i]['nam']]['nam'] = $x[$i]['nam'];
	}
	echo json_encode($y);
}
if($tarea == "bstring"){
	$n = $_GET['n'];
	$l = $_GET['l'];
	$x = $clnt->Bstring($n,$l);
	echo $x[0]['val'];
}

?>