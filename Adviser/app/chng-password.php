<?php
require '../../constants/db_config.php';
require '../constants/check-login.php';

$old_pass  = $_POST['old_pass'];//-
$new_pass  = $_POST['new_pass'];//-
$confirm  = $_POST['confirm'];//-



//if hindi match yung new pass and confirm


if($new_pass != $confirm){


    header("location:../change-pass.php?r=pass_Unmatched");
}


else{

    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $stmt = $conn->prepare("SELECT * FROM tbl_users WHERE email = :myemail AND login = :mypassword");
    $stmt->bindParam(':myemail', $myemail);
    $stmt->bindParam(':mypassword', $old_pass);
    $stmt->execute();
    $result = $stmt->fetchAll();
    $rec = count($result);
    
    if ($rec == "0") {
    header("location:../change-pass.php?r=9564");
    } 

    else{
        //Update Password


        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stmt2 = $conn->prepare("UPDATE tbl_users SET login = '$new_pass' WHERE email ='$mymail'");
        $stmt2->execute();
        header("location:../../log-out.php");

    }

}

    
               





?>