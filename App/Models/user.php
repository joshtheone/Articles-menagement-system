<?php
namespace App\Models;

use support\Database\table;

class user extends table
{
    
    public $table = 'user';

    public function __construct()
    {
        new table($this->table);
    }
}