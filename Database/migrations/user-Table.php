<?php 
use support\Database\schema;
use support\Database\create;

class user{
    public function up(){
        $schema = new schema();
        $schema->create("user", function (create $table) {
            $table->id();
            $table->varstring(['name',255,"not null"]);
            $table->varstring(['email',255,"not null"]);
            $table->varstring(['password',255,"not null"]);
            $table->varstring(['level',20,"not null","'guest'"]);
            $table->created_at();
        });
    }
}