<?php 
use support\Database\schema;
use support\Database\create;

class articleDetails{
    public function up(){
        $schema = new schema();
        $schema->create("articleDetails", function (create $table) {
            $table->id();
            $table->int("articleId");
            $table->varstring('description',500,"not null");
            $table->created_at();
        });
    }
}