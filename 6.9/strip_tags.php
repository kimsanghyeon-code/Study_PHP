<?php
    $string = '<A href="http://www.namgarambooks.co.kr/">남가람북스</A><hr><br>';
    $result = strip_tags($string);
    print $result;
?>


<!-- <?php
  $string = '<A href="http://www.namgarambooks.co.kr/">남가람북스</A><hr><br>';
  //string변수에 하이퍼링크태그를 걸어준 문자열을 저장
  $result = strip_tags($string);
  //스트립태그함수를 string변수에 적용을 해서.
  //result변수에 저장을 해요
  print $result;
  //result변수를 출력을 해요
?> -->