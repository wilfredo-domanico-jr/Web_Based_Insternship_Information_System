<!DOCTYPE html>
<html lang="en">
<?php 
include 'constants/settings.php'; 
include 'constants/check-login.php';
?>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>WISS</title>
        <link rel="icon" type="image/jpeg" href="images/version 2 (green) - no bg.png"/>
        <!---Bootstrap-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
        <!----BOOTSRAP ICONS-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
        <!----JQUERY-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <style>



                html{
                    background: url("images/body.jpg") no-repeat center center fixed; 
          -webkit-background-size: cover;
          -moz-background-size: cover;
          -o-background-size: cover;
          background-size: cover;



                }

            body{
            
                position: absolute;
                top:50%;
                left:50%;
                transform: translate(-50%,-50%);
                padding:20px;
                background:none;
            }
            .login-form{
                background-color: #c3c3c3;
                height:auto;
                width:auto;
                border-radius: 20px;
                text-align: center;
                padding:40px;
                border:5px solid #0091eA;
            }
            #white{
                color:#0091eA;
                font-size: 20px;
                font-family: Arial, Helvetica, sans-serif;
                text-shadow: #fff 3px 3px;
                text-transform: uppercase;
            }

            .button-user .btn{
                width: 100px;
                margin-bottom: 4px;
            }
           #intern-form{
                 background-color: #EFF0F1;
                width:100%;
                height:auto;
                border-radius: 20px;
                padding:10px;
                border:5px solid #badfe7;
           }
        </style>

    </head>
    <body>
            <div id="intern-form">

                        <div class="login-box-wrapper">

                                <section class ="title">
                                    
                                    <center><img src ="images/version 2 (green) - no bg.png" height="120px" width="120px" style="border-radius:100px; border:5px solid #badfe7" alt="logo"></center>
                                    
                                </section>
							
                            <div class="modal-header">
                                <h4 class="modal-title text-center">
                                    
                                        <center>
                                        
                                        Create your account for free
                                        
                                        </center>
                                
                                </h4>
                            
                            </div>
                            
                            <div class="modal-body" style="background:#fff;
                                border-radius:20px;">
                                <?php include 'constants/check_reply.php'?>
                                <form name="frm" action="app/create-account.php" method="POST" enctype="multipart/form-data" autocomplete="off">													
                                    <div class="row gap-20">
                                                                                        
                                                <div class="col-sm-12 col-md-12">
                                                
                                                    <div class="form-group"> 
                                                    <label>Company Name</label>
                                                    <input class="form-control" placeholder="Enter your company name" 
                                                    name="company" required type="text"> 
                                                    </div>
                                                                                                
                                                </div>
                                                
                                                <div class="col-sm-12 col-md-6">
                                                
                                                    <div class="form-group"> 
                                                    <label>Company Type</label>
                                                    <input class="form-control" 
                                                    placeholder="Eg: Booking/Travel, Computer Software etc" 
                                                    name="type" required type="text"> 
                                                    </div>
                                                                                                
                                                </div>

                                                <div class="col-sm-12 col-md-6">
                                                
                                                    <div class="form-group"> 
                                                    <label>Email Address</label>
                                                    <input class="form-control" placeholder="Enter your email address" 
                                                    name="email" required type="email"> 
                                                    </div>
                                                                                                
                                                </div>
                                                                                    
                                                <div class="col-sm-12 col-md-6">
                                                                                                
                                                        <div class="form-group"> 
                                                        <label>Password</label>
                                                        <input class="form-control" 
                                                        placeholder="Min 8 and Max 20 characters" 
                                                        name="password" required type="password"> 
                                                        </div>
                                                                                                
                                                </div>
                                                                                    
                                                <div class="col-sm-12 col-md-6">
                                                                                                
                                                        <div class="form-group"> 
                                                        <label>Password Confirmation</label>
                                                        <input class="form-control" 
                                                        placeholder="Re-type password again" 
                                                        name="confirmpassword" required type="password"> 
                                                        </div>
                                                                                                
                                                </div>
                                    
                                    
                                                <div class="col-sm-12 col-md-6">
                                                                                                
                                                    <label class="dtls" for="formFile" 
                                                    class="form-label">Business Permit</label>
                                                    <input style="border:12px 5px solid #2b7a78; padding:10px;" 
                                                    class="form-control" accept="application/pdf" type="file" 
                                                    name="permit" required id="formFile">
                                                                                                                                                                                
                                                                                                
                                                </div>
                                    
                                                <div class="col-sm-12 col-md-6">
                                                                                                
                                                    <label class="dtls" for="formFile" class="form-label">
                                                            Memorandum Of Agreement
                                                        </label>
                                                    <input style="border:12px 5px solid #2b7a78; padding:10px;" 
                                                    class="form-control" accept="application/pdf" type="file" 
                                                    name="moa" id="formFile" required>
                                                                                                                        
                                                </div> 
                                                
                                        <br>
                                    </div>
            <hr>
                                    <center>
                                    
                                                <input class="form-check-input" type="checkbox" 
                                                value="" id="flexCheckDefault" required>
                                    
                                                <span>I agree with <a href ="termsAndCondition.php">
                                                        Terms and Condition</a>
                                                    </span>
                                    
                                                </center>
<hr>
                                                <br>

                                    <div class ="row">

                                    
                                        <div class ="col">
                                        
                                            <a href ="index.php"style="width:100%;" class="btn btn-danger">
                                            Back</a>
                                        
                                        </div>
                                    
                                        <div class ="col">
                                        <button style="width:100%;" onclick="return val();" 
                                        type="submit" class="btn btn-success">
                                            Register</button>
                                    
                                        </div>
                                    
                                    </div>
                                    
                                </form>
                                
                            </div>
                            
                        </div>
            </div>
    </body>

    

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>