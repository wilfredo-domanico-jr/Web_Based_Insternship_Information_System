<?php 
include 'intern_header.php'; 

echo '<title>Internships - Intern</title>';
?>

<style>
     #company{
    background:#fff;
    color:#2b7a78;
  }
</style>

               
                    <div class="container-fluid px-4">
                        <div class = "mt-4 mb-4 contact-us">

                            <h1 class="title-page">OTHER COMPANIES</h1>
                            </div>

                        <div class="container">

                                    <div class="row height d-flex justify-content-center align-items-center">



                                    <div class="col-md-12">

                                        <div class="form">

                                        
                                        <form action="" method="GET" autocomplete="off">
					
                                                
                                             
                                            <div class="input-group">
                                                <input type="text" name ="i" value ="<?php if(isset($_GET['i'])){echo $_GET['i'];}?>"class="form-control" placeholder="Search City, Company, Role etc,......">
                                                <div class="input-group-append">
                                                <button class="btn btn-secondary" type="submit">
                                                    <i class="fa fa-search"></i>
                                                </button>
                                                </div>
                                            </div>
                                               
                                            
                                        </form>


                                        </div>
                                        
                                    </div>
                                    
                                    </div>
                                    
                                </div>
                    
                    
                        <br>


 
                        

                                                                            <div class="row">


                                                                            <?php
                                                                                                require '../constants/db_config.php';
                                                                                             
                                                                                                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                                                                                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                                                                                                
                                                                                                if(isset($_GET['i'])){
                                                                                                    $filtervalues = $_GET['i'];
                                                                                                    $stmt = $conn->prepare("SELECT * FROM tbl_other_company 
                                                                                                    where CONCAT(company_name,company_type)Like '%$filtervalues%' order by id desc");
                                                                                                    // role_title Like '%$filtervalues%' OR assign_city Like '%$filtervalues%' OR first_name Like '%$filtervalues%'
                                                                                                    $stmt->execute();
                                                                                                    $result = $stmt->fetchAll();



                                                                                                    

                                                                                                    if($result >0){

                                                                                                        foreach($result as $row) {

                                                                                                                ?>

                                                                                                                    <a style ="text-decoration:none;" href ="cos-apply.php?com=<?php echo $row['member_no']?>" class="internship-card col-md-4">
                                                                                                                                <div class="p-3 mb-2 card" style ="border:2px solid #2b7a78;border-radius:10px;height:100px">
                                                                                                                                    <div class="d-flex justify-content-between">
                                                                                                                                        <div class="d-flex flex-row align-items-center">
                                                                                                                                            <div class="icon"> 
                                                                                                                                                
                                                                                                                                        
                                                                                                                                                                                    <?php
                                                                                                                                                                                        
                                                                                                                                                                                        if ($row['logo'] == null) {
                                                                                                                                                                                            echo '<img  class="icon"alt="default-image" title="no-image"  src="./img/image.png"/></center>';
                                                                                                                                                                                        }else{
                                                                                                                                                                                        echo '<img class="icon" alt="image" src="data:image/jpeg;base64,'.base64_encode($row['logo']).'"/>';	
                                                                                                                                                                                        }
                                                                                                                                                                                        ?>
                                                                                                                                        
                                                                                                                                        
                                                                                                                                            </div>
                                                                                                                                            <div class="ms-2 c-details">

                                                                                                                                            
                                                                                                                                            
                                                                                                                                        <input type="hidden" name="first_name" value="<?php echo $row['company_name'] ?>">
                                                                                                                                   
                                                                                                                                                <h6 class="mb-0" style="text-transform:uppercase;font-size:12px;"><?php echo $row['company_name'];?></h6> <span>
                                                                                                                                                <h6 class="mb-0" style="font-size:12px;"><?php echo $row['company_type'];?></h6> <span>
                                                                                                                                            </div>
                                                                                                                                        </div>
                                                                                                                                        <div class="badge"> <span>Details</span> </div>
                                                                                                                                    </div>
                                                                                                                                    
                                                                                                                                </div>
                                                                                                                    </a>

                                                                                                                <?php

                                                                                                        }

                                                                                                        
                                                                                                    }

                                                                                                    else{
                                                                                                    


                                                                                                            echo'NO RESULT';
                                                                                                        ?>


                                                                                                                <!--------WALA PA YUNG IF WALANG NAG EEXIST-------->
                                                                                                            
                                                                                                        <?php
                                                                                                        
                                                                                                    }
                                                                                                    
                                                                                                }

                                                                                                else{
                                                                                                    include 'constants/cos-unfiltered-company.php';
                                                                                                }

                                                                                                



                                                                                                ?>

                                                                                                
                                                                                                        <!-- Lagay dito -->

                                                                                                       
                                                                                                
                                                                        
                                                                        
                                                                                    
                                                                        
                                                                                
                                                                            </div>
                    
                            
                    </div>


                    </main>


                    <style>


.c-details span {
    font-weight: 300;
    font-size: 13px
}

.icon {
    width: 50px;
    height: 50px;
    background-color: #eee;
    border-radius: 15px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 39px
}

.badge span {
    background-color: #fffbec;
    width: 60px;
    height: 25px;
    padding-bottom: 3px;
    border-radius: 5px;
    display: flex;
    color: #fed85d;
    justify-content: center;
    align-items: center
}

.progress {
    height: 10px;
    border-radius: 10px
}

.progress div {
    background-color: red
}

.text1 {
    font-size: 14px;
    font-weight: 600
}

.text2 {
    color: #a5aec0
}


                    </style>

                
                </div>
            </div>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
            <script src="js/scripts.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
            <script src="js/datatables-simple-demo.js"></script>
            <script src="js/custom.js"></script>
        </body>
    </html>

                    