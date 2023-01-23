<?php 
use support\Database\schema;
use support\Database\create;

class articles{
    public function up(){
        $schema = new schema();
        $schema->create("articles", function (create $table) {
            $table->id();
            $table->varstring(['title',255,'not null']);
            $table->varstring(["image",255,"null"]);
            $table->created_at();
        });
    }
}