<?php
 

 
$config = array(
   
    "paths" => array(
        "resources" => "resources/",
        "images" => array(
            "content" => $_SERVER["DOCUMENT_ROOT"] . "/img/content",
            "layout" => $_SERVER["DOCUMENT_ROOT"] . "/img/layout"
        )
        "css" => array (
            "bootstrap" => $_SERVER["DOCUMENT_ROOT"] . "/css/bootstrap.min.css",
            "custom" => $_SERVER["DOCUMENT_ROOT"] . "/css/custom.css"
        )
    )
);
 
/*
    I will usually place the following in a bootstrap file or some type of environment
    setup file (code that is run at the start of every page request), but they work 
    just as well in your config file if it's in php (some alternatives to php are xml or ini files).
*/
 
/*
    Creating constants for heavily used paths makes things a lot easier.
    ex. require_once(LIBRARY_PATH . "Paginator.php")
*/
defined("LIBRARY_PATH")
    or define("LIBRARY_PATH", realpath(dirname(__FILE__) . '/library'));
     
defined("TEMPLATES_PATH")
    or define("TEMPLATES_PATH", realpath(dirname(__FILE__) . '/templates'));
 
/*
    Error reporting.
*/
ini_set("error_reporting", "true");
error_reporting(E_ALL|E_STRCT);
 
?>