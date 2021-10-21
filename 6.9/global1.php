<!-- <?php
    $data = 5;
    function scope_test(){
        $data = 1;
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
  //전역 변수
  $data = 5;
  function scope_test(){
    //지역 변수를 참조
    //함수내에서 선언되는 변수가 지역변수가 됨
    $data = 1;
    //전역변수와 이름이 같은 상황이예요
    //지역변수data에 1을 저장
    print $data;
    //출력
    print "<BR>";//1줄개행을 함
  }

  print $data;//전역변수값
  print "<BR>";
  scope_test();//함수를호출함
  //함수에 의한 출력값은 지역변수의 내용을
  //담고있음

  print $data;
  //함수외의 출력은 다시 전역변수출력이 됨

  print "<BR>";
?>
