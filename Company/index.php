<?php 
include 'header.php'; 


echo '<title>My Profile - Company</title>';
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

                                        <a style ="font-size:2vmin" class="btn btn-dark" href ="change-pass.php">Change Password</a>
                                    </div>


                                        <form class="post-form-wrapper" action="app/update-profile.php" method="POST" autocomplete="off">

                                          <!-- UNANG ROW -->
                                        <div class="row">
                                          <?php include 'constants/check_reply.php'; ?>


                                              <div class="col-sm-6 col-md-4">
                                          
                                                  <div class="form-group">
                                                      <label class="text-light">Company Name</label>
                                                      <input style ="border-radius:20px;" name="company" placeholder="Enter Company Name" type="text" class="form-control" value="<?php echo "$compname"; ?>" required>
                                              
                                                      </div>
                                                
                                              </div>


                                            <div class="col-sm-6 col-md-4">
                                      
                                              
                                              <div class="form-group">
                                                  <label class="text-light"">Email Address</label>
                                                  <input style ="border-radius:20px;" type="email" required class="form-control" value="<?php echo "$mymail"; ?>" placeholder="Enter your email" disabled>
                                                </div>
                                              
                                            </div>

                                            <div class="col-sm-6 col-md-4">
                                      
                                                 <div class="form-group">
                                                    <label class="text-light"">Established In</label>
                                                    <input style ="border-radius:20px;" name="year" placeholder="Enter year eg: 2016, 2017, 2018" type="text" class="form-control" value="<?php echo "$esta"; ?>" required>
                                                  </div>
                                                  
                                                </div>
                                        </div>

                                            <!-- PANGALAWANG ROW -->
                                          <div class="row">

                                                 

                                                <div class="col-sm-6 col-md-4">
                                      
                                                    <div class="form-group">
                                                      <label class="text-light">Type</label>
                                                       <input style ="border-radius:20px;" class="form-control" placeholder="Eg: Booking, Travel" name="type" required type="text" value="<?php echo "$mytitle"; ?>" required> 
                                                    </div>
                                                
                                                </div>


                                                <div class="col-sm-6 col-md-4">
                                                      <label class="text-light">People</label>
                                                      <select style ="border-radius:20px;" name="people" required class="selectpicker show-tick form-control mb-15" data-live-search="false">
                                                        <option <?php if ($mypeople == "1-10") { print ' selected '; } ?> value="1-10">1-10</option>
                                                        <option <?php if ($mypeople == "11-100") { print ' selected '; } ?> value="11-100">11-100</option>
                                                        <option <?php if ($mypeople == "200+") { print ' selected '; } ?> value="200+" >200+</option>
                                                        <option <?php if ($mypeople == "300+") { print ' selected '; } ?> value="300+">300+</option>
                                                        <option <?php if ($mypeople == "1000+") { print ' selected '; } ?>value="1000+">1000+ </option>
                                                      </select>
                                                  </div>

                                                <div class="col-sm-6 col-md-4">
                                                  <label class="text-light"">Website</label>
                                                  <input style ="border-radius:20px;" type="text" class="form-control" value="<?php echo "$myweb"; ?>" name="web" placeholder="Enter your website">
                                                </div>


                                          </div>

                                            <!-- PANGATLONG ROW -->
                                          <div class="row">

                                                  
                                                <div class="col-sm-6 col-md-4">
                                      
                                                    <div class="form-group">
                                                      <label class="text-light"">Address:</label>
                                                      <input style ="border-radius:20px;" name="city" required type="text" class="form-control" value="<?php echo "$city"; ?>" placeholder="Enter your city">
                                                    </div>
                                                
                                                </div>

                                                <div class="col-sm-6 col-md-4">
                                      
                                              <div class="form-group">
                                                <label class="text-light"">Phone Number</label>
                                                <input style ="border-radius:20px;" type="text" name="phone" required class="form-control" value="<?php echo "$myphone"; ?>" placeholder="Enter your phone">
                                              </div>
                                              
                                            </div>

                                            <div class="col-sm-6 col-md-4">
                                            
                                              <div class="form-group">
                                                <label class="text-light">Unique Code</label>
                                                <input style ="border-radius:20px;"class="form-control" id="disabledInput" type="text" value="<?php echo "$join_code"; ?>" placeholder="No Unique Code" disabled>
                                                </div>
                                              
                                            </div>

                                            </div>

                                    <div class="row">
                                      <br>
                                      
                                      <div class="col-sm-12 col-md-12">
                                      
                                        <div class="form-group bootstrap3-wysihtml5-wrapper">
                                          <label class="text-light"">Company background</label>
                                          <textarea id ="editor" name="background" class="bootstrap3-wysihtml5 form-control" placeholder="Enter company background ..." style="height: 200px;"><?php echo "$desc"; ?></textarea>
                                        </div>
                                        
                                      </div>
                                      
                                      <div class="clear"></div>
                                      
                                     
                                     <br>
                                      <div class="col-sm-12 col-md-12">
                                      
                                        <div class="form-group bootstrap3-wysihtml5-wrapper">
                                          <label class="text-light"">Services</label>
                                          <textarea id ="editor" name="services" class="bootstrap3-wysihtml5 form-control" placeholder="Enter company services ..." style="height: 200px;"><?php echo "$myserv"; ?></textarea>
                                        </div>
                                        
                                      </div>
                                      
                                      <div class="clear"></div>

                                      <br>
                                      
                                      <div class="col-sm-12 col-md-12">
                                      
                                        <div class="form-group bootstrap3-wysihtml5-wrapper">
                                          <label class="text-light"">Expertise</label>
                                          <textarea id ="editor"  name="expertise" class="bootstrap3-wysihtml5 form-control" placeholder="Enter company expertise ..." style="height: 200px;"><?php echo "$myex"; ?></textarea>
                                        </div>
                                        
                                      </div>
                                      
                                      <div class="clear"></div>

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
										<label class="text-light"">Company logo
										<input accept="image/*" type="file" name="image"  required >
                    </label>
										</div>

                    <br>
													
										</div>
												
										<div class="clear"></div>

										<div class="col-sm-12 mt-10">
										<button type="submit" class="btn btn-primary">Update</button>
										<?php 
										if ($logo == null) {

										}else{
										?><a onclick = "return confirm('Are you sure you want to delete your logo ?')" class="btn btn-danger btn-inverse" href="app/drop-dp.php">Delete</a> <?php
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
                    <div class ="card-header"></div>

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
    <script src="js/chart.js"></script>
    <script src="js/bootstrap3-wysihtml5.min.js"></script>
</body>
</html>


        
                
    </div>
</div>

</body>
</html>