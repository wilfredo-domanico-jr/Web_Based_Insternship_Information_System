<br>
  
  <div class ="stream-content" style="background:#fff;border:2px solid var(--topnav-color);">
                                    
                                    <h5 class ="stream-heading">Adviser:</h5>
                                    
                                    
                                                                         
                                                                        <!-------CLASS LIST----->
                                                                    <?php
                                                                        require '../constants/db_config.php';
                                                                        try {
                                                                        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                                                        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                                                                     
                                    
                                                                        $stmt = $conn->prepare("SELECT tbl_users.first_name, tbl_users.last_name, tbl_users.avatar 
                                                                        FROM tbl_class INNER JOIN tbl_users ON tbl_class.prof=tbl_users.member_no where section = '$stud_section'");
                                                                        $stmt->execute();
                                                                        $result = $stmt->fetchAll();
                                                                        

                                                                        $records = count($result);


                                                                        if($records>0){

                                                                                        foreach($result as $row) {
                                                                                            ?>
                                                                                                    <div class ="info-inline">
                                                        
                                                                                                    <?php 
                                                        
                                                                                                        
                                                                                                        if ($row['avatar'] == null) { 
                                                                                                                echo '<img class = "inline-img" alt="default-image" title="no-image"  src="./img/image.png"/></center>';
                                                                                                        }else{
                                                                                                        echo '<img class ="inline-img" alt="image" src="data:image/jpeg;base64,'.base64_encode($row['avatar']).'"/>';	
                                                                                                        }
                                                        
                                                                                                        ?>
                                                        
                                                                                                        
                                                        
                                                                                                        <h6 style ="margin-left:10px;font-weight:700"><?php echo $row['first_name']?> <?php echo $row['last_name']?></h6>
                                                        
                                                                                                    </div>
                                                        
                                                                                                        <br>
                                                        
                                                                                                
                                                                                            <?php
                                                                                            
                                                                                            {
                                                        
                                                                                            }
                                                                                            
                                                                                            }

                                                                        }


                                                                        else{

                                                                            echo '<h7>NO ADVISER</h7>';
                                                                        }


                                                                        

                                        }catch(PDOException $e)
                                        {
                                                                
                                        }
                                                        
                                     ?>
                                    
                                     </div>









                                     <br>




<div class ="stream-content" style="background:#fff;border:2px solid var(--topnav-color);">
                                    
<h5 class ="stream-heading">Students:</h5>



                                                
                                                        


                                <div class ="row">


                                                                  
                                    <!-------CLASS LIST----->
                                <?php
                                    require '../constants/db_config.php';
                                    try {
                                    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                                    $stmt = $conn->prepare("SELECT * FROM tbl_users WHERE role ='Intern' and stud_section ='$stud_section' and status = 0 order by first_name");
                                    $stmt->execute();
                                    $result = $stmt->fetchAll();

                                    foreach($result as $row) {
                                    ?>
                                           
                                        <div class ="col-md-4 col-sm-6">

                                        <div class ="info-inline">

                                                                <?php 

                                                                
                                                                if ($row['avatar'] == null) { 
                                                                        echo '<img class = "inline-img" alt="default-image" title="no-image"  src="./img/image.png"/></center>';
                                                                }else{
                                                                echo '<img class ="inline-img" alt="image" src="data:image/jpeg;base64,'.base64_encode($row['avatar']).'"/>';	
                                                                }

                                                                ?>

                                                                <h6 style ="margin-left:10px;font-weight:700"><?php echo $row['first_name']?> <?php echo $row['last_name']?></h6>

                                           
                                                                
                                                  </div>

                                        </div>
                                                 
                                    <?php
                                     
                                    {

                                    }
                                    
                                    }}catch(PDOException $e)
                                    {

                                    }
                    
                                            ?>

</div>   
                                        
                                                   


                      

 </div>