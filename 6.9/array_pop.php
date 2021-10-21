<?php
    $data = array("사과","귤","감");
    $kaki = array_pop($data);
    print "<PRE>";
    print_r($data);
    print "</PRE>";
    print $kaki;


//     <?php
//   $data = array("사과","귤","감");
//   //배열을 생성해서 data변수에 넣고
//   $kaki = array_pop($data);
//   //array_pop함수로 맨뒤에 있는 배열요소를 
//   //팅겨내는데. 그것을 좌측에 있는 변수에 저장을 했음
//   print "<PRE>";
//   print_r($data);
//   //함수적용결과를 출력하고
//   print "</PRE>";
//   print $kaki;
//   //팅겨진 데이터를 저장하고 있는 변수의 내용을 출력한다
// ?>