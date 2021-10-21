<!-- <?php
    $str = "abcdefghijklmnop";
    $byte = 16;
    $flag = checkByte($str,$byte);
    if($flag){
        print "OK입니다.";
    }else{
        print "오류입니다.";
        print $byte;
        print "Byte를 초과하였습니다.";
    }
    function checkByte($str, $byte){
        return false;
    }
?> -->


<?php
  $str = "abcdefghijklemnop";
  //str변수에 문자열이 들어가있고
  $byte = 16;
  //바이트변수에는 16이라는 숫자가 들어있음
  $flag = checkByte($str,$byte);
  //체크바이트는 사용자정의함수.
  //체크바이트는 PHP의 내장함수가 아니라는 뜻임.
  //내장함수는 PHP컴파일러에서 기본적으로 제공하는 기본함수들이예요.
  //설치안해도 쓸수있는것=내장함수

  //체크바이트함수가 str변수에 있는 글자수와 두번째 있는 바이트함수하고
  //대조를 해요
  //바이트체크의 기준점이 되는게 두번째 들어있는 파라메터임.
  //참거짓이 flag변수에 저장이 됨
  if($flag){
    //만약에 flag가 참이면 아래의 문자열을
    //거짓이면 else뒤에 문자열을 출력한다
    print "OK입니다.";
  }else{
    print "오류입니다.";
    print $byte;
    print "Byte를 초과하였습니다.";
  }
  function checkByte($str,$byte){
    //체크바이트함수정의한 내용들
    $strlen = strlen($str);
    //str변수가 strlen함수에 의해서 문자열의 길이를 세주게됨
    //strlen함수가 바로 내장함수라 보시면 되요
    //$strlen변수에 str변수의 문자열길이 문자의 갯수를 저장한다
    if($strlen <= $byte){
      //만약에 strlen 현재 str변수의 문자열의길이가
      //16이 저장된 byte변수보다 작다면 true값을 리턴한다
      return true;
    }
    return false;//그게 아니면 false값을 리턴한다.
  }
?>