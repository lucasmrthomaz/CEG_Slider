<?php

/**
 * Created by PhpStorm.
 * User: Lucas Thomaz
 * Date: 29/09/2017
 * Time: 06:09
 */

/**
* Autoload for classes
**/
const CLASSES_BASEDIR = 'app' . DIRECTORY_SEPARATOR . 'classes' . DIRECTORY_SEPARATOR;
const FILEEXT = '.php';

spl_autoload_register(function ($class_name) {
    include (CLASSES_BASEDIR . $class_name . FILEEXT);
});


//Checagem se url possui parametro de origem
/*
if(isset($_GET['origin']) != 'panel'){
    echo '<script type="text/javascript">
window.location = "http://sistema.evoluirparavencer.com.br/gnf/index.jsf"
</script>';
}
*/

?>