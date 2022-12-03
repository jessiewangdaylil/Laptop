<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlbumController extends Controller
{
    public function album_example(){
        return view('album.album');
    }
    public function album_main(){
      //content variables
        $title = ['Text fadeIn bottom',
                    'Text fadeIn top',
                    'Text fadeIn left',
                    'Text fadeIn right' ,
                    'Text fadeIn top left',
                    'Text fadeIn top right',
                    'Text fadeIn bottom left',
                    'Text fadeIn bottom right'];
        $photoLink = ["https://images.unsplash.com/photo-1668737941502-3ef01fe1bcb9?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=774&q=80",
                    "https://images.unsplash.com/photo-1668738160861-5312a3546dd8?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=774&q=80",
                    "https://images.unsplash.com/photo-1668738160866-9b1882633889?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=774&q=80",
                    "https://images.unsplash.com/photo-1668738160909-9ff4efc78b7f?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=774&q=80",
                    "https://images.unsplash.com/photo-1669298223021-7d4e22a5065e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=774&q=80",
                    "https://images.unsplash.com/photo-1669299207469-55ad9c648a0b?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=435&q=80",
                    "https://images.unsplash.com/photo-1669299255175-9eabcb13a6e5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=774&q=80",
                    "https://images.unsplash.com/photo-1669299193622-0ddcc84d245e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=774&q=80"
        ];
        $contentDetails = ['fadeIn-bottom',
                            'fadeIn-top',
                            'fadeIn-left',
                            'fadeIn-right',
                            'fadeIn-top fadeIn-left',
                            'fadeIn-top fadeIn-right',
                            'fadeIn-bottom fadeIn-left',
                            'fadeIn-bottom fadeIn-right'];
      //sidebar variables
        $herf =['http://laravel_blog.com:6080/public/album_main',
                'https://www.nps.gov/yell/planyourvisit/maps.htm',
                'https://laravel.com/docs/9.x/blade'];
        $sidebar_title =['Home',
                         'map',
                         'schedule'];
        $amount=min([count($herf),count($sidebar_title)]);

        for($i = 0 ; $i < $amount ; $i++){
          $sidebar_object[$i] = ['herf' => $herf[$i],'sidebar_title' => $sidebar_title[$i]];
        }


        return view('album.album_main',compact('title','photoLink','contentDetails','sidebar_object'));
    }
    public function sideBar(){
        return view('album.sidebar');

    }

}
