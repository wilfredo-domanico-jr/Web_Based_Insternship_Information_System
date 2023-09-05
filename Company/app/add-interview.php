<?php


require '../../constants/db_config.php';
require '../constants/check-login.php';



$title = $_POST['title'];
$venue = $_POST['venue'];
$link = $_POST['link'];
$get_date = $_POST['date'];
$get_date = strtotime($get_date);
$date = date('m-d-Y',$get_date);

//GET AM OR PM (FROM)

$firstTwoText = substr($_POST['from'],0,2);//=00
$minutes = substr($_POST['from'],3,2);
// $minutes = number_format($getMinutes);
//Convert to INT
$getTime = number_format($firstTwoText);


//GET AM OR PM (TO)

$firstTwoText2 = substr($_POST['to'],0,2);//=00
$minutes2 = substr($_POST['to'],3,2);
// $minutes = number_format($getMinutes);
//Convert to INT
$getTime2 = number_format($firstTwoText2);




//FROM
//GET TIME AND SUBTRACT IF OVERTHAN 12 
if($getTime > 12){

        $hour = $getTime - 12; 
        $from = $hour.':'.$minutes.' PM';

}

elseif($getTime == 12){
        $hour = 12;
        $from = $hour.':'.$minutes.' PM';
}


elseif($getTime == 0){
        $hour = 12;
        $from = $hour.':'.$minutes.' AM';
}

else{

        $hour = $getTime;
        $from = $hour.':'.$minutes.' AM';

}
//GET TIME AND SUBTRACT IF OVERTHAN 12 (END)



//TO 

//FROM
//GET TIME AND SUBTRACT IF OVERTHAN 12 
if($getTime2 > 12){

    $hour2 = $getTime2 - 12; 
    $to = $hour2.':'.$minutes2.' PM';

}

elseif($getTime2 == 12){
    $hour2 = 12;
    $to = $hour2.':'.$minutes2.' PM';
}


elseif($getTime2 == 0){
    $hour2 = 12;
    $to = $hour2.':'.$minutes2.' AM';
}

else{

    $hour2 = $getTime2;
    $to = $hour2.':'.$minutes2.' AM';

}
//GET TIME AND SUBTRACT IF OVERTHAN 12 (END)
// $from = $_POST['from'];
// $to = $_POST['to'];
$intern_id = $_POST['intern'];
$internship_id = $_POST['internship'];
$company = $_POST['company'];
$status = "TO BE INTERVIEWED";
$zero = 0;
try {
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	
$stmt = $conn->prepare("INSERT INTO tbl_interview (portal,link,interview_from,interview_to,internship_id,title,date,stud_id,status,company,msg_read,msg_delete)
 VALUES (:portal,:link,:interview_from,:interview_to,:internship_id,:title,:date,:stud_id,:status,:company,:msg_read,:msg_delete)");

$stmt2 = $conn->prepare("UPDATE tbl_apply SET application_status = :status WHERE company ='$myid' and member_n='$intern_id' and internship_id = '$internship_id'");

$stmt2->bindParam(':status', $status);

$stmt->bindParam(':portal', $venue);
$stmt->bindParam(':link', $link);
$stmt->bindParam(':interview_from', $from);
$stmt->bindParam(':interview_to', $to);
$stmt->bindParam(':internship_id', $internship_id);
$stmt->bindParam(':title', $title);
$stmt->bindParam(':date', $date);
$stmt->bindParam(':stud_id', $intern_id);
$stmt->bindParam(':status', $status);
$stmt->bindParam(':company', $company);
$stmt->bindParam(':msg_read', $zero);
$stmt->bindParam(':msg_delete', $zero);



$stmt2->execute();
$stmt->execute();
header("location:../view-intern.php?id=$internship_id&intern=$intern_id&r=9367");		  
}catch(PDOException $e)
{
echo "Connection failed: " . $e->getMessage();
}

?>