<?php
require '../../constants/db_config.php';
require '../constants/check-login.php';
$dtr_id = $_GET['id'];

$new_status = "Approved";

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
                                            $absent = $row['intern_absent']; 
                                            
                                            
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

                                            $current_absent = $row['absent']; 

                                            $updated_absent = $current_absent + $absent;
                                            
                                            
                                            ?>
                                    <?php
                                     
                                    {

                                    }
                                    
                                    }}catch(PDOException $e)
                                    {

                                    }


//UPDATE STUDENT HOURS BY SEARCHING THEM
  $stmt2 = $conn->prepare("UPDATE tbl_users SET student_ojthours = :rendered_hours,absent =:new_absent WHERE member_no ='$student'");
 
  $stmt2->bindParam(':rendered_hours',$updated_hours);
  $stmt2->bindParam(':new_absent',$updated_absent);
  $stmt2->execute();
  
  $stmt3 = $conn->prepare("UPDATE tbl_dtr SET dtr_status = :new_status WHERE id ='$dtr_id'");
 
  $stmt3->bindParam(':new_status',$new_status);
  $stmt3->execute();

  
  //SELECT ARCHIVES TOTAL HOURS + FINAL HOURS

  $select_archives = $conn->prepare("SELECT * FROM company_archive WHERE intern ='$student'");
  $select_archives->execute();
  $select_archives_result = $select_archives->fetchAll();


  foreach($select_archives_result as $archive_row){
    // 240
    $pastArchive_hours = $archive_row['hours']; 
    //                      240 + 
    $newArchive_hours = $pastArchive_hours + $time; 

  }


  
  //UPDATE COMPANY ARCHIVES


  $update_archive = $conn->prepare("UPDATE company_archive SET hours = :rendered_hours WHERE intern ='$student'");
 
  $update_archive->bindParam(':rendered_hours',$newArchive_hours);
  $update_archive->execute();
                    


header("location:../dtr.php?r=9215");					  
