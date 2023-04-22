<?php
define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

require_once('src/tabla.php');
require_once('templates/mostrarHtml.php');


if (!empty($_REQUEST['action'])) {
    $action = $_REQUEST['action'];
} else {
    $action = 'home'; // acción por defecto si no envían
}
switch ($action) {
    case 'home':   
        home();
        echo 'aaa';        
        break;
    case 'tabla/form':        
        table($_REQUEST['Filas'],$_REQUEST['Columnas']);
        break;      

    default: {
        $parametros = explode('/', $action);    
        table($parametros[1],$parametros[1]);        
        
    }
        break;
}
