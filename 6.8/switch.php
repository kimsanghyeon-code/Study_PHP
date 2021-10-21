<!-- <?php
  $type = "form";
  switch($type){
      case "form":
        print "등록 폼입니다.";
        break;
        case "confirm":
            print "확인 화면입니다.";
            break;
            case "exec":
                print "등록처리를 실행중";
                break;
                default:
                print "화면이 없습니다.";
  }
?> -->

<?php
  $type = "form";
  //$는변수나 배열앞에 붙이는 것이다. PHP에서는
  //타입변수를 만들고 그안에 form이라는 글자를 넣음
  switch($type){
    // 등록 폼을 표시
    //스위치문에 타입변수를 넣음
    //타입변수의 값과 일치하는 case문을 
    //대조하면서 관련 케이스를 찾는다
    case "form":
      print "등록 폼입니다.";
      break;//폼이라는 글씨가 일치하는 경우
      //프린트명령을 실행하고
      //브레이크. 스위치문을 종료한다. 
      //그게 아닐경우에는 아래의 문장을 
      //전부비교함
      //그러다가 더이상비교할게 없다하면 default디폴트문으로 
      //연결이 됨
    // 확인 화면을 표시
    case "confirm":
      print "확인 화면입니다.";
      break;
    // 등록처리를 실행
    case "exec":
      print "등록처리를 실행중";
      break;
    //오류 처리
    default:
      print "화면이 없습니다.";
  }
?>