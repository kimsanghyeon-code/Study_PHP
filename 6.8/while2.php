<!-- <?php
  if($dirhandle = opendir('.')){
      while(false !== ($filename =
      readdir($dirhandle))){
          print $filename."<br>";
      }
      closedir($dirhandle);
  }
?> -->


<?php
  if($dirhandle = opendir('.')){
    //만약에 오픈디렉토리함수를 활용해서
    // . 도트는 현재의 디렉토리
    // 현재의 디렉토리에서 어떤 파일들이 있는지
    //정보를 읽어내는 함수인데, 이때 내용물이 없으면
    //false거짓이 뜸. 내용이 있으면 내용물을 꺼내겠죠.
    //어떠어떠한 파일이나 디렉토리가 있다는 정보가 나와요
    //그게 dirhandle변수에 들어감.
    //내용물이 있다면 중괄호를 실행한다
    while(false !== ($filename = readdir($dirhandle))){
      //!== 느낌표더블이퀄은 같지않다라는 뜻이예요
      //$dirhandle의 내용을 읽어들이는 readdir함수를 통해서
      //실제적인내용을 $filename변수에 저장한다
      //그 저장한내용이 존재한다면 false와 !== 상태가 
      //true가 된다. 
      //그러면 $filename변수에 있는 자료를 한개 찍어주고 
      //개행태그 br를 작동시켜서 다음줄로 내린다
      //그리고 다시 while을 돌고 
      //$filename변수에 남아있는 파일정보를 하나씩 출력해나간다
      //나중에 더이상꺼낼 파일정보가 없다면
      // false와 !== 관계가 거짓이 되서 while문을 빠져나온다
      print $filename."<BR>";
    }
    closedir($dirhandle);
    //마지막에는 while을 빠져나와서
    //closedir함수 클로즈디렉토리 함수가 
    //$dirhandle변수에 있는 디렉토리오픈상태를 
    //닫아버린다. 그러면 더이상 디렉토리를 읽지않는 상태가 된다.
  }
?>