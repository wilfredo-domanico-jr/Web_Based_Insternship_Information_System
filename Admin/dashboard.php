<?php 
include 'header.php'; 

echo '<title>Dashboard - Admin</title>';
?>        
   <style>
     #dashboard{
    background:#fff;
    color:#2b7a78;
  }
</style>    
        <main style="background-color:var(--main-bg); height:100%;">
                    
    <div class="container-fluid px-4">
        <div class = "mt-4 mb-4 contact-us">

            <h1 class="title-page">Dashboard</h1>
            <!-- <a href="../#contact" target="__blank" class ="btn btn-primary"><i class="fas fa-phone-alt"></i> CONTACT SUPPORT</a> -->
        </div>
        <div class="row">
            <div class="col-xl-3 col-md-3 col-sm-2">
                <div class="card dashboard mb-4">
                    <div class="card-body">

                    
                        
                       <span class ="title">Total Accounts</span> 

                                                                                        <?php
                                                                                                require '../constants/db_config.php';
                                                                                                try {
                                                                                                                    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                                                                                                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                                                            
                                                                                                                    $stmt = $conn->prepare("SELECT COUNT(*) FROM tbl_users");
                                                                                                                    $stmt->execute();
                                                                                                                    $result = $stmt->fetchAll();


                                                                                                                    foreach($result as $row) {
                                                                                                                        ?>
                                                                                                                                
                                                                                    
                                                                                                                                <h1 class ="dashboard-num"><?php echo $row[0];?></h1>
                                                                                                                                
                                                                                    
                                                                                                                        <?php
                                                                                                                        
                                                                                                                        { 
                                                                                    
                                                                                                                        }
                                                                                                                        
                                                                                                                        }
                                                                                                                    
                                                                                                                    




                                                                                                        }

                                                                                                        catch(PDOException $e)
                                                                                                                    {

                                                                                                                    }


                                                                                                            


                                                                                            ?>

                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-3 col-sm-2">
                <div class="card dashboard mb-4">
                    <div class="card-body">
                        
                    <span class ="title">Total Advisers</span>

                                            <?php
                                                                                                                    require '../constants/db_config.php';
                                                                                                                    try {
                                                                                                                                        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                                                                                                                        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                                                                                
                                                                                                                                        $stmt = $conn->prepare("SELECT COUNT(*) FROM tbl_users where role = 'Adviser'");
                                                                                                                                        $stmt->execute();
                                                                                                                                        $result = $stmt->fetchAll();


                                                                                                                                        foreach($result as $row) {
                                                                                                                                            ?>
                                                                                                                                                    
                                                                                                        
                                                                                                                                                    <h1 class ="dashboard-num"><?php echo $row[0];?></h1>
                                                                                                                                                    
                                                                                                        
                                                                                                                                            <?php
                                                                                                                                            
                                                                                                                                            { 
                                                                                                        
                                                                                                                                            }
                                                                                                                                            
                                                                                                                                            }
                                                                                                                                        
                                                                                                                                        




                                                                                                                            }

                                                                                                                            catch(PDOException $e)
                                                                                                                                        {

                                                                                                                                        }


                                                                                                                                


                                                                                                                ?>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-3 col-sm-2">
                <div class="card dashboard mb-4">
                    <div class="card-body">
                        
                    <span class ="title">Total Interns</span>
                    
                                                                                     <?php
                                                                                                require '../constants/db_config.php';
                                                                                                try {
                                                                                                                    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                                                                                                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                                                            
                                                                                                                    $stmt = $conn->prepare("SELECT COUNT(*) FROM tbl_users where role = 'Intern'");
                                                                                                                    $stmt->execute();
                                                                                                                    $result = $stmt->fetchAll();


                                                                                                                    foreach($result as $row) {
                                                                                                                        ?>
                                                                                                                                
                                                                                    
                                                                                                                                <h1 class ="dashboard-num"><?php echo $row[0];?></h1>
                                                                                                                                
                                                                                    
                                                                                                                        <?php
                                                                                                                        
                                                                                                                        { 
                                                                                    
                                                                                                                        }
                                                                                                                        
                                                                                                                        }
                                                                                                                    
                                                                                                                    




                                                                                                        }

                                                                                                        catch(PDOException $e)
                                                                                                                    {

                                                                                                                    }


                                                                                                            


                                                                                            ?>

                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-3 col-sm-2"> 
                <div class="card dashboard mb-4">
                    <div class="card-body">
                        
                    <span class ="title">Total Companies</span>
                    
                        <?php
                                                                                                require '../constants/db_config.php';
                                                                                                try {
                                                                                                                    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                                                                                                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                                                            
                                                                                                                    $stmt = $conn->prepare("SELECT COUNT(*) FROM tbl_users where role ='Company'");
                                                                                                                    $stmt->execute();
                                                                                                                    $result = $stmt->fetchAll();


                                                                                                                    foreach($result as $row) {
                                                                                                                        ?>
                                                                                                                                
                                                                                    
                                                                                                                                <h1 class ="dashboard-num"><?php echo $row[0];?></h1>
                                                                                                                                
                                                                                    
                                                                                                                        <?php
                                                                                                                        
                                                                                                                        { 
                                                                                    
                                                                                                                        }
                                                                                                                        
                                                                                                                        }
                                                                                                                    
                                                                                                                    




                                                                                                        }

                                                                                                        catch(PDOException $e)
                                                                                                                    {

                                                                                                                    }


                                                                                                            


                                                                                            ?>
                    
                    </div>
                </div>
            </div>
        </div>
  
        <div class="row">

                <?php 
                                            require '../constants/db_config.php';
                                            try {
                                            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                                            $stmt = $conn->prepare("SELECT * FROM tbl_users WHERE role ='Company'");
                                            $stmt->execute();
                                            $result = $stmt->fetchAll();

                                            foreach($result as $row) {
                                            ?>
                                                    <!-- Lagay dito -->

                                                    <?php echo $row['student_ojthours']; ?>
                                            <?php
                                            
                                            {

                                            }
                                            
                                            }}catch(PDOException $e)
                                            {

                                            }
                            
                ?>




            <div class="col-xl-6 col-md-6">
                <div class="card chart mb-4" style="padding:10px;">
                 

                    
                        
                    <canvas id="internChart"></canvas>

                   

                </div>
            </div>
            <div class="col-xl-6 col-md-6">
                <div class="card chart mb-4" style="padding:10px;">
                    <canvas id="myChart"></canvas>
                </div>
            </div>
        </div>

        <!-- <div class ="row">

          <div class="col-xl-12 col-md-12">
                <div class="card chart mb-4" style="padding:10px;">
                    <canvas id="newChart"></canvas>
                </div>
            </div>

        </div> -->
        <!-------------->
        
    </div>



    
                </main>






                

        
                
    </div>
</div>

<?php include 'graph.php'?>
<script>



//BAR CHARTS

  var xValues = ["With Company", "Without Company","With Section","Without Section"];

  var yValues = [
      <?php echo $total_records?>,
      <?php echo $total_records2?>,
      <?php echo $sec_records2?>,
      <?php echo $sec_records?>
    
    
    
    ];

  var barColors = ["red","blue","green","yellow"];
  
  new Chart("internChart", {
    type: "bar",
    data: {
      labels: xValues,
      datasets: [{
        backgroundColor: barColors,
        data: yValues
      }]
    },
    options: {
      legend: {display: false}, 
      title: {
        display: true,
        text: "Intern Status",
        fontColor:"black"
      },


      scales: {
                yAxes: [{
                    ticks: {
                        fontColor: "black",
                        fontSize: 12,
                        stepSize: 1,
                        beginAtZero: true
                    }
                }],
                xAxes: [{
                    ticks: {
                        fontColor: "black",
                        fontSize: 14,
                        stepSize: 1,
                        beginAtZero: true
                    }
                }]
            }
    }
  });







  //BAR CHARTS

  var xValues = ["With Company", "Without Company","With Section","Without Section"];

  var yValues = [
      <?php echo $total_records?>,
      <?php echo $total_records2?>,
      <?php echo $sec_records2?>,
      <?php echo $sec_records?>
    
    
    
    ];

  var barColors = ["red","blue","green","yellow"];
  
  new Chart("newChart", {
    type: "bar",
    data: {
      labels: xValues,
      datasets: [{
        backgroundColor: barColors,
        data: yValues
      }]
    },
    options: {
      legend: {display: false},
      title: {
        display: true,
        text: "Intern Status",
        
      }
    }
  });



//----------------------------------------------------------------------------------------


  //DOUGNUT CHART

var xValues = ["Active Intern", "Inactive Intern","Active Company", "Inactive Company","Active Adviser", "Inactive Adviser"];
var yValues = [
  
  <?php echo $cnt_act_interns?>,
<?php echo $cnt_inact_interns?>,
<?php echo $cnt_act_companies?>,
<?php echo $cnt_inact_companies?>,
<?php echo $cnt_act_adviser?>,
<?php echo $cnt_inact_adviser?>];
var barColors = ["#b91d47","#00aba9","red","blue","yellow","green"];



new Chart("myChart", {
  type: "pie",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {

    legend: {
                labels: {
                    fontColor: "black",
                    fontSize: 14
                }
            },

    title: {
      display: true,
      text: "Account Details",
      fontColor:"black"
    }
  }
});










</script>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
    <script src="js/custom.js"></script>
 
    <!-- <script src="js/chart.js?v=<?php echo time();?>"></script> -->
</body>
</html>