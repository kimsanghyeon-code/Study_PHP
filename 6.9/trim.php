<?php
    $string = "  1234567890 8 ";
    $result = trim($string);
?>


<?php
  $string = "  1234567890  ";
  //숫자인데 
  //양쪽을 보시면 공백이 입력되어있음
  //숫자외에 다른 모든 입력값은 문자로 인식
  $result = trim($string);
  //트림함수 trim함수 로 string변수를 처리해서
  //result변수에 저장을 함
  
?>