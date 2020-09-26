<?php

require_once __DIR__.DIRECTORY_SEPARATOR.'../Interfaces/iCanExport.php';

class JsonExport implements iCanExport {

    public function export()
    {
        echo 'export json';

    }
}
