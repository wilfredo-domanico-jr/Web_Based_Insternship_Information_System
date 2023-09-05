<?php
// date_default_timezone_set('Africa/Dar_es_salaam');
require '../../constants/db_config.php';
require '../constants/check-login.php';

$title  = ucwords($_POST['title']);//-
$city  = ucwords($_POST['city']);//-
$desc = ucfirst($_POST['description']);//-
$res = ucfirst($_POST['responsiblities']);//- 




$name = ucfirst($_POST['name']);//-
$positon  = ucfirst($_POST['position']);//-

$contact  = $_POST['contact'];//-






$get_date = $_POST['deadline'];
$get_date = strtotime($get_date);
$deadline = date('m/d/Y',$get_date);
$intern_id = $_POST['intern_id'];//
$req_hours = $_POST['hours'];//
$vacant = $_POST['vacant'];//

try {
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$stmt = $conn->prepare("UPDATE tbl_internship SET role_title = :title, assign_city = :city, description = :desc, responsibility = :res,closing_date = :deadline,req_hour = :req_hours, vacant = :vacant, name = :name, position = :position, contact = :contact WHERE internship_id = $intern_id AND company = '$myid'");

$stmt->bindParam(':title', $title);
$stmt->bindParam(':city', $city);
$stmt->bindParam(':desc', $desc);
$stmt->bindParam(':res', $res);
$stmt->bindParam(':deadline', $deadline);
$stmt->bindParam(':req_hours', $req_hours);
$stmt->bindParam(':vacant', $vacant);
$stmt->bindParam(':name', $name);
$stmt->bindParam(':position', $positon);
$stmt->bindParam(':contact', $contact);
$stmt->execute();
header("location:../post.php?r=7777");		  
}catch(PDOException $e)
{
echo "Connection failed: " . $e->getMessage();
}

?>