<?php
  $data = 0 & 0; //and연산
  print $data."<BR>"; //0
  $data = 1 & 0; //한쪽에 0이 있으니
  print $data."<BR>"; //0
  $data = 0 & 1; //한쪽에 0이 있으니
  print $data."<BR>"; //0
  $data = 1 & 1; //둘다 1이니까
  print $data."<BR>"; //1 
?>