<?php
    $data = array("TV1" => "500","TV2" => "1000","RADIO1" =>"800");
    $add_data = array("TV1" => "2000","RADIO2" => "600");
    $result = array_merge($data,$add_data);
    print "<PRE>";
    print_r($result);
    print "</PRE>";
?>


<!-- <?php
  $data = array("TV1" => "500","TV2" => "1000","RADIO1" => "800");
  //data배열변수를 만들고
  $add_data = array("TV1" => "2000","RADIO2" => "600");
  //더해지는 배열데이터
  $result = array_merge($data,$add_data);
  //배열의 서로 병합을 함
  //tv1이 서로 겹치는 데 뒤에 들어오는데이터가 덮어써버린다. 
  //결과인 result배열변수에서 출력한다. 
  print "<PRE>";
  print_r($result);
  print "</PRE>";
?> -->