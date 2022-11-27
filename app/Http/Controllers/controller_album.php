<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controller_album extends Controller
{
    public function album_main(){
        return view('album.album');

    }
    public function album_main2(){
        return view('album.album_project');
    }
    public function sideBar(){
        return view('album.Dashboard');

    }

}
