<?php
/**
 * Inicio de la aplicacion requieriendo los archivos necesarios para los controladore,vistas 
 * y modelos.
 * @autor Christian Falcon.
 */

// Librerias
require_once('libs/HTML.php');          // Motor de html simple.
require_once('libs/Database.php');      // Base de datos.
require_once('libs/Controller.php');    // Controlador base.
require_once('libs/Model.php');         // Modelo base.
require_once('libs/View.php');          // Vistas.
require_once('libs/Bootstrap.php');     // Enrutador, correa de arranque.

// Configuracion
require_once('config/paths.php');       // Paths para incluir.
require_once('config/database.php');    // Configuracion de la base de datos.

// Inicio de la app.
$app = new Bootstrap();

?>