<?php
namespace App\Models;

use support\Database\table;

class contacts extends table
{
    
    public $table = 'contacts';

    public function __construct()
    {
        new table($this->table);
    }
}