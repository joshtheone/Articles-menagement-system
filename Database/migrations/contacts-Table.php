<?php 
use support\Database\schema;
use support\Database\create;

class contacts{
    public function up(){
        $schema = new schema();
        $schema->create("contacts", function (create $table) {
            $table->id();
            $table->varstring("name");
            $table->varstring("email");
            $table->varstring("phone");
            $table->varstring(["message",500,"not null"]);
            $table->created_at();
        });
    }
}