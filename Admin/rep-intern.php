<?php 
include 'header.php'; 

echo '<title>Intern Repository - Admin</title>';


?>        

<style>
   

  #rep-intern{
    background:#fff;
    color:#2b7a78;
  }


  
.outer-container {
	border: #e0dfdf 1px solid;
	padding: 30px 30px 10px 30px;
	border-radius: 15px;
	text-align: center;
	margin: 10px auto;
	width: 350px;
}


.file {
	border: 1px solid #cfcdcd;
	padding: 12px;
	border-radius: 20px;
	color: #171919;
	width: 93%;
	margin-bottom: 20px;
}
</style>
<style>
      @media print{
        .sb-sidenav-menu{
            
            display:none;
           
        }
        .dont-print{
            display:none;
        }

        .datatable-top{
            display:none;
        }

        .datatable-info{
            display:none;
        }

        .tbl-container{
            border:none;
        }

        .dataTables_length{
            display:none;
        }

       

        #datatablesSimple_filter{
            display:none;
        }

        .dataTables_info{
            display:none;
        }

        #datatablesSimple_paginate{
            display:none;
        }

        .th-hide{
            display:none;
        }

        .tbl-container{
            margin-top:-60px;
            background:none;
            /* font-size:10px; */
            font-size:1vw;
        }

        .changein-print{
            background:none;
            font-color:black;
        }
        
        
    }
</style>  
                
                
                <main style="background-color:var(--main-bg); height:100%;">
                    
    <div class="container-fluid px-4">
        <div class = "mt-4 mb-4 contact-us">

            <h1 class="title-page">Interns</h1>
            <!-- <a href="../#contact" target="__blank" class ="btn btn-primary"><i class="fas fa-phone-alt"></i> CONTACT SUPPORT</a> -->
        </div>
      


        
        <div class="card mb-4">
            <div class="card-body">
                

                            <div class ="accesibility">

                                <div class="card-body"> 
                                <?php include 'constants/check_reply.php';?>
                                    
                                <!------------------------->

                                <div class = "tbl-container">

                                <br>

                                <div class="printbtn" style ="display:flex;justify-content: flex-end;"> 
                                    
                                    
                                    
                                    <button class ="btn btn-warning dont-print" data-toggle="modal" data-target="#exportExcell"><i class="fas fa-file-excel"></i> Import</button> &nbsp&nbsp
                                       
                                        <button id="print" class ="btn btn-success dont-print"><i class ="fas fa-print"></i> Print</button>

                                    </div> 

                                    <br>
                                
                                <?php include 'constants/draw-intern.php';?>

                                </div>

                                <!------------------------->
                                </div>
                            </div>
            
            </div>

<!--------EXPORT MODAL----------------->

<!-- Modal -->
<div class="modal fade" id="exportExcell" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exportExcellLabel">Import Excel File</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
            <div class="outer-container">
                <div class="row">
                    <form class="form-horizontal" action="app/import-student.php" method="post"
                        name="frmExcelImport" id="frmExcelImport"
                        enctype="multipart/form-data" onsubmit="return validateFile()">
                        <div Class="input-row">

                        <label>Choose your file. <a href="Template/intern-template.xlsx"
						download>Download excel template</a></label>
                            <div>
                                <input type="file" name="file" id="file" class="file"
                                    accept=".xls,.xlsx">
                            </div>
                            <div class="import">
                                <button type="submit" id="submit" name="import" class="btn btn-warning">Import
                                    Excel and Save Data</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>



      </div>
      
    </div>
  </div>
</div>

<!------------------------->

           
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
    <!-- <script src="js/datatables-simple-demo.js"></script> -->
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>

    <script src="js/custom.js?v=<?php echo time();?>"></script>
    <script src="js/chart.js"></script>
</body>
</html>