<?php 
include 'header.php'; 


echo '<title>Intern List - Adviser</title>';
?>             

 
 <main style="background-color:var(--main-bg); height:100%;">  
                    
    <div class="container-fluid px-4">
        <div class = "mt-4 mb-4 contact-us">

            <h1 class="title-page">intern list</h1>
            </div>
        <div class="card mb-4">


                                    <!-- <div class="card-header"> -->



                                     <!-- <div class ="breadcrumb-n-btn">
                                    
                                           

                                                            <button type="button" class ="btn btn-success" data-toggle="modal" data-target="#exampleModal">
                                                                 <i class="fas fa-plus-circle"></i>&nbsp;Add Student
              

                                                         
                                           
                                    </div>  -->

<!-- </div> -->
            <div class="card-body">

            <?php include 'constants/check_reply.php';?> 

                            <div class ="accesibility">

                                <div class="card-body">

                                    <!-- <div class ="tbl-container"> -->

                                    <table id="datatablesSimple" class="display nowrap" style="width:100%">
                                                        <thead>
                                                            <tr>

                                                            <th>Name</th>
                                                            <th>Position</th>
                                                            <th>Office</th>
                                                            <th>Age</th>
                                                            <th>Start date</th>
                                                            <th>Salary</th>
                                                                <!-- <th><center>STUDENT NO.</th>
                                                                <th><center>NAME</th>
                                                                <th><center>SECTION</th>
                                                                <th><center>EMAIL</th>
                                                                <th><center>COMPANY</th>
                                                                <th><center>VIEW</th> -->
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Tiger Nixon</td>
                                                                <td>System Architect</td>
                                                                <td>Edinburgh</td>
                                                                <td>61</td>
                                                                <td>2011-04-25</td>
                                                                <td>$320,800</td>
                                                            
                                                            </tr>
                                                        </tbody>
                                    </table>

                                    <!-- </div> -->
                                    

                                    
                                </div>
                                
                            </div>
                            
            
                </div>
           



                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                        <div class="modal-content" style ="width: 700px;margin: 20px;margin-left:-100px;"">
                                            <div class="modal-header header-modal-color">
                                            <h5 class="modal-title text-light" id="exampleModalLabel">Add Account</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            </div>
                                            <div class="modal-body body-modal-color text-center">

                                            <?php include 'constants/draw-intern.php';?> 

                                            </div>
                                        </div>
                                        </div>
                                    </div>
                </main>

                
                
                
            </div>
        </div>
        <?php include 'footer.php';?>
     </body>
</html>