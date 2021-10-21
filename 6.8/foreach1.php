<!-- <?php
  $week = array("월","화","수","목","금","토","일");
  foreach($week as $value){
    print $value;
    print "<BR>";
  }
?> -->


<?php
  $week = array("월","화","수","목","금","토","일");
  //$week배열변수에 array함수로 배열화시킨 요일데이터들이 저장됨
  foreach($week as $value){
    //foreach는 증감값이런설정없이
    //내용물들이 다 빠져나올때까지 반복을 해요
    //$week배열변수의 내용물이 한개씩 $value변수에 들어가요
    print $value;
    //한개의 배열변수데이터가 $value들어있는데, 그것을 출력했다
    print "<BR>";
    //아래줄로 개행!
  }
?>