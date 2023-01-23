<?php
namespace App\Models;

use support\Database\table;

class articles extends table
{
    
    public $table = 'articles';

    public function __construct()
    {
        new table($this->table);
    }
}