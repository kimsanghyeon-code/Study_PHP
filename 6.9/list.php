<?php
  $data = array("사과","귤","감");
  list($fruit0,$fruit1,$fruit2) = $data;
  // 위의 코드와 같은 의미입니다.
  $fruit0 = $data[0];
  $fruit1 = $data[1];
  $fruit2 = $data[2];
?>


<!-- <?php
  $data = array("사과","귤","감");
  //배열을 만드는데. 
  //data배열변수에 과일의 이름을 넣음
  list($fruit0,$fruit1,$fruit2) = $data;
  //배열변수인 data의 배열들을 좌측에 있는
  //곳에 넘겨줌
  //list함수에 넘겨줬음
  //넘어오는 배열데이터 하나씩 짤라서 
  //괄호안에 준비된 변수에 하나씩 집어넣어줘요

  // 위의 코드와 같은 의미입니다.
  $fruit0 = $data[0];
  //data배열변수의 0번인덱스데이터를 좌측에
  //fruit0변수에 값을 넘겨줌
  $fruit1 = $data[1];
  $fruit2 = $data[2];
?> -->