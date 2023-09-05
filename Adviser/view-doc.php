<?php 
include 'header.php'; 
echo '<title>View Documents - Adviser</title>';
$class = $_GET['class'];
$intern = $_GET['id'];
$route = "class=$class";
?>             


 
<main style="background-color:var(--main-bg); height:100%;">
                    
<div class="container-fluid px-4">
    <div class = "mt-4 mb-4 contact-us">

        <h1 class="title-page">documents</h1>
       </div>

    <div class="card violet mb-4">


                            <div class="card-header-class">
                

                                                        <nav aria-label="breadcrumb" style ="margin-left:50px;"><br>
                                                            
                                                            <ol class="breadcrumb">
                                                                
                                                                <li class="breadcrumb-item"><a href="OJTclass.php?<?php echo $route?>">OJT Class</a></li>
                                                                <!-- <li class="breadcrumb-item"><a href="#">Library</a></li> -->
                                                                <li class="breadcrumb-item active" aria-current="page">Documents</li>
                                                            </ol>
                                                        </nav>
                            
                            </div>

                        <center><hr class ="stream-divider"></center>
        <!----------DOCUMENTS----------------------------->
        <div class="card-body">

            <?php include 'constants/display_class_details.php';?>    


            <br>
            <div class="document-heading">

                <h3>&nbsp&nbspUploaded Documents:</h3>

            </div>
            <br>

          

                <table id="datatablesSimple">

                    <thead>
                        <tr>
                            <th><center>Document Name</th>
                            <th><center>View</th>
                            <th><center>Approve</th>
                            <th><center>Disapprove</th>
                        </tr>
                    </thead>
                    
                    <tbody>


                    <?php
                                    require '../constants/db_config.php';
                                    try {
                                    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                                    $stmt2 = $conn->prepare("SELECT * FROM tbl_class WHERE class_unique ='$class'");
                                    $stmt2->execute();
                                    $resul2 = $stmt2->fetchAll();

                                    foreach($resul2 as $row2) {

                                            $class_unique = $row2['join_code'];

                                    }
                                    
                                    
                                    $stmt = $conn->prepare("SELECT * FROM tbl_class_doc WHERE stud_id ='$intern' and class_no = '$class_unique' And status ='Pending'");
                                    $stmt->execute();
                                    $result = $stmt->fetchAll();

                                    foreach($result as $row) {
                                    ?>
                                            <!-- Lagay dito -->

                                            <tr>

                                                                            
                                                    <td><center><i class="fas fa-file-download"></i>&nbsp&nbsp&nbsp<?php echo $row['title'];?></td>

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

                <br><br>


                <div class="document-heading">

                    <h3>&nbsp&nbspApproved Documents:</h3>

                    </div>
                    <br>

                <ul>

                <?php
                                    require '../constants/db_config.php';
                                    try {
                                    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                                    $stmt3 = $conn->prepare("SELECT * FROM tbl_class WHERE class_unique ='$class'");
                                    $stmt3->execute();
                                    $resul3 = $stmt3->fetchAll();

                                    foreach($resul3 as $row3) {

                                            $class_unique2 = $row3['join_code'];

                                    }
                                    
                                    
                                    $stmt = $conn->prepare("SELECT * FROM tbl_class_doc WHERE stud_id ='$intern' and class_no = '$class_unique2' and status ='Approved'");
                                    $stmt->execute();
                                    $result4 = $stmt->fetchAll();

                                    foreach($result4 as $row4) {
                                    ?>
                                            <!-- Lagay dito -->

                                           <li class ="approved-doc">
                                               
                                           <?php echo $row4['title'];?> 
                                           
                                           <a  target ="__blank" style="width:10%;" 
                                           class="btn btn-primary" 
                                           href="view-documents.php?id=<?php echo $row4['id'];?>">
                                            View
                                            </a>
                                        
                                        </li>
                                    <?php
                                     
                                    {

                                    }
                                    
                                    }}catch(PDOException $e)
                                    {

                                    }
                    
                                    ?>
                </ul>



                
                
    
    
        </div>
    <!--------------------------------------->
    </div>
</div>
                </main>

                
                
                
            </div>
        </div>
        <?php include 'footer.php';?>
    </body>
</html>