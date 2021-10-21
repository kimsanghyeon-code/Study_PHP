<?php
    $string = "사과,귤,감,밤";
    $array = explode(',',$string);
    print "<PRE>";
    print_r($array);
    print "</PRE>";
?>

<!-- <?php
  $string = "사과,귤,감,밤";
  //문자열사이에 구분자인 콤마를 넣었은 것을
  //string변수에 저장을 함
  $array = explode(',',$string);
  //explode함수가 첫인자는 구분자인 콤마를  넣고
  //두번째에는 문자열을 넣음
  //array배열변수에 저장을 합니다. 
  //결국은 explode는 구분자로 데이터를 잘라서 배열화시킨다.
  print "<PRE>";
  print_r($array);//배열에 대한 출력을 하는 함수
  //print_r함수를 실행
  //양쪽에 pre태그를 넣어서 원문그대로 html의 형태로 출력되게함
  print "</PRE>";
?> -->