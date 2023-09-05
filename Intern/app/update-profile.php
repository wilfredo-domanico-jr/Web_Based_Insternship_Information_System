<?php
require '../../constants/db_config.php';
require '../constants/check-login.php';

$fname = ucwords($_POST['fname']);//
$lname = ucwords($_POST['lname']);//
$city = ucwords($_POST['city']);//
$street = ucwords($_POST['street']);//
$zip = ucwords($_POST['zip']);//
$phone = $_POST['phone'];//
$about = $_POST['about'];
$myemail = $_POST['email'];//
$age = $_POST['age'];//
$mname = $_POST['mname'];//

    try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	
    $stmt = $conn->prepare("SELECT * FROM tbl_users WHERE email = :email AND member_no != '$myid'");
	$stmt->bindParam(':email', $myemail);
    $stmt->execute();
    $result = $stmt->fetchAll(); 
    $rec = count($result);
	
	if ($rec == "0") {
    $stmt = $conn->prepare("UPDATE tbl_users SET first_name = :fname,last_name = :lname, city = :city, street = :street, zip = :zip, phone = :phone, about = :about,age = :age, middle_name =  :mname  WHERE member_no='$myid'");
    $stmt->bindParam(':fname', $fname);
    $stmt->bindParam(':lname', $lname);
    $stmt->bindParam(':city', $city);
	$stmt->bindParam(':street', $street);
    $stmt->bindParam(':zip', $zip);
    $stmt->bindParam(':phone', $phone);
	$stmt->bindParam(':about', $about);
    $stmt->bindParam(':age', $age);
    $stmt->bindParam(':mname', $mname); 
    $stmt->execute(); 
	
	$_SESSION['fname'] = $fname;
    $_SESSION['lname'] = $lname;
    $_SESSION['myphone'] = $phone;
	$_SESSION['mycity'] = $city;
	$_SESSION['mystreet'] = $street;
	$_SESSION['myzip'] = $zip;
    $_SESSION['mydesc'] = $about;
    $_SESSION['age'] = $age;
    $_SESSION['age'] = $age;
    $_SESSION['mymname'] = $mname;
	header("location:../?r=9837");	
	}else{
	header("location:../?r=0927");
	}

					  
	}catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }

?>


