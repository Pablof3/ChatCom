<?php
//Nombre Sitio
define('NOMBRE_SITIO', 'MVC FREMEWORK');

//Configuracion Base de Datos
define('DB_HOST','localhost');  //base de datos
define('DB_USER','root');       //usuario de base de datos
define('DB_PASSWORD','');       //contraseña de usuario de base de datos
define('DB_NAME_BD','Dbmvc');   //nombre de base de datos

//Configuracion CONTROLADOR y METODO [DEFAULT]
define('CONTROLLER','Usuario');   //Controller
define('METHOD','Login');           //Method

//Ruta App
define('RUTA_APP', dirname(dirname(__FILE__)).'/View/');

//URL
define('RUTA_URL', 'http://'.$_SERVER['HTTP_HOST'].'/ChatCom/'); //Cambiar a Nombre de Proyecto


?>