<?php
namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\File;

    class HomeController extends Controller{
        public static function initJS(){
            $files = File::files(public_path('js'));
            return collect($files)->map(function($item){
                return $item->getFileName();
            });
    }
}
?>