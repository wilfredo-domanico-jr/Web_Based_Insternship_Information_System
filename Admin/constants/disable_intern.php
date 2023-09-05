<?php
// date_default_timezone_set('Africa/Dar_es_salaam');




	require 'constants/db_config.php';

	$disabled = true;
	
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("INSERT INTO tbl_users (first_name, last_name, email, last_login, login, role, member_no) 
	VALUES (:fname, :lname, :email, :lastlogin, :login, :role, :memberno)");
    $stmt->bindParam(':fname', $fname);
    $stmt->bindParam(':lname', $lname);
    $stmt->bindParam(':email', $email);
	$stmt->bindParam(':lastlogin', $last_login);
    $stmt->bindParam(':login', $login);
    $stmt->bindParam(':role', $role);
	$stmt->bindParam(':memberno', $member_no);
    $stmt->execute();
	header("location:../register.php?p=Employee&r=1123");				  
	
	
