<?php
    $string = '<a href="http://www.namgarambooks.co.kr/">남가람북스</a>';
    $result = htmlspecialchars($string,ENT_QUOTES);
    print $result;
?>


<!-- <?php
  $string = '<a href="http://www.namgarambooks.co.kr/">남가람북스</a>';
  //a태그를 string변수에 넣음
  $result = htmlspecialchars($string,ENT_QUOTES);
  //html스페셜캐릭터즈라는 내장함수로 처리를해요
  //string변수의 내용이 html로서의 기능을 못하고
  //일반 문자열로서 출력이 된다. 

  print $result;
  //외부에서 여러분개발한 사이트나 시스템에
  //게시판이나 코드를 등록할수있는곳에
  //악성코드나 해킹코드를 심어요.
  //그게 작동이 못되도록 원천적으로 막는 함수중에 하나가 
  //html스페셜스페셜캐릭터즈함수임.
?> -->