<?php
  include $_SERVER['DOCUMENT_ROOT'].'/php/connectDB.php';

  $email = $_POST['email'];

  $emailValidateCheck = filter_Var($email, FILTER_VALIDATE_EMAIL);

  if($emailValidateCheck){
    $sql = "SELECT email FROM myMember WHERE email = '{$email}'";

    $result = $db->query($sql);

    $dataCount = $result->num_rows;

    $emailCheck = 'none';
    if($dataCount>0){
      $emailCheck = 'exists';
    }

    echo json_encode(
        arrary(
          'result'=>$emailCheck,
          )
      );
    }else{
      echo json_encode(
        array(
          'result'=>'notEmail',
        )
      );
    }
?>
