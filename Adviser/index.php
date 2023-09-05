<?php 
include 'header.php'; 

echo '<title>My Profile - Adviser</title>';
?>                   
<style>
     #index{
    background:#fff;
    color:#2b7a78;
  }
</style>
<script>
           tinymce.init({
            selector: 'textarea#editor',
            skin: 'bootstrap',
            plugins: 'lists, link, image, media',
            toolbar: 'h1 h2 bold italic strikethrough blockquote bullist numlist backcolor | link image media |',
            menubar: false,
          });
        </script>
                        
                        <main style="background-color:var(--main-bg); height:100%;">



                        <div class="container-fluid px-4">

<div class = "mt-4 mb-4 contact-us">

<h1 class="title-page">PROFILE</h1>
</div>
<div class="card violet mb-4">
    <div class="card-body">
       <div class ="row">
            <div class="col-xl-12 col-md-12">
                <div id ="edit-card">
                    <div class="edit-card-content">
                    <div class ="mb-4" style ="display:flex;
                                              align-items: flex-start;
                                              justify-content: space-between;">
                                        
                                        <h1> <i class="fas fa-user-edit"></i>  My Profile</h1>

                                        <a class="btn btn-dark" href ="change-pass.php">Change Password</a>
                                    </div>

                        <form class="post-form-wrapper" action="app/update-profile.php" method="POST" autocomplete="off">
 
                                <div class="row">
                                  <?php include 'constants/check_reply.php'; ?>
                                  <div class="clear"></div>

                                      <div class="col-sm-6 col-md-4">
                                              
                                                  <div class="form-group">
                                                    <label class ="text-light">Title</label>
                                                    <input style ="border-radius:20px;"  name="title" placeholder="Dr., Engr., Atty., etc." type="text" class="form-control" value="<?php echo "$mytitle"; ?>" required>
                                                   </div>
                                          
                                      </div>

                                      <div class="col-sm-6 col-md-4">
                                      
                                              <div class="form-group">
                                                <label class ="text-light">First Name</label>
                                                <input style ="border-radius:20px;"  name="fname" placeholder="Enter first name" type="text" class="form-control" value="<?php echo "$myfname"; ?>" required>
                                              </div>
                                      </div>

                                      <div class="col-sm-6 col-md-4"> 

                                              <div class="form-group">
                                                <label class ="text-light">Last Name</label>
                                                <input  style ="border-radius:20px;" name="lname" placeholder="Enter last name" type="text" class="form-control" value="<?php echo "$mylname"; ?>" required>
                                              </div>
                                        
                                      </div>

                                      

                                  </div>

                                  <br>

                                  <div class="row">


                                          <div class="col-sm-6 col-md-4">

                                                <div class="form-group">
                                                    <label class ="text-light">City/town</label>
                                                    <input style ="border-radius:20px;"  name="city" required type="text" class="form-control" value="<?php echo "$mycity"; ?>" placeholder="Enter your city">
                                                  </div>

                                          </div>

                                          <div class="col-sm-6 col-md-4">

                                                <div class="form-group">
                                                  <label class ="text-light">Street</label>
                                                  <input style ="border-radius:20px;"  name="street" required type="text" class="form-control" value="<?php echo "$mystreet"; ?>" placeholder="Enter your street">
                                                </div>


                                          </div>

                                          <div class="col-sm-6 col-md-4">

                                              <div class="form-group">
                                                <label class ="text-light">Zip Code</label>
                                                <input style ="border-radius:20px;"  name="zip" required type="text" class="form-control" value="<?php echo "$myzip"; ?>" placeholder="Enter your zip">
                                              </div>

                                          </div>

                                  </div>
                                          <br>

                                  <div class ="row">

                                              <div class="col-sm-6 col-md-4">
                                              
                                                  <div class="form-group">
                                                    <label class ="text-light">Email Address</label>
                                                    <!-- <input class="form-control" id="disabledInput" type="text" value="<?php echo "$myemail"; ?>" placeholder="Enter your email" disabled> -->
                                                    <input style ="border-radius:20px;"  type="email" name="email" required class="form-control" value="<?php echo "$myemail"; ?>" placeholder="Enter your email" disabled>
                                                  </div>
                                              
                                              </div>

                                              <div class="col-sm-6 col-md-4">
                                              
                                                  <div class="form-group">
                                                    <label class ="text-light">Phone</label>
                                                    <input style ="border-radius:20px;"  type="text" name="phone" required class="form-control" value="<?php echo "$myphone"; ?>" placeholder="Enter Phone Number">
                                                  </div>
                                              
                                              </div>

                                              <div class="col-sm-6 col-md-4">
                                              
                                              <div class="form-group">
                                                <label class ="text-light">Role</label>
                                                <input style ="border-radius:20px;"  class="form-control" id="disabledInput" type="text" value="<?php echo "$myrole"; ?>" disabled>
                                              </div>
                                      
                                  </div>

                                              

                                              

                                  </div>
                                  <br>

                                  <div class="col-sm-12 col-md-12">
                                  
                                    <div class="form-group bootstrap3-wysihtml5-wrapper">
                                      <label class ="text-light">About Me</label>
                                      <textarea style ="border-radius:40px;" id="editor" name="about" class="bootstrap3-wysihtml5 form-control" placeholder="Your Description ..." style="height: 200px;"><?php echo "$mydesc"; ?></textarea>
                                    </div>
                                    
                                  </div>
                                  
                                  <br>

                                  <div class="col-sm-12 mt-10">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                    <button type="reset" class="btn btn-warning">Cancel</button>
                                  </div>

                                </div>
                  
                </form> 

                          <br>

                          <hr style ="color:black;height:5px;">

                          <form action="app/new-dp.php" method="POST" enctype="multipart/form-data">
                          <div class="row gap-20">
                          <div class="col-sm-12 col-md-12">
                              
                          <div class="form-group bootstrap3-wysihtml5-wrapper">
                          <label class ="text-light">Profile Picture
                          <input accept="image/*" type="file" name="image"  required >
                          </label>
                          </div>
                                <br>
                          </div>
                              
                          <div class="clear"></div>

                          <div class="col-sm-12 mt-10">
                          <button type="submit" class="btn btn-primary">Update</button>
                          <?php 
                          if ($myavatar == null) {

                          }else{
                          ?><a onclick = "return confirm('Are you sure you want to delete your profile ?')" class="btn btn-primary btn-inverse" href="app/drop-dp.php">Delete</a> <?php
                          }
                          ?>
                          </div>
                          </div>
                          </form>


                       
                        
                            
                    </div>
                    
                    
                                        
                </div>
            
            </div>
       </div>
       <div class ="card-header"></div>
    </div>
    

</div>


</div>


</main>


                        
                
            </div>
        </div>
        <?php include 'footer.php';?>



        
    </body>
</html>