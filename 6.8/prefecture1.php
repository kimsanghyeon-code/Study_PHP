<!-- <?php
  $PrefectureList = array("서울특별시","부산광역시","대구광역시","울산광역시","광주광역시","대전광역시","인천광역시","세종특별자치시","경기도","강원도","충청북도","충청남도","경상북도","경상남도","전라북도","전라남도","제주특별자치도","함경북도","함경남도","평안북도","평안남도","황해도");
  for($i = 0;$i <= count($PrefectureList) - 1;$i ++){
    print $PrefectureList[$i];
    print "<BR>";
  }
?> -->

<?php
  $PrefectureList = array("서울특별시","부산광역시","대구광역시","울산광역시","광주광역시","대전광역시","인천광역시","세종특별자치시","경기도","강원도","충청북도","충청남도","경상북도","경상남도","전라북도","전라남도","제주특별자치도","함경북도","함경남도","평안북도","평안남도","황해도");
  //array함수내부에 문자들을 배치함
  //이렇게 배치된 문자들이 전부 배열요소가 되서
  //좌측에 있는 프리펙쳐리스트배열변수에 
  //저장이 된다
  for($i = 0;$i <= count($PrefectureList) - 1;$i ++){
    //변수아이는 0으로 초기화, 변수아이가 변수프리펙쳐리스트를 카운트함수로 갯수를 센것보다 작거나 같을때까지 반복함
    //배열변수에 카운트함수연산결과에서 빼기 일을 하는 데.
    //배열은 0부터 시작하니까. 
    //갯수를 세면 언제나 전체배열요소길이에서 1을 뺀 숫자배열인덱스(배열방번호)
    //마지막에 들어가게 된다
    //아이변수는 후위증감
    //이에 해당하면 바로아래의 문장(중괄호)을 반복함
    print $PrefectureList[$i];
    //배열변수에 현재 변수아이를 배열의 인덱스번호로 활용한다
    //그것을 출력한다
    //그리고 개행문자 br태그를 활용해서 다음줄로 내린다.
    print "<BR>";
  }
?>