<?php
  $username = "user";
  //아이디변수에 user라는 글씨를 저장함
  $password = "pass";
  //비밀번호변수에 pass라는 글씨를 저장함
  $db_data["username"] = "user";
  //연관배열 db_data에 username에 user라는 값을 연결
  $db_data["password"] = "pass";
  //연관배열 db_data에 password에 pass라는 값을 연결

  if($db_data["username"] == $username && $db_data["password"] == $password){
    //만약에 $db_data의 username이 변수username과
    //값이 같은가 그리고
    //db_Data의 password와 $password변수의 값이
    //같은가
    //이두개의 조건이 동시에 만족한다면 
    //중괄호안의 내용을 실행한다

    // 회원 페이지 표시
    print "회원 페이지입니다.";
    //회원페이지라는 것을 표시함
  }
?>