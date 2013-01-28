<?php //sleep(rand(1,5));
if (!isset($_GET['set'])){
	?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-tr.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<meta charset="utf-8">﻿
<head>
<title>News</title>
<script type="text/javascript" src="../js/jquery-1.8.3.js"></script>
<script type="text/javascript" src="../js/jquery-ui-1.9.2.custom.min.js"></script>
<link type="text/css"	href="../css/ui-darkness/jquery-ui-1.9.2.custom.css" rel="Stylesheet" />

<link rel="stylesheet" href="jqtransformplugin/jqtransform.css" type="text/css" media="all" />
<script type="text/javascript" src="jqtransformplugin/jquery.jqtransform.js" ></script>

<style>
body,html{
padding:0px;
margin:0px;	
background:#fff;
height:100%;
}
</style>
</head>
<body>
<?php
}
?>

<div class='ui-widget divMenu2315'>
	<div class='ui-widget ui-corner-all ui-widget-content' >
<!-- 	<button class='dbutton214'>Recepci&oacute;n </button> -->		
<!-- 	<button class='dbutton214'>Contabilidad </button> -->		
<!-- 	<button class='dbutton214'>Administración </button> -->		
<!-- 	<button class='dbutton214'>Operaci&oacute;n</button> -->		
	
		<div id="tabs">
			<ul>
			<li><a href="#tabs-1">Recepciones</a></li>
			<li><a href="#tabs-2">Operaciones</a></li>
			<li><a href="#tabs-3">Contabilidad</a></li>
			<li><a href="#tabs-4">Sistema</a></li>
			</ul>
			<div id="tabs-1">		
				<div id="accordion">
					<h3>Files</h3>
					<div class=divLang1113321>
						<button class='dbutton214'>Cotizar</button>
						<button class='dbutton214'>Generar Programa</button>
						<button class='dbutton214'>Generar Itinerario</button>
						<button class='dbutton214'>Generaraci&oacute;n de mapas</button>
						<button class='dbutton214'>Rooming List</button>
					</div>
					<h3>Servicios</h3>
					<div>
						<button class='dbutton214'>Crear Servicios</button>
						<button class='dbutton214'>Crear Paquetes</button>
						<button class='dbutton214'>Agregar Tarifas</button>
						<button class='dbutton214'>Modificar Tarifas</button>
						<button class='dbutton214'>Obtener Reporte - Clientes</button>
						<button class='dbutton214'>Obtener Reporte - Servicios</button>
						<button class='dbutton214'>Optimización de cotización por algorítmos genéticos</button>
					</div>
					<h3>Mantenimiento</h3>
					<div>
						<button class='dbutton214'>Tarifas</button>
						<button class='dbutton214'>Generar Programa</button>
						<button class='dbutton214'>Generar Itinerario</button>
						<button class='dbutton214'>Generaraci&oacute;n de mapas</button>
						<button class='dbutton214'>Rooming List</button>
					</div>
				</div>
			</div>
			<div id="tabs-2">
				<div id="accordion2">
					<h3>Asignaciones</h3>
					<div class=divLang1113321>
						<button class='dbutton214'>Asignar Servicio - Proveedor</button>
						<button class='dbutton214'>Reservar Servicio - Proveedor</button>
						<button class='dbutton214'>OT Serv - Prov</button>
						<button class='dbutton214'>Rooming List</button>
						<button class='dbutton214'>Panel de Control</button>
						<button class='dbutton214'>Envío de Correos</button>
					</div>
					<h3>Proveedores</h3>
					<div>
						<button class='dbutton214'>Modificar Horarios</button>
						<button class='dbutton214'>Gest Reservas - Hab.</button>
						<button class='dbutton214'>Optimización de Proveedores</button>
					</div>
					<h3>Mantenimiento</h3>
					<div>
						<button class='dbutton214'>Agregar Prov - Hor - Tarif</button>
						<button class='dbutton214'>Agregar Tarif - hor</button>
						<button class='dbutton214'>Agregar Clie - Tarif</button>
					</div>
				</div>
			</div>
			<div id="tabs-3">
				<div id="accordion3">
					<h3>Pagos y Provisiones</h3>
					<div class=divLang1113321>
						<button class='dbutton214'>Registrar Pagos</button>
						<button class='dbutton214'>Auto Provisionar</button>
						<button class='dbutton214'>Cierre de Files</button>
						<button class='dbutton214'>Histórico de Cambios</button>
					</div>
					<h3>Reportes</h3>
					<div>
						<button class='dbutton214'>Reporte de Utilidades</button>
						<button class='dbutton214'>Descargar ND</button>
					</div>
					<h3>Mantenimiento</h3>
					<div>
						<button class='dbutton214'>link - Cuentas</button>
						<button class='dbutton214'>Prov - Link</button>
					</div>
				</div>
			</div>
			<div id="tabs-4">
				<div id="accordion4">
					<h3>Usuarios</h3>
					<div class=divLang1113321>
						<button class='dbutton214'>Gestionar</button>
						<button class='dbutton214'>Privilegios</button>
						
					</div>
					<h3>Variables</h3>
					<div>
						<button class='dbutton214'>Reporte de Utilidades</button>
						<button class='dbutton214'>Descargar ND</button>
					</div>
					<h3>Mapa</h3>
					<div>
						<button class='dbutton214'>Reporte de Utilidades</button>
						<button class='dbutton214'>Descargar ND</button>
					</div>
					<h3>Idiomas</h3>
					<div>
						<button class='dbutton214'>link - Cuentas</button>
						<button class='dbutton214'>Prov - Link</button>
					</div>
				</div>
			</div>
		</div>
</div>



<link type="text/css" href="css/menu.css" rel="Stylesheet"/>
<script type="text/javascript" src="js/menu.js"></script>

<?php 
if (!isset($_GET['set'])){
	?>
</body>
</html>
	<?php
}
?>