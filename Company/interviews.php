<?php 
include 'header.php'; 

echo '<title>Pending - Company</title>';
?>

<style>
  #interview{
    background:#fff;
    color:#2b7a78;
  }
</style>


                    <div class="container-fluid px-4">

                        <div class = "mt-4 mb-4 contact-us">

                            <h1 class="title-page">Pending Interviews</h1>
                             </div> 

                        <div class="card violet mb-4">
                            <div class="card-header-class">
                                <center>
                                    
                                    <a href ="interviews.php" class ="heading-stream">Pending Interviews</a>
                                    <a href ="accpt-interviews.php" class ="heading-document" >Accepted Applications</a>
                                    <a href ="declined-interviews.php" class ="heading-class">Declined Applications</a> 
                                
                                </center>
                            </div>

                            <center><hr class ="stream-divider"></center>
                            <div class="card-body-class">
                                        <?php include 'constants/check_reply.php';?> 

                                     <br>


                                    

                                <?php
                                        require '../constants/db_config.php';
                                        try {
                                        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                                        $tobe ="TO BE INTERVIEWED";
                                        $stmt = $conn->prepare("SELECT tbl_apply.internship_id,tbl_users.member_no,tbl_users.stud_company,tbl_apply.title, tbl_users.first_name,tbl_apply.company,tbl_users.last_name,tbl_apply.DATE_APPLIED,tbl_apply.application_status 
                                        FROM tbl_apply 
                                        INNER JOIN tbl_users 
                                        ON tbl_users.member_no=tbl_apply.member_n 
                                        where company ='$myid' and application_status ='TO BE INTERVIEWED'");
                                        // where company ='$myid' and stud_company == null");
                                        $stmt->execute();
                                        $result = $stmt->fetchAll();

                                        $count = count($result);

                                        if($count == 0){

                                            echo '
                                            <center>

                                                    
                                            <img src ="img/interview.png" style="height:300px;width:300px;" alt ="NO FILES"><br><br>
                                            <h3><strong>NO PENDING INTERVIEWS</strong></h3>

                                            </center>
                                          ';


                                        }

                                        else{
                                            echo '

                                            <div class="tbl-container" style="overflow-y:scroll">

                       
                                            
                                            <table class ="text-center" id="datatablesSimple">

                                            <thead class ="thead">
                                                <tr>
                                                    <th><center>Name</th>
                                                    <th><center>Applying as</th>
                                                    <th><center>Date Applied</th>
                                                    <th><center>Interview Date</th>
                                                    <th><center>Time</th>
                                                    <th><center>Interview Link</th>
                                                    <th><center>Status</th>
                                                    <th><center>Edit Status</center></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            
                                            
                                            ';
                                        }

                                        foreach($result as $row) { 
                                        ?>
                                                        <?php $intrnsp_id = $row['internship_id']; ?> 
                                                        <?php $member_id = $row['member_no']; ?> 

                                        <tr>                                                                                                       
                                                    <td>
                                                        
                                                        <center>
                                                            
                                                            <?php echo $row['first_name']; ?> 
                                                            <?php echo $row['last_name']; ?>
                                                 
                                                        </center>
                                                    
                                                    
                                                    </td>

                                                    <td>
                                                            <?php echo $row['title']; ?> 
                                                    </td>

                                                    
                                                    <td>
                                                            <?php echo $row['DATE_APPLIED']; ?> 
                                                    </td>

                                                   

                                                    

                                                       
                                                    
                                                    
                                                        




                                                            <?php
                                                            require '../constants/db_config.php';
                                                            try {
                                                            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                                            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                                                            $link = $conn->prepare("SELECT * FROM tbl_interview where internship_id ='$intrnsp_id' AND stud_id ='$member_id' AND status ='TO BE INTERVIEWED'");
                                                            $link->execute();
                                                            $result_link = $link->fetchAll();

                                                            foreach($result_link as $row_link) {
                                                            ?>
                                                                    <!-- Lagay dito -->

                                                                    <td>
                                                                    <?php echo $row_link['date']; ?>
                                                                    <?php $interview_date = $row_link['date'];?>
                                                                    </td>

                                                                    

                                                                    <td>
                                                                            <?php echo $row_link['interview_from']; ?> to <?php echo $row_link['interview_to']; ?> 



                                                                            <!--GET INTERVIEW TIME--->

                                                                            <?php $interview_time = $row_link['interview_from'].' to '.$row_link['interview_to']?>

                                                                    </td>

                                                                    

                                                                   

                                                                    <td>

                                                                    <?php 
                                                                                if($row['application_status'] == 'ACCEPTED'){

                                                                                    echo'
                                                                                    
                                                                                    <button type="button" class ="btn btn-success disabled">
                                                                                    Go to Link 
                                                                                </button>
                                                                                    
                                                                                    
                                                                                    ';
                                                                                }


                                                                                else if($row['application_status'] == 'TO BE INTERVIEWED'){

                                                                                    echo'
                                                                                    
                                                                                    <a class ="btn btn-success" id ="requirements-link" 
                                                                    
                                                                                    href ="https://'.$row_link['link'].'">
                                                                                    Go to Link
                                                                                </a>
                                                                                    
                                                                                    ';
                                                                                }


                                                                            
                                                                            ?>

                                                                            

                                                                                <!--  -->
                                                                    </td>



                                                                    

                                                                    
                                                            <?php
                                                            
                                                            {

                                                            }
                                                            
                                                            }}catch(PDOException $e)
                                                            {

                                                            }
                                            
                                                            ?>

                                                            
                                                       
                                                            <td> 


                                                                <?php
                                                                
                                                                    if($row['application_status'] == 'TO BE INTERVIEWED'){
                                                                        echo '<span class="badge bg-primary">'.$row['application_status'].'</span>';
                                                                    }

                                                                    elseif($row['application_status'] == 'ACCEPTED'){
                                                                        echo '<span class="badge bg-success">'.$row['application_status'].'</span>';
                                                                    }
                                                                
                                                                ?>
                                                            

                                                            </td>
                                                  

                                                        <td>

                                                            <center>

                                                                            <?php 
                                                                                if($row['application_status'] == 'ACCEPTED'){

                                                                                    echo'
                                                                                    
                                                                                    <button type="button" class ="btn btn-success disabled">
                                                                                     Already Accepted 
                                                                                </button>
                                                                                    
                                                                                    
                                                                                    ';
                                                                                }


                                                                                else if($row['application_status'] == 'TO BE INTERVIEWED'){

                                                                                    echo'
                                                                                    
                                                                                    <button type="button" class ="btn btn-primary" data-toggle="modal" data-target="#'.$row['member_no'].'Modal">
                                                                                    <i class="fas fa-edit"></i>
                                                                                </button>
                                                                                    
                                                                                    ';
                                                                                }


                                                                            
                                                                            ?>

                                                                


                                                            </center>
                                                            

                                                        </td>

                                                    </tr>



                                                    <div class="modal fade" id="<?php echo $row['member_no'];?>Modal" tabindex="-1" role="dialog" aria-labelledby="<?php echo $row['member_no'];?>ModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header header-modal-color" style ="background-color:var(--primary-color)">
                                                            <h5 class="modal-title text-light" id="<?php echo $row['member_no'];?>Label" style="color:#fff;">Update Application</h5>
                                                            <button style="color:#fff;" type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                            </div> 
                                                            <div class="modal-body body-modal-color text-center">


                                                                        <h1>Update Application Status</h1>

                                                                        <br>

                                                                        <div class ="row">


                                                                                <div class ="col">

                                                                                <form  class="post-form-wrapper" action="app/accept_interview.php" method="POST" autocomplete="off">

                                                                                        <button class ="btn btn-success" type="submit">Accept Application</button>
                                                                                        
                                                                                        <input type="hidden" name="joinCode" value="<?php echo "$join_code";?>">
                                                                                        <input type="hidden" name="intern" value="<?php echo "$member_id";?>">
                                                                                        <input type="hidden" name="company" value="<?php echo "$myid";?>">
                                                                                        <input type="hidden" name="internhipID" value="<?php echo "$intrnsp_id"; ?>">
                                                                                        <input type="hidden" name="role" value="<?php echo $row['title'];?>">
                                                                                        <input type="hidden" name="interview_time" value="<?php echo $interview_time;?>">
                                                                                        <input type="hidden" name="interview_date" value="<?php echo $interview_date;?>">


                                                                                        </form>

                                                                                </div>

                                                                                <div class ="col">

                                                                                    <form  class="post-form-wrapper" action="app/decline_interview.php" method="POST" autocomplete="off">

                                                                                    <button class ="btn btn-danger" type="submit">Decline Application</button>
                                                                                    
                                                                                    <input type="hidden" name="joinCode" value="<?php echo "$join_code";?>">
                                                                                    <input type="hidden" name="intern" value="<?php echo "$member_id";?>">
                                                                                    <input type="hidden" name="company" value="<?php echo "$myid";?>">
                                                                                    <input type="hidden" name="internhipID" value="<?php echo "$intrnsp_id"; ?>">
                                                                                    <input type="hidden" name="role" value="<?php echo $row['title'];?>">
                                                                                    <input type="hidden" name="interview_time" value="<?php echo $interview_time;?>">
                                                                                    <input type="hidden" name="interview_date" value="<?php echo $interview_date;?>">


                                                                                    

                                                                                    </form>
                                                                                    
                                                                                </div>


                                                                        </div>
                                                                        


                                                                        

                                                            </div>
                                                        
                                                        </div>
                                                        </div>
                                                        </div>
                                        <?php
                                        
                                        {

                                        }
                                        
                                        }}catch(PDOException $e)
                                        {

                                        }

                                        ?>




                                    
                                </tbody>
                                </table>

                    </div>


                                   
                                        
                            
                            
                            </div>
                        </div>
                    </div>                                         

                    </main>
                
                </div>
            </div>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
            <script src="js/scripts.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
            <script src="js/datatables-simple-demo.js?v=<?php echo time();?>"></script>
            <script src="js/custom.js?v=<?php echo time();?>"></script>
        </body>
    </html>