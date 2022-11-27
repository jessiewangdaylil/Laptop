
@extends('parent.Dashboard')

@section('css')
  <link rel="stylesheet" href="{{asset('album2/style.css')}}">
@endsection

@section('content')
@php
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
 for ($i = 0 ; $i<count($title); $i++){
    $picFrame[$i] = [$title[$i], $photoLink[$i], $contentDetails[$i]];
 }                   
            
@endphp

@php  
    foreach($picFrame as $key){    
        echo '<div class="container">'.
                '<h3 class="title">'.$key[0].'</h3>'.
                 '<div class="content">'.
                 '<a href="'.$key[1].'" target="_blank">'.
                   '<div class="content-overlay"></div>'.
                     '<img class="content-image" src="'.$key[1].'">'.
                     '<div class="content-details '.$key[2].'">'.
                       '<h3>This is a title</h3>'.
                       '<p>This is a short description</p>'.
                      '</div>'.
                 '</a>'.
                 '</div>'.
                '</div>';

    }

@endphp
{{-- {{$global}}
{{$album_test}} --}}
@endsection










