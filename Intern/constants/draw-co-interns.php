

<div class ="stream-content">
                                    
<h5 class ="stream-heading">Interns:</h5>


<div class ="row">
         
                                    <!-------CLASS LIST----->
                                <?php
                                    require '../constants/db_config.php';
                                    try {
                                    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                                    $one = '1';

                                    $stmt = $conn->prepare("SELECT * FROM tbl_users WHERE role ='Intern' and stud_company ='$stud_company'");
                                    $stmt->execute();
                                    $result = $stmt->fetchAll();

                                    $count_intern = count($result);

                                    

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

                                                                

                                                                <h6 style="margin-left:10px"><?php echo $row['first_name']?> <?php echo $row['last_name']?></h6>

                                                        </div>
                                            </div>
                                        
                                            

                                                <br>

                                           
                                    <?php
                                     
                                    {

                                    }
                                    
                                    }}catch(PDOException $e)
                                    {

                                    }
                    
 ?>

</div>

 </div>










