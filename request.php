<?php
  include 'connect.php';
  if(isset($_POST["request_teller_1"]) || isset($_POST["request_teller_2"])){
	 $full_name = $username;
     $phone_number = $_SESSION['pnum'];
     $token = md5(uniqid(rand(), true));
     if (!empty($_POST["request_teller_1"])) {
        $teller_id = $_POST['request_teller_1'];       
     }
     elseif (!empty($_POST["request_teller_2"])) {
        $teller_id = $_POST['request_teller_2'];       
     }
     else{
        $teller_id = 0;       
    }
      $sql = "INSERT request_queue SET 
      full_name = :name,          
      phone_number = :pnum,
      token = :gentoken,
      teller_id = :tellerid";
      $stmt = $con->prepare($sql); 
      $stmt->bindParam(':name', $full_name,PDO::PARAM_STR);   
      $stmt->bindParam(':pnum', $phone_number,PDO::PARAM_STR);
      $stmt->bindParam(':gentoken', $token,PDO::PARAM_STR);
      $stmt->bindParam(':tellerid', $teller_id,PDO::PARAM_STR); 
      $stmt->execute();
?>