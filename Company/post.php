<?php 
include 'header.php'; 


echo '<title>Internship Post - Company</title>';
?>   
<style>
  #post{
    background:#fff;
    color:#2b7a78;
  }
</style>
<script>
        //    tinymce.init({
        //     selector: 'textarea', 
        //     skin: 'bootstrap',
        //     plugins: 'lists, link, image, media',
        //     toolbar: 'h1 h2 bold italic strikethrough blockquote bullist numlist backcolor | link image media | removeformat help',
        //     menubar: false, 
        //     height:200,
        //   });

        //   tinymce.init({
        //     selector: 'textarea#editor2', 
        //     skin: 'bootstrap',
        //     plugins: 'lists, link, image, media',
        //     toolbar: 'h1 h2 bold italic strikethrough blockquote bullist numlist backcolor | link image media | removeformat help',
        //     menubar: false, 
        //     height:200,
        //   });

        //   tinymce.init({
        //     selector: 'textarea#editor3', 
        //     skin: 'bootstrap',
        //     plugins: 'lists, link, image, media',
        //     toolbar: 'h1 h2 bold italic strikethrough blockquote bullist numlist backcolor | link image media | removeformat help',
        //     menubar: false, 
        //     height:200,
        //   });





</script>


       
       
       <main style="background-color:var(--main-bg); height:100%;">

            <style>

                .container-internship{
            
                    /* border:2px solid red; */
                    padding:20px;
                }
            </style>
                
                <div class="container-fluid px-4">
                    <div class = "mt-4 mb-4 contact-us">

                        <h1 class="title-page">post internship</h1> 
                       </div>
                                    <div class="card mb-4">
                                        <div class="card-header">

                                        
                                            <div class ="breadcrumb-n-btn">

                                                <button type="button" class ="btn btn-success" data-toggle="modal" data-target="#postInternshipModal">
                                                <i class="fas fa-plus-circle"></i>&nbsp;Post Internship
                                                  </button>
                                            </div>
                                        </div> 
            
                                        <!-- <center><hr class ="stream-divider"></center> -->
                                        <div class="card-body-class">
            
                                            
            
                                            
                                                <div class ="stream-content2">

                                                         <?php include 'constants/check_reply.php';?>
                                                        <div class="container-internship">
                                                            
                                                            <?php include 'constants/your_internship_post.php'?>
                                                                                         
                                                        </div>
                                                          
                                                </div>
                                                    
                                        
                                         
                                        </div>
             
                                        
            
                                        
                                    </div>
                                </div>
            
             
                                                        <!-- Modal -->
                                                        <div class="modal fade" id="postInternshipModal" tabindex="-1" role="dialog" aria-labelledby="postInternshipModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog" role="document">
                                                            <div class="modal-content" style ="width: 800px;margin: 20px;margin-left:-100px;"">
                                                                <div class="modal-header" style="background-color: var(--topnav-color);color:#fff;">
                                                                <h5 class="modal-title" id="postInternshipModalLabel">Post Internship</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                                </div>
                                                                <div class="modal-body body-modal-color">
            
                                                               
                                                                <?php include 'constants/draw_job_application.php';?>
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                            </div>
            

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
    <script src="js/datatables-simple-demo.js"></script>
    <script src="js/custom.js?v=<?php echo time();?>"></script>
</body>
</html>
 