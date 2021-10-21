<!-- <?php
    check_member();
    function
    check_member($username = "guest",$password = "guest"){
        if($username == "guest" && $password == "guest"){
            print "게스트님 환영합니다!";
        }else{
            print "회원님 환영합니다!";
        }
    }
?> -->


<?php

//args=전달인자(argument) : 함수에 인자로 값만 넣을때
//param=parameter(매개변수) : 함수안에 변수를 넣을때 
 $member="member";
  $password="member";
  //만약위의 변수를 함수안에 차례로 넣으면 결과는 달라진다
  //함수의 디폴트 인자가 작동하지않기때문이다. 
  check_member();
//함수호출

  function check_member($username = "guest",$password = "guest"){
    //함수를 선언하는 데 동시에 괄호안쪽을 보면
    //$username = "guest",$password = "guest"이
    //들어있는데, 이 경우에는 초기화를 해주는 것임.
    //외부에서 변수 안넣어도 초기화를 해줌
    if($username == "guest" && $password == "guest"){
//만약에 $username이 게스트이고 패스워드변수가 게스트이면 중괄호를 실행해라      
//지금 코드에서는 2행의 코드를 보면 함수호출은 해도 
//변수선언은 없죠. 이경우에는 디폴트가 작동을 하는 것임
//if문에 해당하는 조건이 작동할때
//디폴트로 생성되는 변수들이 if문에 들어간다는 것임. 
//현재 코드에서는 디폴트의 변수와 if문에서 제시하는 조건이 같기때문에
//참이 된다는 거죠.
      print "게스트님 환영합니다!";
      //그래서 바로 아래의 코드가 실행된다 else에 있는 실행안됨
      //이 예제자체가 디폴트인자선언, 디폴트변수선언을 하는 것이기때문에
      //함수 소괄호안에있는 디폴트의 내용을 눈여겨봐야한다
    }else{
      print "회원님 환영합니다!";
    }
  }
?>