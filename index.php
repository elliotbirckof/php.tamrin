<?php

require_once "classes/HtmlExport.php";
require_once "classes/JsonExport.php";
require_once "classes/XmlExport.php";

$export = 'xml';
$handler = $export.'export';
$handlerObject = new $handler;


class exportHandler{
    public function doExport(iCanExport $handler)
    {
        $handler->export();
    }
}

$obj1 = new exportHandler();
$obj1->doExport($handlerObject);

$obj2 = new exportHandler();
$obj2->doExport($handlerObject);

$obj3 = new exportHandler();
$obj3->doExport($handlerObject);


