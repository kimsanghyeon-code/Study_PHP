<!-- <?php
 list($year,$month,$day) = get_today();
 print $year.'년'.$month.'월'.$day.'일';
 function get_today(){
     $year = date('Y');
     $month = date('m');
     $day = date('d');
     return
     array($year,$month,$day);
 }
?> -->


<?php
  list($year,$month,$day) = get_today();
  //get_today()함수의 결과를 list함수로 
  //year,month,day라는 3개의 변수에 값을저장
  //원래 list함수는 배열로 넘어오는 데이터를
//다 뜯어가지고 일반 변수에 값을 할당하는 내장함수이다. 
//이뜻은 get_today함수의 결과가 배열이라는 뜻이예요.
  
  print $year.'년'.$month.'월'.$day.'일';
  //생성된 3개의 변수를 각각 도트연산자로 연결해서
  //년월일데이터를 출력한다
  
  function get_today(){ //함수의 내용
    $year = date('Y');
    //date오늘 날짜의 년도값을 $year변수에저장
    $month = date('m');
    //월데이터를 month변수에 저장
    $day = date('d');
    //일데이터를 day변수에 저장
    return array($year,$month,$day);
    //마지막이 중요함
    //array함수로 3개의 변수를 결합을 시켜서 
    //리턴을 시켜버림.
    //함수바깥에 배열변수가 대기하고 있다면
     //결과값을 저장할수있다. 배열로서.
     //리턴을 할때.
     //반드시 값은 하나로 와야함.
     //진짜 데이터가 한개이든, 아니면 배열로 여러변수의값이
     //뭉쳐져서 하나로 전달되든(하나의 배열로서)
  }
?>  