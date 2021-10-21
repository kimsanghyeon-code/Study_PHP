<?php
  $member[] = array("name" => "○철수","age" => 20,"tall" => 170);
  $member[] = array("name" => "○철수","age" => 20,"tall" => 170);
  //2차원배열이라고해요
  //0번인덱스에 배열이 추가되어서 면의 형태가 됨
  print $member[0]["name"];
  //2차원배열은 대괄호가 2개가 생긴다
  print "<BR>";
  print $member[0]["age"];
  print "<BR>";
  print $member[0]["tall"];
?>