<!-- <?php
  $member[0] = "O철수";
  $member[1] = "O영희";
  $member[2] = "o길동";
  $member[3] = "o정자";
  $member[4] = "o희동";
  $i = 1;
  $limit = 3;
  foreach($member as $key => $value){
      if($i > $limit){
          print "반복을 빠져나옵니다. <br>";
          break;
      }
      print"이름 : $value";
      print"<br>";
      $i ++;
  }
?> -->


<?php
  $member[0] = "○철수";
  $member[1] = "○영희";
  $member[2] = "○길동";
  $member[3] = "○정자";
  $member[4] = "○희동";
  //$member배열의 데이터를 추가함
  $i = 1;
  $limit = 3;
  foreach($member as $key => $value){
    //키라는 것을 문자만 되지않는가 할수있지만. 배열의 인덱스번호도 키가 됨
    if($i > $limit){
      print "반복을 빠져나옵니다.<BR>";
      break;
    }
    print "이름 : $value";
    print "<BR>";
    $i ++;
  }
?>