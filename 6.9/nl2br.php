<?php 
    $string = "PHP의 함수는 
    정말 편리 
    합니다.";
    $result = nl2br($string);
    print $result;
?>


<!-- <?php
//string변수에 쌍따옴표사이에 문자들이 자유롭게 입력되어있음
//중간에 엔터키입력을 하고.

  $string = "PHP의 함수는
정말 편리
합니다.";
  $result = nl2br($string);
  //nl2br함수가 스트링변수에 특정한 작업을 해요
  //그 작업은 엔터키를 입력한 곳마다 
  //br태그를 삽입해줘요. 자동으로.
  //이 결과를 result변수에 넣음
  print $result;
  //출력을 했죠.
  //입력한 대로 나와는 이러한 성향때문에
  //게시판이나 문자자료를 넣는 인터페이스에서
  //nl2br함수를 많이 사용한다. 
?> -->