<HTML>
<HEAD>
  <TITLE>PHP 테스트</TITLE>
</HEAD>
<BODY>
<?php
  // 여기에 동작을 확인할 코드를 작성합니다.
  $week[] = "월";
  $week[] = "화";
  $week[] = "수";//배열은 0번인덱스부터 등록됨
  //[]대괄호안에 인덱스번호를 써야하는데.
  //번호를 쓰지않으면 번호가 자동으로 들어감
  print $week[0];
  print "<BR>";
  print $week[1];
  print "<BR>";
  print $week[2];
?>
</BODY>
</HTML>