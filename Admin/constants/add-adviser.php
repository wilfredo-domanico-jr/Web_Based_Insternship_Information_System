<?php
// date_default_timezone_set('Africa/Dar_es_salaam');

if (isset($_POST['reg_mode'])) {
checkemail();	
}else{
header("location:../");		
}

//CHeck kung already existed
function checkemail() {
	
try { 
	require 'db_config.php';
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$email = $_POST['email'];
	$account_type = $_POST['acctype'];
	
    $stmt = $conn->prepare("SELECT * FROM tbl_users WHERE email = :email");
	$stmt->bindParam(':email', $email);
    $stmt->execute();
    $result = $stmt->fetchAll();
	$records = count($result);
	
	if ($account_type == "101") {
	$role = "Intern";	
	}else if($account_type == "102"){ 
	$role = "Company";	 
	}

    else if($account_type == "103"){ 
        $role = "Adviser";	 
    }

    else{
        $role = "Admin";	 
    }
	
	if ($records > 0) {
	header("location:../rep-adviser.php?r=0927");	
		
	}else{
	
	if ($account_type == "101") {
	register_as_employee();
	}
    
    else if ($account_type == "102"){
	register_as_company();
	}

    else if ($account_type == "103"){
        register_as_adviser();
    }

    else{
        register_as_adviser();
    }
	
		
	}
					  
	}catch(PDOException $e)
    {
    header("location:../register.php?p=$role&r=4568");
    }
}

function register_as_employee() {

try {
	require 'constants/db_config.php';
	require 'constants/uniques.php';
	$role = 'employee';
    $account_type = $_POST['acctype'];
    $last_login = date('d-m-Y h:m A [T P]');
	$member_no = 'EM'.get_rand_numbers(9).'';
    $fname = ucwords($_POST['fname']);
    $lname = ucwords($_POST['lname']);
    $email = $_POST['email'];
    $login = md5($_POST['password']);
	
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
	}catch(PDOException $e)
    {
    header("location:../register.php?p=Employee&r=4568");
    }	
	
}

function register_as_company() {
try {
	require 'constants/db_config.php';
	require 'constants/uniques.php';
	$role = 'Company';
    $account_type = $_POST['acctype'];
    $last_login = date('d-m-Y h:m A [T P]');
    $comp_no = 'CM'.get_rand_numbers(9).'';
    $cname = ucwords($_POST['company']);
    $ctype = ucwords($_POST['type']);
    $email = $_POST['email'];
    $login = md5($_POST['password']);
	
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("INSERT INTO tbl_users (first_name, title, email, last_login, login, role, member_no) 
	VALUES (:fname, :title, :email, :lastlogin, :login, :role, :memberno)");
    $stmt->bindParam(':fname', $cname);
    $stmt->bindParam(':title', $ctype);
    $stmt->bindParam(':email', $email);
	$stmt->bindParam(':lastlogin', $last_login);
    $stmt->bindParam(':login', $login);
    $stmt->bindParam(':role', $role);
	$stmt->bindParam(':memberno', $comp_no);
    $stmt->execute();
	// header("location:../register.php?p=Employer&r=1123");	
    header("location:../index.php?r=1123");				  
	}catch(PDOException $e)
    {
    header("location:../com-register.php?r=4568");
    }	
	
}



function register_as_adviser() {
    try {
        require 'db_config.php';
        require 'uniques.php';
        $role = 'Adviser';
        $account_type = $_POST['acctype'];
        $last_login = date('d-m-Y h:m A [T P]');
        $user_no = 'CM'.get_rand_numbers(9).'';
        $fname = ucwords($_POST['fname']);
        $lname = ucwords($_POST['lname']);
        $email = $_POST['email'];
        $login = md5($_POST['password']);
        
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare("INSERT INTO tbl_users (first_name, last_name, email, last_login, login, role, member_no) 
        VALUES (:fname,:lname, :email, :lastlogin, :login, :role, :memberno)");
        $stmt->bindParam(':fname', $cname);
        $stmt->bindParam(':title', $ctype);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':lastlogin', $last_login);
        $stmt->bindParam(':login', $login);
        $stmt->bindParam(':role', $role);
        $stmt->bindParam(':memberno', $user_no);
        $stmt->execute();
        header("location:rep-adviser.php");				  
        }catch(PDOException $e)
        {
        header("location:rep-adviser.php");
        }	
        
    }

?>