<?php
                                    require '../constants/db_config.php';
                                    try {
                                    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                                    // $stmt = $conn->prepare("SELECT * FROM tbl_class where section ='$stud_section'");
                                    $stmt = $conn->prepare("SELECT tbl_class.day,tbl_users.first_name,
                                    tbl_users.last_name, tbl_class.course_code,tbl_class.class_id,
                                     tbl_class.section, tbl_class.subj, tbl_class.sched 
                                     FROM tbl_class INNER JOIN tbl_users ON
                                      tbl_users.member_no=tbl_class.prof 
                                      where section ='$stud_section'");
                                    $stmt->execute();
                                    $result = $stmt->fetchAll(); 
 
                                    foreach($result as $row) {
                                    ?>
                                            <!-- Lagay dito -->

                                            <div class ="stream-content" style="background:#fff;border:2px solid var(--topnav-color);"> 

                                            <div style="display: flex;align-items: center;justify-content: space-between;">
                                                    <h1 class ="stream-heading" style="font-weight:700"><?php echo $row['course_code'];?></h1>
                                                    
                                                    <!-- <a style ="border:1px solid #ffffff;font-size:2vmin;font-weight:700" onclick = "return confirm('Are you sure you want to Leave this Class ?')" class="btn btn-dark" href="app/leave-class.php"><i class="fa-solid fa-angles-left"></i> Leave Class</a> -->

                                                </div>
                                                
                                                <h2 style="font-weight:700;" class ="stream-sub-heading">Practicum Adviser: <?php echo $row['first_name'];?> <?php echo $row['last_name'];?></h2>
                                                <h2 style="font-weight:700;" class ="stream-sub-heading">Section: <?php echo $row['section'];?></h1>
                                                <h2 style="font-weight:700;" class ="stream-sub-heading">Schedule: <?php echo $row['day'];?> (<?php echo $row['sched'];?>)</h1>
                                                </div>
                                    <?php
                                    
                                    {

                                    }
                                    
                                    }}catch(PDOException $e)
                                    {

                                    }
                    
                                ?>