<?php
    $string = '"사과","귤","감","밤"';
    $result = addslashes($string);
    print $result;
?>

<!-- <?php
  $string = '"사과","귤","감","밤"';
  //변수에 저장함
  $result = addslashes($string);
  //애드슬레시함수는 쌍따옴표에 슬래시를 넣어줌
  //그래서 쌍따옴표가 문자로서 인식되게 해줌
  //함수처리를 하고 리졸트변수에 데이터를 저장하고
  print $result;
  //결과를 출력한다. 
?> -->