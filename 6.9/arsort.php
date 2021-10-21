<?php
  $sales = array("TV2" => "1000","TV1" => "500","RADIO1" => "800");
  arsort($sales);
  print "<PRE>";
  print_r($sales);
  print "</PRE>";
?>


<!-- <?php
  $sales = array("TV2" => "1000","TV1" => "500","RADIO1" => "800");
  //배열함수로 연관배열을 만들고.
  //sales변수에 값을 저장함
  arsort($sales);
  //arsort함수로 값을 내림차순을 한다. 
  print "<PRE>";
  print_r($sales);
  print "</PRE>";
?> -->