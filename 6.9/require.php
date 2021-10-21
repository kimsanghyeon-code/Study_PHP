<html>
    <head>
        <title>php 테스트</title>
    </head>
    <body>
        <?php
        require("data.php");
        print "$name 님<BR>";
        print "$message<BR>";
        ?>
    </body>
</html>


<!-- <HTML>
<HEAD>
  <TITLE>PHP 테스트</TITLE>
</HEAD>
<BODY>
<?php
  require("data.php");
  //리콰이어함수로 data.php파일을 불러옴
  print "$name 님<BR>";
  //$name변수의 값을 출력
  print "$message<BR>";
  //$메시지변수의 값을 출력
  //현재 파일에는 변수선언이 없어도 
  //불러오는 파일안에 변수가 들어있다면 가져다가
  //사용할수있다
?>
</BODY>
</HTML> -->
