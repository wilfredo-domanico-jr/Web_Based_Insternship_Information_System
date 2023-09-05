<?php
// date_default_timezone_set('Africa/Dar_es_salaam');
require '../../constants/db_config.php';
require '../constants/check-login.php';
require '../../constants/uniques.php';
$internship_id = ''.get_rand_numbers(10).'';//



$name = ucfirst($_POST['name']);//-
$positon  = ucfirst($_POST['position']);//-

$contact  = $_POST['contact'];//-




$title  = ucwords($_POST['title']);//-
$city  = ucwords($_POST['city']);//-
$desc = ucfirst($_POST['description']);//-
$res = ucfirst($_POST['responsiblities']);//-
$comp_id = $_POST['comp_id'];//-
// $postdate = date('F d, Y');//
$postdate = date('m/d/Y');//



$get_date = $_POST['deadline'];
$get_date = strtotime($get_date);
$deadline = date('m/d/Y',$get_date);

$req_hours = $_POST['hours'];//-  
$vacancy = $_POST['vacant'];//-

try {
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	
$stmt = $conn->prepare("INSERT INTO tbl_internship (internship_id, role_title, assign_city, description, responsibility, company, date_posted, closing_date,req_hour,vacant,name,position,contact)
 VALUES (:internship_id, :title, :city, :desc, :res, :comp_id, :postdate, :deadline,:req_hours,:vacant,:name,:position,:contact)");
$stmt->bindParam(':internship_id', $internship_id);
$stmt->bindParam(':title', $title);
$stmt->bindParam(':city', $city);
$stmt->bindParam(':desc', $desc);
$stmt->bindParam(':res', $res);
$stmt->bindParam(':comp_id', $comp_id);
$stmt->bindParam(':postdate', $postdate);
$stmt->bindParam(':deadline', $deadline);
$stmt->bindParam(':req_hours', $req_hours);
$stmt->bindParam(':vacant', $vacancy);
$stmt->bindParam(':name', $name);
$stmt->bindParam(':position', $positon);
$stmt->bindParam(':contact', $contact);
$stmt->execute();



header("location:../post.php?r=9843");		  
}catch(PDOException $e)
{
echo "Connection failed: " . $e->getMessage();
}

?>