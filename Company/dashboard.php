<?php 
include 'header.php'; 

echo '<title>Dashboard - Company</title>';
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

                    <h1 class="title-page">dashboard</h1>
                    </div>
                <div class="row">
                    <div class="col-xl-3 col-md-6">
                        <div class="card dashboard mb-4">

                        
                            <div class="card-body">
                                
                                <span class="title">Total Interns</span>
 
                                                                        <?php
                                                                              require '../constants/db_config.php';
                                                                              try {
                                                                                                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                                                                                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                                        
                                                                                                $stmt = $conn->prepare("SELECT COUNT(*) FROM tbl_users WHERE role ='Intern'and stud_company ='$join_code';");
                                                                                                $stmt->execute();
                                                                                                $result = $stmt->fetchAll();


                                                                                                foreach($result as $row) {
                                                                                                    ?>
                                                                                                            
                                                                
                                                                                                            <h1 class ="dashboard-num">
                                                                                                            <?php
                                                                                                                if($row[0] == 0){
                                                                                                                    echo '0';
                                                                                                                }

                                                                                                                else{
                                                                                                                    
                                                                                                                    echo $row[0];
                                                                                                                
                                                                                                                }
                                                                                                            
                                                                                                            ?>
                                                                                                           
                                                                                                            
                                                                                                            </h1>
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
                    <div class="col-xl-3 col-md-6">
                        <div class="card dashboard mb-4">
                          
                            <div class="card-body">
                                
                            <span class="title">Certificate Given</span>

                                <?php
                                                                              require '../constants/db_config.php';
                                                                              try {
                                                                                                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                                                                                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                                        
                                                                                                $stmt = $conn->prepare("SELECT COUNT(*) FROM tbl_certificate WHERE compAny ='$myid'");
                                                                                                $stmt->execute();
                                                                                                $result = $stmt->fetchAll();


                                                                                                foreach($result as $row) {
                                                                                                    ?>
                                                                                                            
                                                                
                                                                                                            <h1 class ="dashboard-num">
                                                                                                            <?php
                                                                                                                if($row[0] == 0){
                                                                                                                    echo '0';
                                                                                                                }

                                                                                                                else{
                                                                                                                    
                                                                                                                    echo $row[0];
                                                                                                                
                                                                                                                }
                                                                                                            
                                                                                                            ?>
                                                                                                           
                                                                                                            
                                                                                                            </h1>
                                                                
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

      <!--START CARD-->              
                    <div class="col-xl-3 col-md-6">
                        <div class="card dashboard mb-4">
                          
                            <div class="card-body">

                            <!-- <i class="fas fa-briefcase"></i> -->
                                    <!-- <div class ="container-num"> -->

                                                <span class="title">Pending Interviews</span>
                                                    <h1 class ="dashboard-num">
                                                    
                                                        <!-- <span style ="background:green;padding:5px 18px;border-radius:50px;color:#fff;"> -->
                                                            <?php echo $application_count?>

                                                        <!-- </span> -->
                                                    </h1>

                                    <!-- </div> -->
                           
                            </div>
                        </div>
                    </div>
<!---- END CARD--->

                <!--START CARD-->              
                <div class="col-xl-3 col-md-6">
                                        <div class="card dashboard mb-4">
                                        
                                            <div class="card-body">
                                                
                                            <span class="title">Pending Document Request</span>
                                            <h1 class ="dashboard-num">
                                            <?php echo $request_count?>
                                            </h1>
                                            </div>
                                        </div>
                                    </div>
                <!---- END CARD--->
                </div>

                <!------------->

                
                <!------------->
                <div class="row">
                        <div class="col-xl-6 col-md-4">
                        
                            <div class="card chart mb-4" style="padding: 10px 10px 20px 10px;">
                            
                                    <canvas style="font-color:red;" id="internChart"></canvas>

                            </div>
                            
                        </div>
                        <div class="col-xl-3 col-md-4">
                            <div class="card chart mb-4" style="padding: 10px 10px 20px 10px;">
                                <canvas id="myChart" style="height:250px;"></canvas>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-4">
                            <div class="card chart mb-4" style="padding: 10px 10px 20px 10px;">
                                <canvas id="department" style="height:250px;"></canvas>
                            </div>
                        </div>
                </div>
                <!-------------->
                
            </div>

        </main>

        


        
                
    </div>
</div>


<?php include 'graph.php'?>


<script>



//BAR CHARTS









  var xValues = ["0-250 hours", "251-300 hours","301-400 hours","401-500+"];

  var yValues = [
      
    <?php echo $total_hours;?>,
    <?php echo $total_hours2;?>,
    <?php echo $total_hours3;?>,
    <?php echo $total_hours4;?>
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
        text: "Intern Hours",
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

    //----------------





    //-----------------


    
  });



//----------------------------------------------------------------------------------------


  //DOUGNUT CHART

var xValues = ["With Certificate","Without Certificate"];
var yValues = [
    
    
    <?php echo $total_records2?>,
<?php echo $total_records?>];


var barColors = [
  "red",
  "blue",
];



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
      text: "Intern Certificate",
      fontColor:"black"
    }
  }
});


//-----DEPARTMENT-----------------------------------------------------------------------------------


  //DOUGNUT CHART

  var xValues = ["With Department","Without Department"];
var yValues = [
    
    
    1,
2];


var barColors = [
  "red",
  "blue",
];



new Chart("department", {
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
      text: "Intern Department",
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
</body>
</html>