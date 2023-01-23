<?php

namespace App\Controllers;

use App\Models\articleDetails as ModelsArticleDetails;
use App\Models\articles;
use articleDetails;

class articleDetailsController
{

     public function index()
     {
          $id = $_GET['id'];

          $article = (new articles)->where(['id'=>$id])->get();
          if(count($article) > 0){
               $details = (new ModelsArticleDetails)->where(['articleId'=>$id])->get();
               view("frontend.articleEditDetails",["article"=>$article[0],'details'=>$details]);
          }
     }

     public function store()
     {
          (new ModelsArticleDetails)->insert([
               "articleId"=>$_POST['id'],
               "description"=>$_POST['details']
          ]);

          redirect("articleDetails",['id'=>$_POST['id']]);
     }
}