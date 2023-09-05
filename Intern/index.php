
<?php  
include 'intern_header.php';  

echo '<title>My Profile - Intern</title>';
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
            toolbar: 'h1 h2 bold italic strikethrough blockquote bullist numlist backcolor | link image media | removeformat help',
            menubar: false,
          });
        </script>
 

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

                                        <a style ="font-size:2.5vmin"class="btn btn-dark" href ="change-pass.php">Change Password</a>
                                    </div>


 
                                        <form class="post-form-wrapper" action="app/update-profile.php" method="POST" autocomplete="off">
								
                                    <div class="row">
                                      <?php include 'constants/check_reply.php'; ?>
                                      <div class="clear"></div>

                                          <div class="col-sm-4 col-md-3">
                                          
                                                  <div class="form-group">
                                                    <label class="text-light">First Name</label>
                                                    <input style ="border-radius:20px;" name="fname" placeholder="Enter Firstname" type="text" class="form-control" value="<?php echo $myfname;?>" required>
                                                  </div>
                                          </div>


                                          <div class="col-sm-4 col-md-3">

                                                  <div class="form-group">



                                                    <label class="text-light">Middle Name: (Optional)</label>

                                                    <input style ="border-radius:20px;" name="mname" type="text" class="form-control" value="<?php echo "$mymname"; ?>" placeholder="Enter Middle Name">
                                                        
                                                  </div>
                                            
                                          </div>

                                          <div class="col-sm-4 col-md-3">

                                                  <div class="form-group">
                                                    <label class="text-light">Last Name</label>
                                                    <input style ="border-radius:20px;" name="lname" placeholder="Enter Last Name" type="text" class="form-control" value="<?php echo $mylname; ?>" required>
                                                  </div>
                                            
                                          </div>

                                          

                                          <div class="col-sm-4 col-md-3">

                                                  <div class="form-group">



                                                    <label class="text-light">Company Name</label>

                                                  
                                                    <?php include 'constants/display-my-company.php'?>
                                                  </div>
                                            
                                          </div>


                                          

                                      </div>

                                      <br>

                                      <div class="row">

                                      <div class="col-sm-4 col-md-2">

                                                  <div class="form-group">



                                                    <label class="text-light">Age:</label>

                                                    <input oninput="this.value=!!this.value && Math.abs(this.value) >=0? Math.abs(this.value) :null" style ="border-radius:20px;" required name="age" type="number" min="0" class="form-control" value="<?php echo "$age"; ?>" placeholder="Enter Age">
                                                        
                                                  </div>
                                            
                                          </div>


                                              <div class="col-sm-6 col-md-5">

                                                    <div class="form-group">
                                                        <label class="text-light">Present Address:</label>


                                                        <input style ="border-radius:20px;" name="city" required type="text" class="form-control" value="<?php echo "$mycity"; ?>" placeholder="Enter Present Address">
                                                        
                                                      </div>

                                              </div>

                                              <div class="col-sm-6 col-md-5">

                                                    <div class="form-group">
                                                      <label class="text-light">Permanent Address:</label>
                                                      <input style ="border-radius:20px;" name="street" required type="text" class="form-control" value="<?php echo "$mystreet"; ?>" placeholder="Enter Permanent Address">
                                                    </div>


                                              </div>

                                              

                                      </div>
                                              <br>

                                      <div class ="row">

                                                  <div class="col-sm-6 col-md-3">
                                                  
                                                      <div class="form-group">
                                                        <label class="text-light">Email Address</label>
                                                        <input style ="border-radius:20px;" type="email" required class="form-control" value="<?php echo "$myemail"; ?>" placeholder="Enter your email" disabled>
                                                      </div>
                                                  
                                                  </div>

                                                  <div class="col-sm-6 col-md-3">
                                                   
                                                      <div class="form-group">
                                                        <label class="text-light">Student Number</label>


                                                        <input placeholder ="00-0000" minlength ="7" maxlength ="7" onkeypress ="return isNumberKey(event)" style ="border-radius:20px;" type="text" disabled class="form-control" value="<?php echo "$stud_num"; ?>">
                                                        


                                                        <!-- <div class ="row">
                                                            <div class="col-sm-4 col-md-4">
                                                              
                                                                <input style ="border-radius:20px;" type="text" name="stud_no" required class="form-control" value="<?php echo "$stud_num"; ?>">
                                                        
                                                            </div>

                                                            <div class="col-sm-2 col-md-1">
                                                              
                                                                -
                                                        
                                                            </div>

                                                            <div class="col-sm-6 col-md-6">
                                                              
                                                                <input style ="border-radius:20px;" type="text" name="stud_no" required class="form-control" value="<?php echo "$stud_num"; ?>">
                                                        
                                                            </div>
                                                        </div> -->
                                                      
                                                      </div>
                                              
                                                  </div>


                                                  <div class="col-sm-6 col-md-3">
                                                   
                                                      <div class="form-group">
                                                        <label class="text-light">Hours Rendered:</label>
                                                       <input style ="border-radius:20px;" class="form-control" id="disabledInput" type="text" value="<?php echo "$hours_rendered"; ?>" placeholder="0" disabled>
                                                     
                                                      
                                                      </div>
                                              
                                                  </div>

                                                  <div class="col-sm-6 col-md-3">
                                                      <div class="form-group">
                                                        <label class="text-light">Section</label>
                                                        <input style ="border-radius:20px;" class="form-control" id="disabledInput" type="text" value="<?php echo "$stud_section"; ?>" placeholder="No Section" disabled>
                                                      </div>
                                                  </div>

                                      </div>
                                      <br>


                                      
                                      <br>

                                      <div class="col-sm-12 col-md-12">
                                      
                                        <div class="form-group bootstrap3-wysihtml5-wrapper">
                                          <label class="text-light">About Me</label>
                                          <textarea id ="editor" name="about" class="bootstrap3-wysihtml5 form-control" placeholder="Your Description ..." style="height: 200px;"><?php echo "$mydesc"; ?></textarea>
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
                    

                    <hr style="color:black;height:5px;">
										
										<form action="app/new-dp.php" method="POST" enctype="multipart/form-data">
										<div class="row gap-20">
										<div class="col-sm-12 col-md-12">
												
										<div class="form-group bootstrap3-wysihtml5-wrapper" style =>
										<label class="text-light">Profile Picture
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
										?><a onclick = "return confirm('Are you sure you want to delete your profile ?')" class="btn btn-danger btn-inverse" href="app/drop-dp.php">Delete</a> <?php
										}
										?>
										</div>
										</div>
										</form>


                                       
                                        
                                            
                                    </div>
                                    
                                    
                                                        
                                </div>
                            
                            </div>
                       </div>

                    </div>

                </div>

            </div>


        </main> 
        
        <script>

                    function isNumberKey(evt){
                      var charCode = (evt.which) ?evt.which :event.keyCode
                      if(charCode !=45 && charCode > 31   && (charCode < 48 || charCode > 57)){
                        return false;

                        return true;
                      }
                    }
        </script>
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