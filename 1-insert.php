<?php
  include $_SERVER['DOCUMENT_ROOT'].'/php/connectDB.php';

  $oldList = array();
  $oldList[0] = ['김태영','ever@gmail.com'];
  $oldList[1] = ['김미우','kmu@gmail.com'];
  $oldList[2] = ['김유나','kun@gmail.com'];
  $oldList[3] = ['김민후','kmh@gmail.com'];
  $oldList[4] = ['김해윤','khy@gmail.com'];
  $oldList[5] = ['김주흥','pka@gmail.com'];

  $newList = array();
  $newList[0] =['조주홍','kmk@naver.com'];
  $newList[1] =['유유코','kpk@naver.com'];
  $newList[2] =['나리','klk@naver.com'];
  $newList[3] =['유리','krk@naver.com'];

  $inputList = array();
  $inputList['dropOutOld'] = $oldList;
  $inputList['dropOutNew'] = $newList;

  $cnt = 0;

  foreach($inputList as $key=>$il){
    foreach($il as $i){
      $sql = "INSERT INTO {$key}(name, email) VALUES ('{$i[0]}','{$i[1]}')";
      $result = $db->query($sql);
      $cnt ++;

      if($result){
        echo $cnt."테이터 입력성공";
      }else{
        echo $cnt."데니터 입력실패";
      }
      echo "<br>";
    }

  }
?>
