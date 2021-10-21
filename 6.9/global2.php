<!-- <?php
    $data = 5;
    function scope_test(){
        global $data;
        $data += 1;
        print $data;
        print "<br>";
    }
    print $data;
    print "<br>";
    scope_test();
    print $data;
    print "<br>";
?> -->

<?php
  //전역 변수선언
  $data = 5;

  function scope_test(){
    global $data;
    //전역 변수를 참조
    //글로벌키워드가 변수앞에 붙으면 
    //해당변수는 글로벌변수가 되요
    $data += 1;
    //data변수에 1을 더하고 저장함
    print $data;
    //그것을 출력함
    print "<BR>";
  }//함수가 실행이 되어야 작동된다.


  print $data;//전역변수 현재 5
  print "<BR>";
  scope_test();//함수를 작동
  //그런데 여기의 함수는 글로벌키워드의 영향으로
  //이 함수에서 일어난 연산은 전역변수에 영향을 준다
  //변수값은 1을더해서 6이된다.
  
  print $data;//함수가 종료되고, 다시 전역변수를
  //출력함
  print "<BR>";
?>


