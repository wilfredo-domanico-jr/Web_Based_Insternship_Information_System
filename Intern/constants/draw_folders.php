<div style ="display: flex;align-items: center;justify-content: space-between;">
                     <h4>FOLDERS:</h4> 
                </div>

                <br>    

                <div class ="stream-content" style="background:#fff;border:2px solid var(--topnav-color);">



                <div class ="row">   
                        <?php
                                                            require '../constants/db_config.php';
                                                            try {
                                                            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                                            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                                                            $stmt = $conn->prepare("SELECT * from class_folder where folder_class ='$stud_section'");
                                                            $stmt->execute();
                                                            $result = $stmt->fetchAll();

                                                            $count_doc = count($result);

                                                            if($count_doc == 0){
                                                                echo '
                                                                
                                                                <center>

                                                                                                                                            
                                                                                                                                    <img src ="img/file-empty.png" style="height:200px;width:200px;" alt ="NO FILES"><br><br>
                                                                                                                                    <h3>NO FOLDERS</h3>

                                                                                                                                    </center> 
                                                                
                                                                ';
                                                            }

                                                            foreach($result as $row) {
                                                            ?>
                                                            
                                                                                <div class ="column col-md-3 col-sm-2">


                                                                                <?php 
                                                                                    if($row['locked'] == 1){
                                                                                        echo'
                                                                                        
                                                                                        <a href ="folder.php?class='.$stud_section.'&fldr='.$row['folder_no'].'" style ="border:none;background:none;" class ="document">


                                                                                            <center>
                                                                                            
                                                                                            <img src="img/folder-lock.png" style ="height:70px;width:70px"><br>

                                                                                            <span class ="dcmnt-name"><center>'.$row['folder_name'].'</center></span>
                                                         
                                                                                            </center>


                                                                                            </a>                                                                                    
                                                                                        
                                                                                        
                                                                                        ';
                                                                                    }

                                                                                    else{

                                                                                            echo '
                                                                                            
                                                                                            <a href ="folder.php?class='.$stud_section.'&fldr='.$row['folder_no'].'" style ="border:none;background:none;" class ="document">


                                                                                            <center>
                                                                                            
                                                                                            <img src="img/folder.png" style ="height:70px;width:70px"><br>

                                                                                            <span class ="dcmnt-name"><center>'.$row['folder_name'].'</center></span>
                                                        
                                                                                            </center>


                                                                                            </a>
                                                                                            
                                                                                            
                                                                                            
                                                                                            ';




                                                                                    }
                                                                                
                                                                                ?>
                                                                                    


                                                                                    
                                                                
                                                                                                
                                                                                </div>   
                                                            <?php
                                                            
                                                            {

                                                            }
                                                            
                                                            }}catch(PDOException $e)
                                                            {

                                                            }
                                            
                                                        ?>

                        </div><br><br>
                        
                        <style>
                                        .document{
                                            text-decoration:none;
                                            color:var(--font-color);
                                        }


                                        .folder-logo{
                                            font-size:20vmin;
                                        }

                                        .folder-logo:hover{
                                            color:var(--font-color);
                                        }
                        </style>

                

                </div>