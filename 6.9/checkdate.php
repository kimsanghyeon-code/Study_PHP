<?php
    $month =2;
    $day = 31;
    $year = 2014;
    if(!checkdate($month,$day,$year)){
        print "올바른 날짜를 입력하세요.";
}
?>


<!-- <?php
  $month = 2;
   $day = 31;
  $year = 2014;
  //날짜에 관련된 숫자데이터를 변수에 넣었음

  if(!checkdate($month,$day,$year)){
    //만약 체크데이트함수가 실제존재하면 true
    //존재하지않으면 false
    //존재하지않는 날짜를 넣었고.
    //이것이 false가 되는 !부정을 추가해서
    //true가 되어서 
    //아래의 경고메시지를 출력할수있게 되었다
    print "올바른 날짜를 입력하세요.";
  }
?> -->