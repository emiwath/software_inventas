<?php

	const APP_URL="http://localhost/inventarios/";
	const APP_NAME="Inventarios&Ventas";
	const APP_SESSION_NAME="inventarios";

	/*----------  Tipos de documentos  ----------*/
	const DOCUMENTOS_USUARIOS=["DUI","DNI","Cedula","Licencia","Pasaporte","Otro"];


	/*----------  Tipos de unidades de productos  ----------*/
	const PRODUCTO_UNIDAD=["Unidad","Libra","Kilogramo","Caja","Paquete","Lata","Galon","Botella","Tira","Sobre","Bolsa","Saco","Tarjeta","Otro"];

	/*----------  Configuración de moneda  ----------*/
	const MONEDA_SIMBOLO="$";
	const MONEDA_NOMBRE="";
	const MONEDA_DECIMALES="2";
	const MONEDA_SEPARADOR_MILLAR=",";
	const MONEDA_SEPARADOR_DECIMAL=".";


	/*----------  Marcador de campos obligatorios (Font Awesome) ----------*/
	const CAMPO_OBLIGATORIO='&nbsp; <i class="fas fa-edit"></i> &nbsp;';

	/*----------  Zona horaria  ----------*/
	date_default_timezone_set("America/Bogota");

	/*
		Configuración de zona horaria de tu país, para más información visita
		http://php.net/manual/es/function.date-default-timezone-set.php
		http://php.net/manual/es/timezones.php
	*/