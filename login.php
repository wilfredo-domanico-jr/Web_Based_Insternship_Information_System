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
        <link rel="icon" type="image/jpeg" href="images/version 2 (green) - no bg.png"/>
        <title>WIIS - Log In</title>
        <!---Bootstrap-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
         <!--FONTAWESOME-->
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                background-color:transparent;
                /* background-color:red; */
                
            }
            
            #white{
                color:#2A2E34;
                font-size: 20px;
                font-family: Arial, Helvetica, sans-serif;
                text-shadow: #fff 3px 3px;
                text-transform: uppercase;
            }

            #school-img{
                display:flex;
                width:100%;
                height: 50px;
                justify-content: center;
            }

            .button-user .btn{
                width: 100px;
                margin-bottom: 4px;
            }
           #intern-form{
                /* background-color: #2a2e34; */
                height:auto;
                width:400px;
                border-radius: 20px;
                padding:40px;
                border:5px solid #badfe7;
                background-color:rgb(25,25,25,0.80)
                
           }


           .title{
             margin-top:-100px;
             color:white;
           } 

           .warning{
            margin-top:10px;
           }

        </style>


    </head>
    <body>
       
        
       
        <div id="intern-form">


      

        <section class ="title">

        <center><img src ="images/version 2 (green) - no bg.png" height="120px" width="120px" style="background:#fff;border-radius:100px; border:5px solid #badfe7" alt="logo"></center>
              

        <!-- <center>
          
        <img src ="images/icon.jpg" height="50px" width="50px" style="border-radius:100px;" alt="logo">
        <img src ="images/icon.jpg" height="50px" width="50px" style="border-radius:100px;" alt="logo">
        <img src ="images/icon.jpg" height="50px" width="50px" style="border-radius:100px;" alt="logo">
      
      
      </center> -->

        </section>

        <section class ="warning">

         <?php include 'constants/check_reply.php';?>
        </section>

        
                    <form name="frm" action="app/auth.php" method="POST" autocomplete="off">
                            
                            <div class="form-group">
                              <label style="color:#ffffff">Email address</label>
                              
                              <div class="input-group mb-3">
                              <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1" style="background-color:#badfe7;color:black;"><i class="fa-solid fa-envelope"></i></span>
                              </div>
                              <input type="text" class="form-control" name="email" required placeholder="Enter your email address" aria-label="Email" aria-describedby="basic-addon1">
                            </div>
                            
                            
                            
                            </div>
                           


                            <div class="form-group">
                              <label style="color:#ffffff">Password</label>
                              
                              <div class="input-group mb-3">
                              <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1" style="background-color:#badfe7;color:black;"><i class="fa-solid fa-lock"></i></span>
                              </div>
                              <input type="password" class="form-control" name="password" required placeholder="Enter your password" aria-label="Email" aria-describedby="basic-addon1">
                            </div>
                              
                            </div>
                            <a href="forgot_pass.php" style="color:#ffffff;">Forgot password?</a> <br><br>
                         
                            

                            <div class ="row">

                            <div class ="col">
                                  <button style="width:100%;" type="submit" class="btn btn-primary">Login</button>
                          
                             
                            </div>

                            <div class ="col">
                                <a href ="index.php" style="width:100%;" type="submit" class="btn btn-danger">Back</a>
                          
                            </div>

                            </div>
</form>

        </div>


    </body>

    

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>