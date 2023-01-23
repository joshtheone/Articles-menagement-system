<?php

use App\Controllers\articleDetailsController;
use App\Controllers\articlesController;
use App\Controllers\contactsController;
use App\Controllers\userController;
use support\Routing\Route;

Route::Get("", function () {
    view('frontend.index');
});

Route::Get("home", function () {
    view('frontend.index');
});


Route::Get("login", [userController::class, 'loginPage']);
Route::Post("login", [userController::class, 'login']);
Route::Get("signup", [userController::class, 'createuser']);
Route::Post("signup", [userController::class, 'create']);

Route::Get("profile", [userController::class, 'index']);


Route::Get("articles", [articlesController::class, 'index']);
Route::Get("newArticle", [articlesController::class, 'create']);
Route::post("newArticle", [articlesController::class, 'store']);

Route::get("articleDetails", [articleDetailsController::class, 'index']);
Route::Post("newDetails", [articleDetailsController::class, "store"]);


Route::Get("contact", [contactsController::class, "index"]);
Route::Post("sendMessage", [contactsController::class, "store"]);

Route::Get("logout", function () {
    unsetsession("userId");
    unsetsession("level");
    unsetsession("email");
    redirectback();
});
