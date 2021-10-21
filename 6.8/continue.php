<!-- <?php
 $member = array("name" => "O철수","tel" => "03-0000-0000","age" => 20, "tall" => 170);
 foreach($member as $key => $value){
     if($key == "name"){
         $title = "이름";
     }else{
         if($key == "age"){
             $title = "연령";
         }else{
             if($key == "tall"){
                 $title = "신장";
             }else{
                 print "처리를 건너뜁니다.<br>";
                 continue;
             }
         }
     }
     print"$title:$value";
     print"<br>";
 }
 ?> -->


<?php
  $member = array("name" => "○철수","tel" => "03-0000-0000","age" => 20,"tall" => 170);
  //두 번째배열요소의 키는 현재 논리조건중에 없다. 
  //"tel" else부분에 가서 컨티뉴를 만나서 해당회전은 마무리한다. 
  foreach($member as $key => $value){
    if($key == "name"){
      $title = "이름";
      //타이틀변수에 이름을 넣어줌
    }else{
      if($key == "age"){
        $title = "연령";
      }else{
        if($key == "tall"){
          $title = "신장";
        }else{
          print "처리를 건너뜁니다.<BR>";
          continue;
        }
      }
    }
    print "$title : $value";
    print "<BR>";
  }
?>