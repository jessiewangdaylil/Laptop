@extends('parent.sidebar')

@section('css')
  <link rel="stylesheet" href="{{asset('album2/style.css')}}">
@endsection
@section('sidebarTitle','My Journey' )

@section('content')
  @php
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

@endsection

@section('sidebarItems')
  @include('include.html_li')
@endsection











