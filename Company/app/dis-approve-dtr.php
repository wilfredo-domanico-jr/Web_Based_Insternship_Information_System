<?php
require '../../constants/db_config.php';
require '../constants/check-login.php';
$dtr_id = $_GET['id'];

$new_status = "Disapproved";

$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	
// $stmt = $conn->prepare("DELETE FROM tbl_internship WHERE enc_id= :jobid AND company = '$myid'");
// $stmt->bindParam(':jobid', $job_id);
// $stmt->execute();

// $stmt = $conn->prepare("DELETE FROM tbl_job_application WHERE job_id= :jobid");
// $stmt->bindParam(':jobid', $job_id);
// $stmt->execute();



                                 
                                    try {
                                        //KUNING YUNG DTR based sa id ng table_dtr
                                    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                                    $stmt = $conn->prepare("SELECT * FROM tbl_dtr WHERE id ='$dtr_id'");
                                    $stmt->execute();
                                    $result = $stmt->fetchAll();

                                    foreach($result as $row) {
                                    ?>
                                            <!-- Lagay dito -->

                                            <?php 
                                            
                                            
                                            $student = $row['stud_id']; 
                                            $time = $row['rendere_hours']; 
                                            
                                            
                                            ?>
                                    <?php
                                     
                                    {

                                    }
                                    
                                    }}catch(PDOException $e)
                                    {

                                    }




                                    try {
                                        //KUNING YUNG DTR based sa id ng table_dtr
                                    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                                    $stmt = $conn->prepare("SELECT * FROM tbl_users WHERE member_no ='$student'");
                                    $stmt->execute();
                                    $result = $stmt->fetchAll();

                                    foreach($result as $row) {
                                    ?>
                                            <!-- Lagay dito -->

                                            <?php 
                                            
                                            
                                            $current_hours = $row['student_ojthours']; 

                                            $updated_hours = $current_hours + $time;
                                            
                                            
                                            ?>
                                    <?php
                                     
                                    {

                                    }
                                    
                                    }}catch(PDOException $e)
                                    {

                                    }


//UPDATE STUDENT HOURS BY SEARCHING THEM
  $stmt2 = $conn->prepare("UPDATE tbl_users SET student_ojthours = :rendered_hours WHERE member_no ='$student'");
 
  $stmt2->bindParam(':rendered_hours',$updated_hours);
  $stmt2->execute();
  
  $stmt3 = $conn->prepare("UPDATE tbl_dtr SET dtr_status = :new_status WHERE id ='$dtr_id'");
 
  $stmt3->bindParam(':new_status',$new_status);
  $stmt3->execute();

                    


header("location:../dtr.php");					  
