<?php
include '../model/globals.php';
include '../controller/globals.php';
class VARS{
	function Conectar(){
		global $h,$u,$p,$d;
		$root = $h;
		$usuario = $u;
		$clave= $p;
		$enlace=mysql_connect($root,$usuario,$clave);
		mysql_select_db($d);
		return $enlace;
	}
	
	public function Insertar($img,$msg){

		$enlace = $this->Conectar();
		//$img = mysql_real_escape_string($img);
		$query = "INSERT INTO chat(emi,img,msg,tim,tip) VALUES ('test','$img','$msg',now(),'prueba');";

		$resultado = mysql_query($query,$enlace);
		return mysql_error($enlace);
	}

	public function Listar(){
		$query = "select s.nam, l.id, t.val from strings s, trad t, lang l where s.id = t.idStr and t.idLang = l.id";
		$enlace = $this->Conectar();
		$resultado = mysql_query($query,$enlace);
		$lista = array();
		while ($fila = mysql_fetch_array($resultado)){
			array_push($lista,$fila);
		}
		return $lista;
	}
	
	public function Bstring($s,$l){
		$query = "select s.nam, l.id, t.val from bstrings s, btrad t, lang l where s.id = t.idStr and t.idLang = l.id and s.nam = '$s' and l.id = $l";
		$enlace = $this->Conectar();
		$resultado = mysql_query($query,$enlace);
		$lista = array();
		while ($fila = mysql_fetch_array($resultado)){
			array_push($lista,$fila);
		}
		return $lista;
	}
	
	public function Buscar($search){
		$query = "SELECT * FROM [TARIFARIO$] WHERE [id_proveedor] like '$search'";
		$enlace = $this->Conectar();
		$resultado = odbc_exec($enlace,$query);
		$lista = array();
		while($fila = odbc_fetch_array($resultado)){
			array_push($lista,$fila);
		}
		return $lista;
	}
}

if($location_url != ''){
	$ServidorSoap = new SoapServer(null, array('encoding'=>'ISO-8859-1','uri'=>""));
	$ServidorSoap->setClass('VARS');
	$ServidorSoap->handle();
}
?>