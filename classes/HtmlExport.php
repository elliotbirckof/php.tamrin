<?php

require_once __DIR__.DIRECTORY_SEPARATOR.'../Interfaces/iCanExport.php';

class HtmlExport implements iCanExport{

    public function export()
    {
        echo 'export html';
    }
}
