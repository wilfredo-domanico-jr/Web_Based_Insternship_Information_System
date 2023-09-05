<?php
// date_default_timezone_set('Africa/Dar_es_salaam');
$last_login = date('d-m-Y h:m A [T P]');
require '../constants/db_config.php';
$myemail = $_POST['email'];
$mypass = md5($_POST['password']);
$myrole = "Company";
    try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	
    $stmt = $conn->prepare("SELECT * FROM tbl_users WHERE email = :myemail AND login = :mypassword AND role = :myrole");
	$stmt->bindParam(':myemail', $myemail);
	$stmt->bindParam(':mypassword', $mypass);
	$stmt->bindParam(':myrole', $myrole);
    $stmt->execute();
    $result = $stmt->fetchAll();
	$rec = count($result);
	 
	if ($rec == "0") {
	 header("location:../com-login.php?r=0346");
	}else{

    foreach($result as $row)
    {
		$role = $row['role'];
		
		$status = $row['status'];

				if ($role == "Company") {
				session_start();
				$_SESSION['logged'] = true;	
				$_SESSION['myid'] = $row['member_no'];
				$_SESSION['compname'] = $row['first_name'];
				$_SESSION['established'] = $row['byear'];
				$_SESSION['myemail'] = $row['email'];
				$_SESSION['myphone'] = $row['phone'];
				$_SESSION['comptype'] = $row['title'];
				$_SESSION['mycity'] = $row['city'];
				$_SESSION['mystreet'] = $row['street'];
				$_SESSION['myzip'] = $row['zip'];
				$_SESSION['mycountry'] = $row['country'];
				$_SESSION['mydesc'] = $row['about'];
				$_SESSION['avatar'] = $row['avatar'];
				$_SESSION['myserv'] = $row['services'];
				$_SESSION['myexp'] = $row['expertise'];
				$_SESSION['lastlogin'] = $row['last_login'];
				$_SESSION['website'] = $row['website'];
				$_SESSION['people'] = $row['people'];
				$_SESSION['role'] = $role;
				$_SESSION['join_code'] = $row['cmpn_code'];
				}
	
				

					else{
						header("location:../com-login.php?r=0346");
						}
	
	

    try {

		//I set yung last login
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	
    $stmt = $conn->prepare("UPDATE tbl_users SET last_login = :lastlogin WHERE email= :email");
	$stmt->bindParam(':lastlogin', $last_login);
    $stmt->bindParam(':email', $myemail);
    $stmt->execute();


	if($status == 1){

		header("location:../account-error.php");

	}

	else{

		//PAG PUNTA SA INDEX
	header("location:../$role");
				

	}

		  
	}catch(PDOException $e)
    {

    }
	

	}
	
	}

					  
	}catch(PDOException $e)
    {

    }

?>