<?php
	require "../modelo/modelo.php";
	$objRegistrar = new Registrar();
	if(isset($_GET["var_nombres"]) && isset($_GET["var_apellidos"]) && isset($_GET["var_telefono"]) && isset($_GET["var_ciudad"])){
		$objRegistrar->registrarPersona($_GET["var_nombres"], $_GET["var_apellidos"], $_GET["var_telefono"], $_GET["var_ciudad"]);
		//echo $_GET["var_nombres"];
	}

	if(isset($_GET['dato']))
	{
		$objRegistrar->registrarPersona("MANOLO", "LAMA", "1234567", "CALI");
	}
?>