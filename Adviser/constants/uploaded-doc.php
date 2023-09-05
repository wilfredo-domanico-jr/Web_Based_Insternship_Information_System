

          

                    <hr>
                <div class ="title-status" >
                    
                    <div style ="width:20%;" class ="btn btn-dark pending">Pending</div>
                    <div style ="width:20%;" class ="btn btn-dark approved">Approved</div>
                    <div style ="width:20%;" class ="btn btn-dark declined">Declined</div>
                    <div style ="width:20%;" class ="btn btn-dark late">Late</div>
                    
                </div> 
                <hr>

                
                    
                <div class ="pending-docs">

                                <?php
                                                    require '../constants/db_config.php';
                                                    try {
                                                    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                                                    // $stmt = $conn->prepare("SELECT tbl_class_doc.folder_num,tbl_class_doc.file,tbl_class_doc.status,tbl_class_doc.stud_id,tbl_class_doc.title,tbl_class_doc.id,tbl_class_doc.class_no,class_folder.folder_name 
                                                    // FROM tbl_class_doc 
                                                    // INNER JOIN class_folder 
                                                    // ON tbl_class_doc.class_no=class_folder.folder_class 
                                                    // WHERE class_no ='$class' and folder_num = '$folder_no' AND status ='Pending'");
                                                    $stmt = $conn->prepare("SELECT * FROM tbl_class_doc 
                                                    WHERE class_no ='$class' and folder_num = '$folder_no' AND status ='Pending' and late =0");
                                                    $stmt->execute();
                                                    $result = $stmt->fetchAll();

                                                    


                                                    $records = count($result); 

                                                    if($records == 0){ 
                                                        echo '
                                                                                                                                                
                                                                                                                                                <center>

                                                                                                                                                        
                                                                                                                                                <img src ="img/file-empty.png" style="height:200px;width:200px;" alt ="NO FILES"><br><br>
                                                                                                                                                <h3>FOLDER EMPTY</h3>

                                                                                                                                                </center>
                                                                                                                                                
                                                                                                                                                
                                                                                                                                                ';
                                                    }

                                                    else{

                                                        echo'


                                                        <div class="document-heading">

                                                            <h3>&nbsp&nbspPending Documents:</h3>

                                                        </div>
                                                        <br>
                                                        
                                                        <table style ="width:100%">

                                                        <thead>
                                                            <tr>
                                                                <th><center>Document Name</th>
                                                                <th><center>From</th>
                                                                <th><center>Date Uploaded</th>
                                                                <th><center>Time Uploaded</th>
                                                                <th><center>View</th>
                                                                <th><center>Approve</th>
                                                                <th><center>Decline</th>
                                                            </tr>
                                                        </thead>
                                                        
                                                        <tbody>
                                                        
                                                        
                                                        ';
                                                    }

                                                    foreach($result as $row) {
                                                    ?>
                                                            <!-- Lagay dito -->

                                                            <tr>

                                                                                            
                                                                    <td><center><?php echo $row['file'];?></td>
                                                                    <td><center>
                                                                        
                                                                    <?php $id_intern = $row['stud_id']?>
                                                                    <?php
                                                                    
                                                                    $stud_id = $conn->prepare("SELECT * FROM tbl_users WHERE member_no ='$id_intern'");
                                                                    $stud_id->execute();
                                                                    $stud_id_result = $stud_id->fetchAll();


                                                                    foreach($stud_id_result as $deet_row){
                                                                        echo $deet_row['first_name'].' '.$deet_row['last_name'] ;

                                                                        $intern = $deet_row['member_no'];
                                                                    }
                                                                    
                                                                    
                                                                    ?>
                                                                    
                                                                    
                                                                
                                                                
                                                                
                                                                
                                                                
                                                                
                                                                
                                                                
                                                                
                                                                    </td>

                                                                    <td><center>


                                                                                                                                

                                                            <?php echo $row['date'];?>

                                                                        </td>
                                                                    <td><center>


                                                                                                                                

                                                            <?php echo $row['time_submit'];?>

                                                                        </td>



                                                                    <td><center><a  target ="__blank" style="width:100%;"class="btn btn-primary" href="view-documents.php?id=<?php echo $row['id'];?>">
                                                                    
                                                                    
                                                                    <i class="fa-solid fa-eye"></i></a>

                                                                    </td>
                                                                    


                                                                    <td><center><a style="width:100%;" 

                                                                        onclick = "return confirm('Approve This Document ?')" 
                                                                        class="btn btn-success" href="app/approve-doc.php?new_d=<?php echo $row['id'];?>&id=<?php echo $intern?>&class=<?php echo $class?>">
                                                                        <i class="fa-solid fa-thumbs-up"></i></a>

                                                                    </td> 

                                                                    <td><center><a style="width:100%;" 

                                                                        onclick = "return confirm('Are you sure you want Disapprove this Document ?')" 
                                                                        class="btn btn-danger" href="app/decline-doc.php?new_d=<?php echo $row['id'];?>&id=<?php echo $intern?>&class=<?php echo $class?>">
                                                                        <i class="fa-solid fa-thumbs-down"></i></a>

                                                                    </td>
                                                                    </tr>
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




            <!--------------APPROVED DOCS------------------>


            <div class ="approved-docs" style="display:none">

                    <?php
                                        require '../constants/db_config.php';
                                        try {
                                        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                                        // $stmt = $conn->prepare("SELECT tbl_class_doc.folder_num,tbl_class_doc.file,tbl_class_doc.status,tbl_class_doc.stud_id,tbl_class_doc.title,tbl_class_doc.id,tbl_class_doc.class_no,class_folder.folder_name 
                                        // FROM tbl_class_doc 
                                        // INNER JOIN class_folder 
                                        // ON tbl_class_doc.class_no=class_folder.folder_class 
                                        // WHERE class_no ='$class' and folder_num = '$folder_no' AND status ='Pending'");
                                        $stmt = $conn->prepare("SELECT * FROM tbl_class_doc 
                                        WHERE class_no ='$class' and folder_num = '$folder_no' AND status ='Approved'");
                                        $stmt->execute();
                                        $result = $stmt->fetchAll();

                                        


                                        $records = count($result); 

                                        if($records == 0){ 
                                            echo '
                                                                                                                                    
                                                                                                                                    <center>

                                                                                                                                            
                                                                                                                                    <img src ="img/file-empty.png" style="height:200px;width:200px;" alt ="NO FILES"><br><br>
                                                                                                                                    <h3>FOLDER EMPTY</h3>

                                                                                                                                    </center>
                                                                                                                                    
                                                                                                                                    
                                                                                                                                    ';
                                        }

                                        else{

                                            echo'


                                            <div class="document-heading">

                                                <h3>&nbsp&nbspApproved Documents:</h3>

                                            </div>
                                            <br>
                                            
                                            <table style ="width:100%">

                                            <thead>
                                                <tr>
                                                    <th><center>Document Name</th>
                                                    <th><center>From</th>
                                                    <th><center>Date Uploaded</th>
                                                    <th><center>Time Uploaded</th>
                                                    <th><center>Date Approved</th>
                                                    <th><center>View</th>
                                                </tr>
                                            </thead>
                                            
                                            <tbody>
                                            
                                            
                                            ';
                                        }

                                        foreach($result as $row) {
                                        ?>
                                                <!-- Lagay dito -->

                                                <tr>

                                                                                
                                                        <td><center><?php echo $row['file'];?></td>
                                                        <td><center>
                                                            
                                                        <?php $id_intern = $row['stud_id']?>
                                                        <?php
                                                        
                                                        $stud_id = $conn->prepare("SELECT * FROM tbl_users WHERE member_no ='$id_intern'");
                                                        $stud_id->execute();
                                                        $stud_id_result = $stud_id->fetchAll();


                                                        foreach($stud_id_result as $deet_row){
                                                            echo $deet_row['first_name'].' '.$deet_row['last_name'] ;

                                                            $intern = $deet_row['member_no'];
                                                        }
                                                        
                                                        
                                                        ?>
                                                        
                                                        
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                        </td>

                                                        <td><center><?php echo $row['date']?> </td>
                                                        <td><center><?php echo $row['time_submit']?> </td>
                                                        <td><center><?php echo $row['date_status']?> </td>
                                                        <td><center><a  target ="__blank" style="width:100%;"class="btn btn-primary" href="view-documents.php?id=<?php echo $row['id'];?>">
                                                        
                                                        
                                                        <i class="fa-solid fa-eye"></i></a>

                                                        </td>
                                                        </tr>
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






            <!------APPROVED DOCS END--------->



            <!---- DECLINED START------>


            <div class ="declined-docs" style="display:none">

<?php
                    require '../constants/db_config.php';
                    try {
                    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                    // $stmt = $conn->prepare("SELECT tbl_class_doc.folder_num,tbl_class_doc.file,tbl_class_doc.status,tbl_class_doc.stud_id,tbl_class_doc.title,tbl_class_doc.id,tbl_class_doc.class_no,class_folder.folder_name 
                    // FROM tbl_class_doc 
                    // INNER JOIN class_folder 
                    // ON tbl_class_doc.class_no=class_folder.folder_class 
                    // WHERE class_no ='$class' and folder_num = '$folder_no' AND status ='Pending'");
                    $stmt = $conn->prepare("SELECT * FROM tbl_class_doc 
                    WHERE class_no ='$class' and folder_num = '$folder_no' AND status ='Declined'");
                    $stmt->execute();
                    $result = $stmt->fetchAll();

                    


                    $records = count($result); 

                    if($records == 0){ 
                        echo '
                                                                                                                
                                                                                                                <center>

                                                                                                                        
                                                                                                                <img src ="img/file-empty.png" style="height:200px;width:200px;" alt ="NO FILES"><br><br>
                                                                                                                <h3>FOLDER EMPTY</h3>

                                                                                                                </center>
                                                                                                                
                                                                                                                
                                                                                                                ';
                    }

                    else{

                        echo'


                        <div class="document-heading">

                            <h3>&nbsp&nbspDeclined Documents:</h3>

                        </div>
                        <br>
                        
                        <table style ="width:100%">

                        <thead>
                            <tr>
                            <th><center>Document Name</th>
                            <th><center>From</th>
                            <th><center>Date Uploaded</th>
                            <th><center>Time Uploaded</th>
                            <th><center>Date Declined</th>
                            <th><center>View</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                        
                        
                        ';
                    }

                    foreach($result as $row) {
                    ?>
                            <!-- Lagay dito -->

                            <tr>

                                                            
                                    <td><center><?php echo $row['file'];?></td>
                                    <td><center>
                                        
                                    <?php $id_intern = $row['stud_id']?>
                                    <?php
                                    
                                    $stud_id = $conn->prepare("SELECT * FROM tbl_users WHERE member_no ='$id_intern'");
                                    $stud_id->execute();
                                    $stud_id_result = $stud_id->fetchAll();


                                    foreach($stud_id_result as $deet_row){
                                        echo $deet_row['first_name'].' '.$deet_row['last_name'] ;

                                        $intern = $deet_row['member_no'];
                                    }
                                    
                                    
                                    ?>
                                    
                                    
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                    </td>

                                    <td><center><?php echo $row['date']?>

                                    </td>
                                    <td><center><?php echo $row['time_submit']?>

                                    </td>
                                    <td><center><?php echo $row['date_status']?>

                                    </td>
                                    <td><center><a  target ="__blank" style="width:100%;"class="btn btn-primary" href="view-documents.php?id=<?php echo $row['id'];?>">
                                    
                                    
                                    <i class="fa-solid fa-eye"></i></a>

                                    </td>
                                    </tr>
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





            <!----DECLINED END-------->

            <div class ="late-docs" style="display:none">

<?php
                    require '../constants/db_config.php';
                    try {
                    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                    // $stmt = $conn->prepare("SELECT tbl_class_doc.folder_num,tbl_class_doc.file,tbl_class_doc.status,tbl_class_doc.stud_id,tbl_class_doc.title,tbl_class_doc.id,tbl_class_doc.class_no,class_folder.folder_name 
                    // FROM tbl_class_doc 
                    // INNER JOIN class_folder 
                    // ON tbl_class_doc.class_no=class_folder.folder_class 
                    // WHERE class_no ='$class' and folder_num = '$folder_no' AND status ='Pending'");
                    $stmt = $conn->prepare("SELECT * FROM tbl_class_doc 
                    WHERE class_no ='$class' and folder_num = '$folder_no' AND status ='Pending' AND late =1");
                    $stmt->execute();
                    $result = $stmt->fetchAll();

                    


                    $records = count($result); 

                    if($records == 0){ 
                        echo '
                                                                                                                
                                                                                                                <center>

                                                                                                                        
                                                                                                                <img src ="img/file-empty.png" style="height:200px;width:200px;" alt ="NO FILES"><br><br>
                                                                                                                <h3>FOLDER EMPTY</h3>

                                                                                                                </center>
                                                                                                                
                                                                                                                
                                                                                                                ';
                    }

                    else{

                        echo'


                        <div class="document-heading">

                            <h3>&nbsp&nbspLate Documents:</h3>

                        </div>
                        <br>
                        
                        <table style ="width:100%">

                        <thead>
                            <tr>
                            <th><center>Document Name</th>
                            <th><center>From</th>
                            <th><center>Date Uploaded</th>
                            <th><center>Time Uploaded</th>
                            <th><center>View</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                        
                        
                        ';
                    }

                    foreach($result as $row) {
                    ?>
                            <!-- Lagay dito -->

                            <tr>

                                                            
                                    <td><center><?php echo $row['file'];?></td>
                                    <td><center>
                                        
                                    <?php $id_intern = $row['stud_id']?>
                                    <?php
                                    
                                    $stud_id = $conn->prepare("SELECT * FROM tbl_users WHERE member_no ='$id_intern'");
                                    $stud_id->execute();
                                    $stud_id_result = $stud_id->fetchAll();


                                    foreach($stud_id_result as $deet_row){
                                        echo $deet_row['first_name'].' '.$deet_row['last_name'] ;

                                        $intern = $deet_row['member_no'];
                                    }
                                    
                                    
                                    ?>
                                    
                                    
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                    </td>

                                    <td><center><?php echo $row['date']?>

                                    </td>
                                    <td><center><?php echo $row['time_submit']?>

                                    </td>
                                    <td><center><a  target ="__blank" style="width:100%;"class="btn btn-primary" href="view-documents.php?id=<?php echo $row['id'];?>">
                                    
                                    
                                    <i class="fa-solid fa-eye"></i></a>

                                    </td>
                                    </tr>
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







            

                    




                <style>

                    .title-status{
                        display:flex;
                        justify-content: space-around;
                        color:#2b7a78;
                        padding: 2px 2px;
                    }

                    #approved-docs



                </style>
