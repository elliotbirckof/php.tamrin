<?php

class Db
{

    public $table;

    public function all()
    {
        return "SELECT FROM {$this->table}";
    }

    public function delete($id)
    {
        return "DELETE FROM {$this->table} WHERE id={$id}";
    }

    public function find($id, $columns = null)
    {
        if (!is_null($columns)) {
            $columns = implode(',', $columns);
        } else {
            $columns = '*';
        }
        return "SELECT {$columns} FROM {$this->table} WHERE id={$id}";
    }

    public static function export(){

    }
//    private function sort(){
//
//    }

}

Db::export();

function __autoload(){

}