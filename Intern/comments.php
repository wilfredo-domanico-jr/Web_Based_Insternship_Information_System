<?php 
include 'intern_header.php'; 



$announcement_id = $_GET['id'];
$class = $_GET['class'];
$route ="class=$class"

?>           
<style>
     #home{
    background:#fff;
    color:#2b7a78;
  }
</style>

<script>
           tinymce.init({
  selector: 'textarea#editor',
  plugins: 'lists, link, image, media', 
  toolbar: 'h1 h2 bold italic strikethrough blockquote bullist numlist backcolor | link image media | removeformat help',
  menubar: false,
  height:200,
  setup: (editor) => {
      // Apply the focus effect
      editor.on("init", () => {
      editor.getContainer().style.transition = "border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out";
        });
      editor.on("focus", () => { (editor.getContainer().style.boxShadow = "0 0 0 .2rem rgba(0, 123, 255, .25)"),
      (editor.getContainer().style.borderColor = "#80bdff");
        });
      editor.on("blur", () => {
      (editor.getContainer().style.boxShadow = ""),
      (editor.getContainer().style.borderColor = "");
       });
     },
  });
        </script>

 


<main>

 
                    
             
                <div class="container-fluid px-4">
                    <div class = "mt-4 mb-4 contact-us">

                        <h1 class="title-page">my class</h1>
                       </div>
                    <div class="card violet mb-4">

                     
                        <div class="card-body-class">


                        <a class ="btn btn-primary" style="color:#fff;" href="classroom.php?<?php echo $route?>"><i class="fas fa-arrow-left"></i> Back</a>
                                                        
<br><br>

                            
                                <div class ="stream-content2">
                                    <h1 class ="stream-announcement"><center>Post</center></h1>
                                        <div class="container-announce">
                                                
                                            
                                                <?php include 'constants/disp-com-announcement.php'?>

                                        </div>
                                        <br>

                                        <h1 class ="stream-announcement"><center>Comments</center></h1>
                                        <hr class ="post-divider" size ="5"> 

                                            <div class ="overflow-comment" style="background-color: #fff;padding: 20px;border-radius:10px;min-height:50px; max-height:500px;">

                                                <?php include 'constants/disp-comments.php'?> 


                                            </div>

                                            
                                    
                                            </div><br><br>

                                            <h2 style="margin-left:20px;color:var(--primary-color);">ADD COMMENT:</h2>

                                            <div class ="comment-box" id="show-cmm">
                                            
                                            
                                            <form action="app/add_comment.php" method="POST" autocomplete="off">

                                            <textarea style="height:20px;" class ="form-control text-area"name="comment" id="editor" placeholder="Enter Comment"></textarea>
                                                <br><br>
                                                
 

                                                <input type="hidden" name="id" value="<?php echo "$announcement_id"; ?>">
                                                <input type="hidden" name="my_id" value="<?php echo "$myid"; ?>">
                                                <input type="hidden" name="class" value="<?php echo "$class"; ?>">
                                                <input type="hidden" name="fname" value="<?php echo "$myfname"; ?>">
                                                <input type="hidden" name="lname" value="<?php echo "$mylname"; ?>">


                                                <div id ="right-button">

                                                
                                                    <button type ="submit" class ="btn btn-success"><i class="fas fa-paper-plane"></i>&nbsp;&nbsp;Send</button>
                                                </div>
                                                
                                            

                                            </form>


                                            </div>
                                            
                                            

                                        
                                </div>
                                    
                        
                        
                        </div>

                        <!----------Class----------------------------->



                        
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
            <script src="js/custom.js"></script>
        </body>
    </html>