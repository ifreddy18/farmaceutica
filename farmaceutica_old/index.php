<?php

if (isset($_GET["cat"])){
	$current_submenu_category = $_GET["cat"];
}

$active_home = "";
$active_nosotros = "";
$active_productos = "";
$active_contacto = "";
$current_submenu_category = "";
$site_url = "https://farmaceuticamundial.com/";

if (file_exists($_GET['page'] . '.php')) {
	
	if ($_GET["page"]=="inicio" || $_GET["page"]=="") {
		$active_home = ' current-menu-item';
		$metaTitle = "Laboratorio Veterinario";
		
	}elseif ($_GET["page"]=='nosotros') {
		$active_nosotros = ' current-menu-item';
		$metaTitle = "Sobre nuestro laboratorio veterinario";
		
	}elseif ($_GET["page"]=='productos') {
		$active_productos = ' current-menu-item';
		$metaTitle = "Productos Veterinarios";
		
	}elseif ($_GET["page"]=='producto-detalle') {
		$active_productos = ' current-menu-item';
		$metaTitle = "Productos Veterinarios";
		
	}elseif ($_GET["page"]=='contacto') {
		$active_contacto = ' current-menu-item';
		$metaTitle = "Contacto:";
		include('mail_send.php');
	}
	//require_once('include-funciones.php');
	require_once('header.php');
	require_once(basename(($_GET['page']!='' ? $_GET['page'] : 'inicio') . '.php'));
	require_once('footer.php');	
}else{
	header('Location: ?page=inicio');
}

?>