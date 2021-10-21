<?php
  $username = "user";
  $password = "pass";
  $db_data["username"] = "user";
  $db_data["password"] = "pass";
  if($db_data["username"] == $username && $db_data["password"] == $password){
    // 회원 페이지 표시
    print "회원 페이지입니다.";
  }else{ 
    // 로그인실패 처리
    print "로그인에 실패하였습니다.";
    //else문이 존재한다
    //아닌 경우에 대한 논리를 추가시킬수 있음
  }
?>