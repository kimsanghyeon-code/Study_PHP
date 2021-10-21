<?php
  $filename = "test.txt";
  //경로를 써주면 특정경로의 데이터를읽어올 수 있다. 
  if(is_readable($filename)){
    //이즈리더블함수는 인수로 들어와 있는 변수에 저장된 파일명안의 내용을 읽어들일수있는지 판단함. 이즈는 정보함수임. 상황파악만하고 참,거짓돌려줌
    $contents = file_get_contents($filename);
    //파일겟컨텐츠는 변수에 저장된 데이터를읽어오는 함수이다. 여기서는 읽어온내용을 컨텐츠변수에 다 쏟아붓고 있다. 
    print $contents;
  }else{
    print $filename."는 읽어 들일 수 없습니다.";
  }
?>