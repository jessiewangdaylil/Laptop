@php
  foreach ($sidebar_object as $i){
    echo
      '<li>'.
          '<a href="'.$i['herf'].'">'.
            '<i class="zmdi zmdi-view-dashboard"></i>'.$i['sidebar_title'].
          '</a>'.
      '</li>';
  }
@endphp

