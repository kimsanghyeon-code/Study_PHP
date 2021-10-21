<?php

$filelist = `dir`;
//역방향따옴표는 시스템명령어를 넣을수있는공간이예요
//밑에 ls는 원래 리눅스명령어예요
//이게 윈도우만 아니라 다양한 운영체제의 시스템명령어를
//활용할수있음
//$filelist = `ls -laF`;
  print "<PRE>";//pre태그는 문단의 형태로 출력내용을 그대로 
  //그대로 보여줌.
  print $filelist;
  print "</PRE>";
?>