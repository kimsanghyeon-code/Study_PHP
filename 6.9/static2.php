<!-- <?php
    counter();
    counter();
    counter();
    counter();
    counter();
    function counter(){
    static $data = 0;
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
    static $data = 0; //지역변수일뻔한 data변수가
//static키워드가 선언이 되어서 정적변수가 되는거예요.
//static변수가 됨. 이럼으로써 변수값 자체가 전역적으로 쓰이게 됨
    print $data ++;
    //프린트하고  후위증감을 하면 그대로 값의 증가로 이어진다.
    print "<BR>";
  }
?>