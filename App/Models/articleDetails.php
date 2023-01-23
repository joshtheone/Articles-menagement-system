<?php
namespace App\Models;

use support\Database\table;

class articleDetails extends table
{
    
    public $table = 'articleDetails';

    public function __construct()
    {
        new table($this->table);
    }
}