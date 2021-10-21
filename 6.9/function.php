<!-- <?php
    function print_copyright(){
        print "<FONT size=2>";
        print "Copyright 2013 여러분의 이름 All rights reserved.";
        print "</FONT>";
    }
    print_copyright();
?> -->


<?php
  function print_copyright(){
    //함수의 선언
    print "<FONT size=2>";
    //내부에 html코드가 들어있음
    print "Copyright 2013 여러분의 이름 All rights reserved.";
    print "</FONT>"; //닫는태그도 print명령으로 입력함
  }
  print_copyright();
  //위에서 선언한 함수를 작동시키는 것 밖에 없음
?>