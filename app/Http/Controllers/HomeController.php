<?php
namespace App\Http\Controllers;

use Illuminate\Routing\Controller;

    class HomeController extends Controller{
        public static function initJS(){
            foreach (glob("/app/public/js/*.js") as $filename) {
               return $filename;
            }            
        }
    }
?>