<?php

require_once __DIR__.DIRECTORY_SEPARATOR.'../Interfaces/iCanExport.php';

class XmlExport implements iCanExport {

    public function export()
    {
        echo 'export xml';

    }
}