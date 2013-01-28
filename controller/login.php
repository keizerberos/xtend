<?php
header('Content-type: text/html; charset=ISO-8859-1');
include '../controller/globals.php';
$tarea = $_GET['task'];
if($location_url == ''){
	include('../model/login.php');
	$clnt= new LOGIN;
	}
else
	$clnt= new SoapClient(null,	array("location" => $location_url."login.php","uri" =>"",'encoding'=>'ISO-8859-1'));

if($tarea == "log"){
	$us = $_POST['a21'];
	$pa = $_POST['a12'];
	$x = $clnt->Ident($us,$pa);
	if(count($x) == 1)
		echo $x[0][2];
	else
		echo "error";
}

?>