<?php
  $age = 19;// 연령
  //$age변수에 값을 저장
  $adult_age = 20;// 비교를 위한 연령
  //$adult_age 에 값을 저장 비교를 위해서
  $adult_check = ($adult_age <= $age)?"어른":"아이";
  //3항연산자가 등장함
  //서로 비교해서 false결과가 나오니까. 
  //맨뒤에 있는 아이가 변수에 저장이 되고
  print $adult_check." 입니다.";
  //출력이 된다 
?>