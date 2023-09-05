<?php

$last_login = date('d-m-Y h:m A [T P]');
require '../constants/db_config.php';
$myemail = $_POST['email'];
// $mypass = md5($_POST['password']);
$mypass = $_POST['password'];
    try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	
    $stmt = $conn->prepare("SELECT * FROM tbl_users WHERE email = :myemail AND login = :mypassword");
	$stmt->bindParam(':myemail', $myemail);
	$stmt->bindParam(':mypassword', $mypass);
    $stmt->execute();
    $result = $stmt->fetchAll();
	$rec = count($result);
	 
	if ($rec == "0") {
	 header("location:../login.php?r=0346");
	}else{
 
    foreach($result as $row)
    {


		$role = $row['role'];
		$status = $row['status'];
		$new_acc = $row['new_acc'];

			

	

			if ($role == "Intern") {


						

					

							session_start();
							$_SESSION['mypassword'] = $row['login'];
							$_SESSION['logged'] = true;
							$_SESSION['myid'] = $row['member_no'];
							$_SESSION['myfname'] = $row['first_name'];
							$_SESSION['mylname'] = $row['last_name'];
							$_SESSION['mymname'] = $row['middle_name'];
							$_SESSION['myemail'] = $row['email'];
							$_SESSION['mydate'] = $row['bdate'];
							$_SESSION['mymonth'] = $row['bmonth'];
							$_SESSION['myyear'] = $row['byear'];
							$_SESSION['myphone'] = $row['phone'];
							$_SESSION['myedu'] = $row['education'];
							$_SESSION['mytitle'] = $row['title'];
							$_SESSION['mycity'] = $row['city'];
							$_SESSION['mystreet'] = $row['street'];
							$_SESSION['myzip'] = $row['zip'];
							$_SESSION['mycountry'] = $row['country']; 
							$_SESSION['mydesc'] = $row['about']; 
							$_SESSION['avatar'] = $row['avatar'];
							$_SESSION['lastlogin'] = $row['last_login'];
							$_SESSION['avatar'] = $row['avatar'];
							$_SESSION['gender'] = $row['gender'];
							$_SESSION['stud_company'] = $row['stud_company'];
							$_SESSION['stud_num'] = $row['stud_num'];
							$_SESSION['stud_section'] = $row['stud_section'];
							$_SESSION['role'] = $role; 
							$_SESSION['hours_rendered'] = $row['student_ojthours']; 
							$_SESSION['age'] = $row['age']; 
							$_SESSION['assig_dept'] = $row['assig_dept']; 
							$_SESSION['cos_company'] = $row['cos_company']; 

						

				}
	

				else if($role == "Company"){
					session_start();
					
					
					$_SESSION['mypassword'] = $row['login'];
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

					else if($role == "Admin"){
						session_start();
						$_SESSION['mypassword'] = $row['login'];
						$_SESSION['logged'] = true;
							$_SESSION['myid'] = $row['member_no'];
							$_SESSION['myfname'] = $row['first_name'];
							$_SESSION['mylname'] = $row['last_name'];
							$_SESSION['mymname'] = $row['middle_name'];
							$_SESSION['myemail'] = $row['email'];
							$_SESSION['mydate'] = $row['bdate'];
							$_SESSION['mymonth'] = $row['bmonth'];
							$_SESSION['myyear'] = $row['byear'];
							$_SESSION['myphone'] = $row['phone'];
							$_SESSION['myedu'] = $row['education'];
							$_SESSION['mytitle'] = $row['title'];
							$_SESSION['mycity'] = $row['city'];
							$_SESSION['mystreet'] = $row['street'];
							$_SESSION['myzip'] = $row['zip'];
							$_SESSION['mycountry'] = $row['country'];
							$_SESSION['mydesc'] = $row['about'];
							$_SESSION['avatar'] = $row['avatar'];
							$_SESSION['lastlogin'] = $row['last_login'];
							$_SESSION['gender'] = $row['gender'];
							$_SESSION['role'] = $role;
						}

					else{
						session_start();
						$_SESSION['mypassword'] = $row['login'];
						$_SESSION['logged'] = true;
						$_SESSION['myid'] = $row['member_no'];
						$_SESSION['myfname'] = $row['first_name'];
						$_SESSION['mylname'] = $row['last_name'];
						$_SESSION['mymname'] = $row['middle_name'];
						$_SESSION['myemail'] = $row['email'];
						$_SESSION['mydate'] = $row['bdate'];
						$_SESSION['mymonth'] = $row['bmonth'];
						$_SESSION['myyear'] = $row['byear'];
						$_SESSION['myphone'] = $row['phone'];
						$_SESSION['myedu'] = $row['education'];
						$_SESSION['mytitle'] = $row['title'];
						$_SESSION['mycity'] = $row['city'];
						$_SESSION['mystreet'] = $row['street'];
						$_SESSION['myzip'] = $row['zip'];
						$_SESSION['mycountry'] = $row['country'];
						$_SESSION['mydesc'] = $row['about'];
						$_SESSION['avatar'] = $row['avatar'];
						$_SESSION['lastlogin'] = $row['last_login'];
						$_SESSION['avatar'] = $row['avatar'];
						$_SESSION['gender'] = $row['avatar'];
						$_SESSION['role'] = $role;
						}

		



				
	
	

    try {

		//I set yung last login
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	
    $stmt = $conn->prepare("UPDATE tbl_users SET last_login = :lastlogin WHERE email= :email");
	$stmt->bindParam(':lastlogin', $last_login);
    $stmt->bindParam(':email', $myemail);
    $stmt->execute();


			if($new_acc == 1 && $role == "Company"){
				
			session_destroy();

				header("location:../to-verified.php");

			}

			elseif($status == 1 && $role != "Company"){
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