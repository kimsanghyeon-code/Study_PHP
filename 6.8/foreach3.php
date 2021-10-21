<!-- <?php
  $member = array("name" => "O철수", "age" => 20, "tall" => 170);
  foreach($member as $key => $value){
      if($key == "name"){
          $title = "이름";
      }else{
          if($key == "age"){
              $title = "연령";
          }else{
              if($key == "tall"){
                  $title = "신장";
              }
          }
      }
      print "$title:$value";
      print "<br>";
  }
?> -->


<?php
  $member = array("name" => "○철수","age" => 20,"tall" => 170);
  //연관배열변수가 선언
  foreach($member as $key => $value){
    //foreach에서 키를 뽑아서 벨류값을 호출했음
    if($key == "name"){
      //만약에 키가 name과 같다면
      $title = "이름";
      //$title변수에 이름을 저장한다.
    }else{// 그게 아니면
      if($key == "age"){//키가 age냐?라고 묻고 맞으면 타이틀변수에 연령을 저장
        $title = "연령";
      }else{
        if($key == "tall"){
          $title = "신장";
        }
      }
    }
    print "$title : $value";
    //타이틀변수와 벨류변수를 출력한다. 
    print "<BR>";
  }
?>