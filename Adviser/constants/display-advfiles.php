
<form action="app/add-documents.php" method="POST" enctype="multipart/form-data">
                                                        

<input accept="application/pdf" value="" id ="pdf" type="file" name="documents" required id="formFile">
<br><br>
<button class="btn btn-primary" for="formFile" style ="font-weight:700;border:1px solid #ffffff;font-size:2vmin;"><i class="fa-solid fa-file-alt"></i> Upload Documents</button>
     
<br><br>

<input type="hidden" name="class" value="<?php echo "$class";?>">
<input type="hidden" name="adviser" value="<?php echo "$myid"; ?>">


</form>


<ul>








<?php
                                    require '../constants/db_config.php';
                                    try {
                                    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                                    $stmt = $conn->prepare("SELECT * FROM tbl_advfiles where class ='$class'");
                                    $stmt->execute();
                                    $result = $stmt->fetchAll();

                                    $count_doc = count($result);

                                    if($count_doc == 0){
                                        echo 'NO DOCUMENTS';
                                    }

                                    foreach($result as $row) {
                                    ?>

                                            <li>
                                                <a class="btn btn-success" href="../files/intern/adviser_files/<?php echo $row['documents']?>" download="<?php echo $row['documents']?>"><?php echo $row['documents']?></a>

                                            </li><br>


                                    
                                   
                                              
                                    <?php
                                    
                                    {

                                    }
                                    
                                    }}catch(PDOException $e)
                                    {

                                    }
                    
                                ?>

</ul>

<br>