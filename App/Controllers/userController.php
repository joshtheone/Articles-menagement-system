<?php

namespace App\Controllers;

use App\Models\user;

class userController
{

     public function index()
     {
          if(AUTH){

               view("frontend.profile",(new user)->where(['id'=>$_SESSION['userId']])->get()[0]);
          }else{
               redirect("login");
          }
     }

     public function loginPage()
     {
          if(!AUTH){
               view("frontend.login");
          }else{
               redirect("profile");
          }
     }

     public function login()
     {
          extract($_POST);
          $new_user = (new user())->where(['email' => $email])->get();
          if (count($new_user) > 0) {
               if (password_verify($password, $new_user[0]['password'])) {
                    $this->loguserIn($new_user[0]["id"]);
                    redirect("profile");
               }
          }
     }

     public function createuser()
     {
          if(!AUTH){
               view("frontend.signup");
          }else{
               redirect("profile");
          }
          
     }

     public function create()
     {
          extract($_POST);
          $new_user = (new user())->insert([
               "name" => $name,
               "email" => $email,
               "password" => password_hash($password, PASSWORD_DEFAULT)
          ])->value('id');

          $this->loguserIn($new_user[0]);

          redirect("profile");
     }

     public function loguserIn($id)
     {
          $user = (new user())->where(["id" => $id])->get()[0];
          setsession("userId", $user['id']);
          setsession("level", $user['level']);
          setsession("email", $user['email']);
     }
}
