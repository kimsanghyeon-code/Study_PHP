<!-- <?php
    $data = 5;
    function scope_test(){
        $GLOBALS['data'] += 1;
        print $GLOBALS['data'];
        print"<br>";
    }
    print $data;
    print "<br>";
    scope_test();
    print $data;
    print "<br>";
?> -->


<?php
  //전역 변수
  $data = 5;

  function scope_test(){
    //전역 변수를 참조
    $GLOBALS['data'] += 1;
    //전역변수를 다루는 데 키를 통해서 데이터를 다룬다
    //현재 키는 data라는 텍스트예요
    //마치 연관배열처럼 키를 통해서 값을 호출하고 1을 더해준다.
    print $GLOBALS['data'];
    //글로벌즈변수로 data키값을 호출해서 출력한다.
    print "<BR>";
  }
  print $data;//처음에는 출력은 5
  print "<BR>";
  scope_test();//글로벌즈변수때문에 6이라는 값생성
  print $data;//출력할때도 글로벌즈변수의 키를 호출한것과 같기에 그대로 6이나옴
  print "<BR>";
?>