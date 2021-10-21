<!-- <?php
    counter();
    counter();
    counter();
    counter();
    counter();
    function counter(){
        $data = 0;
        print $data ++;
        print "<br>";
    }
?> -->


<?php
  counter();
  counter();
  counter();
  counter();
  counter();

  function counter(){
    $data = 0; //지역변수data가 선언됨
    print $data ++; //후위증감
    //우선은 데이터가 가지고 있는 0값을 출력을 하는데
    //그이후에 지역변수는 증가를 하겠죠.
    //문제는 함수가 종료가 되면
    //지역변수는 사라진다는거예요
    //그래서 계속 0만 반복해서 찍힌다
    print "<BR>";
  }
?>