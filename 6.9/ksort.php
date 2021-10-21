<?php
  $sales = array("TV2" => "1000","TV1" => "500","RADIO1" => "800");
  ksort($sales);
  print "<PRE>";
  print_r($sales);
  print "</PRE>";
?>


<!-- <?php
  $sales = array("TV2" => "1000","TV1" => "500","RADIO1" => "800");
  //배열함수는 연관배열형태로 작업을 해서 sales변수에 값을 저장함
  ksort($sales);
  //ksort 키정렬 , 키가 되는 tv2.. 이것은 오름차순을 키에다가 적용한것임
  print "<PRE>";
  print_r($sales);
  print "</PRE>";
?> -->