<?php

use support\token\token;

    $token = new token(); 
    $token->setTocken();
    include "App/Helper.php";
    lastTwoUrl();
    
    new \support\lib\dictionaly();
   
    if(!isset($_COOKIE['language'])){
        setcookie('language',$_ENV['APP_LANGUAGE']);
    }

    if(isset($_SESSION['userId']) && isset($_SESSION['email']) && isset($_SESSION['level'])){
        define("AUTH",true);
    }else{
        define("AUTH",false);
    }


