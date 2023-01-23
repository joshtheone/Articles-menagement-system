<?php

namespace App\Controllers;

use App\Models\articleDetails;
use App\Models\articles;

class articlesController
{

     public function index()
     {

          $article = (new articles)->all()->get();
          // if(count($article) > 0){
               // $details = (new articleDetails)->where(['articleId'=>$id])->get();
               view("frontend.articles",["article"=>$article]);
          // }
          // view("frontend.articles");
     }

     public function create()
     {
          if(AUTH){
               view("frontend.newArticle");
          }else{
               redirect("login");
          }
     }

     public function store()
     {
          extract($_POST);

          $file = upload($_FILES['image']);

          $article = (new articles)->insert([
               "title"=>$title,
               "image"=>$file
          ])->value('id')[0];

          redirect("articleDetails",['id'=>$article]);
     }
}