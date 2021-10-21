<!-- <?php
  $member = array("name" => "○철수","age" => 20,"tall" => 170);
  foreach($member as $key => $value){
    print "$key : $value";
    print "<BR>";
  }
?> -->


<?php
  $member = array("name" => "○철수","age" => 20,"tall" => 170);
  //연관배열형태로해서 name키와 철수벨류가 연결되고 
  //이러한 연관배열이 $member배열변수에 저장되요
  foreach($member as $key => $value){
    //foreach는 연결배열스럽게
    //$member배열변수에 있는 Key 예를들어 name같은 키를 하나꺼내서
    //value변수에 값을 저장시켜요
    print "$key : $value";
    //$key출력하고 값도 출력한다
    print "<BR>";
    //데이터나올때마다 한줄씩 내려준다
  }
?>