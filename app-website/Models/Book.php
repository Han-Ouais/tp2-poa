<?php

namespace App\Models;

class Book extends Base {

    protected $tableName = APP_TABLE_PREFIX . 'books';

    protected static $instance;

    public static function getInstance()
    {
        if (!isset(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
    }

}

?>