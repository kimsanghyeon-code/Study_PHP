<!-- <?php
  $i = 0;
  while($i <= 10){
      print $i ++;
      print "<br>";
  }
?> -->

<?php
  $i = 0;
  //변수i에 0을 넣고
  while($i <= 10){
    //반복문 while시작
    //변수아이가 10보다 작거나 같을때까지
    print $i ++;
    //변수아이는 후위증감을 
    //개행문자를 찍어줘서 다음줄로 내려가게 해줌
    print "<BR>";
  }
?>