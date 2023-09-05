<?php 
include 'header.php'; 


echo '<title>View Post - Adviser</title>';
$announcement_id = $_GET['id'];
$class = $_GET['class'];
$route = "class=$class";

?>             
<style>
     #my_class{
    background:#fff;
    color:#2b7a78;
  }
</style>

<script>
           tinymce.init({
  selector: 'textarea#editor',
  height:200,
  plugins: 'lists, link, image, media',
  toolbar: 'h1 h2 bold italic strikethrough blockquote bullist numlist backcolor | link image media | removeformat help',
  menubar: false,
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

<main style="background-color:var(--main-bg); height:100%;"style="background-color:var(--main-bg); height:100%;">


                    
             
                <div class="container-fluid px-4">
                    <div class = "mt-4 mb-4 contact-us">

                        <h1 class="title-page">my class</h1>
                       </div>
                    <div class="card violet mb-4">

                    <!-- <div style="background:var(--topnav-color);padding:15px;"> -->
                 

                                                        <!-- <nav aria-label="breadcrumb" style ="margin-left:50px;"><br>
                                                             
                                                            <ol class="breadcrumb">
                                                                
                                                                <li class="breadcrumb-item"><a href="OJTclass.php?<?php echo $route?>">OJT Class</a></li>
                                                                <li class="breadcrumb-item active" aria-current="page">Comments</li>
                                                            </ol>
                                                        </nav> -->

                                                       

                                                                                       
                    <!-- </div> -->                        <div class="card-body-class">

                        <a class ="btn btn-primary" style="color:#fff;" href="OJTclass.php?<?php echo $route?>"><i class="fas fa-arrow-left"></i> Back</a>
                                                        
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

                                            
                                    
                                            </div>

                                            <br>

                                            <div class ="comment-box" id="show-cmm">
                                            
                                            
                                            <form action="app/add_comment.php" method="POST" autocomplete="off">

                                            <textarea class ="form-control text-area"name="comment" id="editor" placeholder="Enter Comment"></textarea>
                                                <br><br>
                                                


                                                <input type="hidden" name="id" value="<?php echo "$announcement_id"; ?>">
                                                <input type="hidden" name="my_id" value="<?php echo "$myid"; ?>">
                                                <input type="hidden" name="class" value="<?php echo "$class"; ?>">


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
        <?php include 'footer.php';?>
    </body>
</html>