<?php

namespace App\Controllers;

use App\Models\contacts;

class contactsController
{

     public function index()
     {
          view("frontend.contact");
     }

     public function store()
     {
          extract($_POST);
          $message = (new contacts)->insert([
               "name"=>$name,
               "email"=>$email,
               "phone"=>$phone,
               "message"=>$message
          ]);

          redirect("contact",['success'=>"Message sent successfull"]);
     }
}