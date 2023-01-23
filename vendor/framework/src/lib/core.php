<?php

namespace support\lib;


class core
{
    public function __construct()
    {
        lastTwoUrl();
        if (!urlHit()) {
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                view('error.error', ['500', 'post nethode was required on Route/wep.php eg Route::post()']);
            }
            view("error.404");
            
        }else{
            unset($_SESSION['hitUrl']);
        }
    }
}
