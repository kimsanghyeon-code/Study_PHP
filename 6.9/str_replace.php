<?php
  $html = '<FONT size="3">Hello!</FONT><BR>';
  $search = 'size="3"';
  $replace = 'size="5"';
  $result = str_replace($search,$replace,$html);
?>


<!-- <?php
  $html = '<FONT size="3">Hello!</FONT><BR>';
  //폰트태그 설정이 있는데. 이것을 html변수에 넣어요
  $search = 'size="3"';
  //서치변수에 사이즈속성을 넣어요
  $replace = 'size="5"';
  //변경리플레이스변수에 사이즈속성을 넣어요
  $result = str_replace($search,$replace,$html);
  //str_replace함수에 찾을려는값에 서치변수넣고
  //변경하려는 내용에 리플레이스변수넣고
  //원본내용에 html변수를 넣고
  //연산을 돌려서 리졸트변수에 넣는다
  
  
?> -->