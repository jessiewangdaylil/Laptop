<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SidebarController extends Controller
{
    public function sidebartest(){
      $herf =['https://laravel.com/docs/9.x/blade','https://laravel.com/docs/9.x/blade','https://laravel.com/docs/9.x/blade'];

      $title =['Home','map','schedule'];
      $amount=max([count($herf),count($title)]);

      for($i = 0 ; $i < $amount ; $i++){
        $sidebar_object[$i] = [$herf[$i],$title[$i]];
      }
      return view('sidebar_test1203',compact('sidebar_object'));

    }
}
