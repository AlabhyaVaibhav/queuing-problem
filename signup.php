<?php 
	include 'connect.php';
      $full_name = $_POST['form_name'];
      $email = $_POST['form_email'];
      $phone_number = $_POST['pnum'];
      $token = md5(uniqid(rand(), true)) ;       
      $sql = "INSERT signup SET 
      full_name = :name,          
      email = :email,
      phone_number = :pnum,
      token = :gentoken";
      $stmt = $con->prepare($sql); 
      $stmt->bindParam(':name', $_POST['form_name'],PDO::PARAM_STR);   
      $stmt->bindParam(':email', $_POST['form_email'], PDO::PARAM_STR);
      $stmt->bindParam(':pnum', $phone_number,PDO::PARAM_STR);
      $stmt->bindParam(':gentoken', $token,PDO::PARAM_STR); 
      $stmt->execute();
      echo 'User registered succesfully!'.'<br />'.'<a href = "pages-signin.html">Sign-In </a> to continue'.'<br />'.'Your Token id is'.$token;	
      
?>