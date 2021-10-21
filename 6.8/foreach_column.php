<!-- <?php
  $week = array("월","화","수","목","금","토","일");
  reset($week);
  while(list(,$value) = each($week)){
    print $value;
    print "<BR>";
  }
?> -->

<?php
  $week = array("월","화","수","목","금","토","일");
  //배열함수로 위크배열변수에 요일데이터넣고
  reset($week);
  //reset함수는 재설정인데
  //배열의 0번인덱스로 위치시키는 거에요
  //커서를
  //배열을 읽어들일때. 커서와 같은 존재가 있는데
  //그것이 제일맨앞으로 위치하게 해주는 것이 리셋함수다. 
  while(list(,$value) = each($week)){
    //while문
    //each는 $week배열변수의 데이터를 하나씩 뽑아내고
    //그것을 list함수를 통해서 연관배열로 뜯어줘요
    //,$value인데 키가 없어서 벨류값만 배치를 시키는거예요.
    //위치를 정돈을 하는거예요
    print $value;
    //위크배열변수에서 가져온 데이터를
    //한개씩 벨류변수에 넣고 
    // 그것들을 출력하는 형태
    print "<BR>";
    //한줄씩 개행을 함
    //foreach를 쓰지 않고
    //while문으로 foreach와 같은 효과를 내는 방법임.
  }
?>