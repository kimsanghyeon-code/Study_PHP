<?php
  $sales = array("TV2" => "1000","TV1" => "500","RADIO1" => "800");
  asort($sales);
  print "<PRE>";
  print_r($sales);
  print "</PRE>";
?>


<!-- <?php
  $sales = array("TV2" => "1000","TV1" => "500","RADIO1" => "800");
  //데이터를 만들고
  asort($sales);
  //asort함수를 사용해서
  //키와 값중에 값을 오름차순정렬을 한다
  print "<PRE>";
  print_r($sales);
  print "</PRE>";
?> -->