<?php
    $myage = 19;
    check_adult($myage);
    function check_adult($age){
        $adult_age = 20;
        $adult_check = ($adult_age <= $age)?"어른":"아이";
        print $adult_check." 입니다.";
    }
?>


<?php
  $myage = 19;// 연령
  //변수선언
  check_adult($myage);
  //아래에 선언된 함수에 위에서 선언한
  //변수를 인수로 괄호안에 넣어줬음

  function check_adult($age){
    $adult_age = 20;// 비교를 위한 연령
    //어덜트에이지변수에는 20으로 초기화
 $adult_check = ($adult_age <= $age)?"어른":"아이";
 //3항연산자로 어덜트에이지변수하고 에이지변수하고 비교해서
 //에이지변수가 크다면 참이 되어서 어른이라는 단어, 
 //에이지변수가 작다면 거짓이 되어서 아이라는 단어를
 //가장 왼쪽에 있는 $adult_check변수에 해당 단어를 저장한다. 
    print $adult_check." 입니다.";
    //출력한다. $adult_check변수의 내용을
  }
?>
