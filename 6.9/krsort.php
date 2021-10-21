<?php
  $sales = array("TV2" => "1000","TV1" => "500","RADIO1" => "800");
  krsort($sales);
  print "<PRE>";
  print_r($sales);
  print "</PRE>";
?>


<!-- <?php
  $sales = array("TV2" => "1000","TV1" => "500","RADIO1" => "800");
  //연관배열형태로 데이터를 만들고
  //sales변수에 넣어줌
  krsort($sales);
  //krsort함수로 sales변수를 처리를 하고 
  //키값으로 내림차순을 한다
  print "<PRE>";
  print_r($sales);
  //출력함
  print "</PRE>";
?> -->