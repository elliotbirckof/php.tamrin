<?php
require_once 'db.php';

class Post extends Db{
    public $table;

    public function __construct()
    {
        $this->table = 'posts';
    }
}
