<?php 
session_start();
$error = array();

require "app/forgot.php";

	if(!$con = mysqli_connect("localhost","u323007312_root","4JrEYkbzw?+","u323007312_wiis")){

		die("could not connect");
	}

	$mode = "enter_email";
	if(isset($_GET['mode'])){
		$mode = $_GET['mode'];
	}

	//something is posted
	if(count($_POST) > 0){

		switch ($mode) {
			case 'enter_email':
				// code...
				$email = $_POST['email'];
				//validate email
				if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
					$error[] = "Please enter a valid email";
				}elseif(!valid_email($email)){
					$error[] = "That email was not found";
				}else{
						// If tama yung email
					$_SESSION['forgot_pass']['email'] = $email;

					//Mag send ng email code

					$subject = "Password Recovery Code";


					$message ="Password Recovery";
					send_email($email,$subject,);
					header("Location: forgot_pass.php?mode=enter_code");
					die;
				}
				break;

			case 'enter_code':
				// code...
				$code = $_POST['code'];
				$result = is_code_correct($code);

				if($result == "the code is correct"){

					$_SESSION['forgot_pass']['code'] = $code;
					header("Location: forgot_pass.php?mode=enter_password");
					die;
				}else{
					$error[] = $result;
				}
				break;

			case 'enter_password':
				// code...
				$password = $_POST['password'];
				$password2 = $_POST['password2'];

				if($password !== $password2){
					$error[] = "Passwords do not match";
				}elseif(!isset($_SESSION['forgot_pass']['email']) || !isset($_SESSION['forgot_pass']['code'])){
					
					//PAG PUNTA SA LOGIN IF MAG MATCH YUNG PASSWORD
					header("Location: forgot_pass.php");
					die;
				}else{
					
					save_password($password);
					if(isset($_SESSION['forgot_pass'])){
						unset($_SESSION['forgot_pass']);
					}

					header("Location: login.php?r=pass_recovery");
					die;
				}
				break;
			
			default:
				// code...
				break;
		}
	}

	function send_email($email){
		
		global $con;

		$expire = time() + (60 * 1);
		$code = rand(10000,99999);
		$email = addslashes($email);

		$query = "insert into codes (email,code,expire) value ('$email','$code','$expire')";
		mysqli_query($con,$query);

		//send email here sa gmail ng CODE
		send_mail($email,'Password reset',"Your code is " . $code);
	}
	
	function save_password($password){
		
		global $con;
		//PAG HASH NG PASSWORD
		// $password = password_hash($password, PASSWORD_DEFAULT);
		// $password = $password;
		$email = addslashes($_SESSION['forgot_pass']['email']);

		$query = "update tbl_users set login = '$password' where email = '$email' limit 1";
		mysqli_query($con,$query);

	}
	
	function valid_email($email){
		global $con;

		$email = addslashes($email);

		$query = "select * from tbl_users where email = '$email' limit 1";		
		$result = mysqli_query($con,$query);
		if($result){
			if(mysqli_num_rows($result) > 0)
			{
				return true;
 			}
		}

		return false;

	}

	function is_code_correct($code){
		global $con;

		$code = addslashes($code);
		$expire = time();
		$email = addslashes($_SESSION['forgot_pass']['email']);

		$query = "select * from codes where code = '$code' && email = '$email' order by id desc limit 1";
		$result = mysqli_query($con,$query);
		if($result){
			if(mysqli_num_rows($result) > 0)
			{
				$row = mysqli_fetch_assoc($result);
				if($row['expire'] > $expire){

					return "the code is correct";
				}else{
					return "the code is expired";
				}
			}else{
				return "the code is incorrect";
			}
		}

		return "the code is incorrect";
	}

	
?>

<!DOCTYPE html>
<html>
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


		   .white-txt{
			   color:#ffffff;
		   }
        </style>


    </head>
<body>


		<?php 

			switch ($mode) {
				case 'enter_email':
					// code...
					?>

					<div id ="intern-form">

					<section class ="title">

					<center><img src ="images/version 2 (green) - no bg.png" height="120px" width="120px" style="background:#fff;border-radius:100px; border:5px solid #badfe7" alt="logo"></center>
					
					</section>
					<form method="post" action="forgot_pass.php?mode=enter_email"> 
							<h1 class ="white-txt">Forgot Password</h1>
							<label class ="white-txt">Enter your email below</label>

							<div class="input-group mb-3">
                              <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1" style="background-color:#badfe7;color:black;"><i class="fa-solid fa-envelope"></i></span>
                              </div>
                              <input type="text" class="form-control" name="email" required placeholder="Enter your email address" aria-label="Email" aria-describedby="basic-addon1">
							 
							
							
							</div>
							<span style="font-size: 12px;color:red;">
							<?php 
								foreach ($error as $err) {
									// code...
									echo $err . "<br>";
								}
							?>
							</span>
							
							<br style="clear: both;">
							

							<div class ="row">

								<div class ="col">

									<a class ="btn btn-success" style="width:100%" href="login.php">Back to Login</a>
								</div>
									<div class ="col">
											
											<input style="width:100%" class ="btn btn-primary" type="submit" value="Next">
									</div>

							</div>
						</form>
					</div>
						
					<?php				
					break;

				case 'enter_code':
					// code...
					?>

					<div id ="intern-form">

					<section class ="title">

					<center><img src ="images/version 2 (green) - no bg.png" height="120px" width="120px" style="background:#fff;border-radius:100px; border:5px solid #badfe7" alt="logo"></center>

					</section>
						<form method="post" action="forgot_pass.php?mode=enter_code"> 
							<h1 class ="white-txt">Forgot Password</h1>
							<label class ="white-txt">Enter your the code sent to your email</label>
							
								<input style="text-align:center;" class="form-control" type="text" name="code" placeholder="12345">
								<span style="font-size: 12px;color:red;">
							<?php 
								foreach ($error as $err) {
									// code...
									echo $err . "<br>";
								}
							?>
							</span>
							<br style="clear: both;">

							<div class ="row">

								<div class ="col">
								<a href="forgot_pass.php">
									<input style="width:100%;"class ="btn btn-primary"type="button" value="Start Over">
									</a>
								</div>
								
								<div class ="col">
										<input style="width:100%;" class ="btn btn-success"type="submit" value="Next" style="float: right;">
									
									
								</div>
							</div>
							<br>
							<div>
								
							<center>
								<a style="color:#ffffff;" class ="btn" href="login.php">Back to Login</a></div>

							</center>
						</form>

							</div>
					<?php
					break;

				case 'enter_password':
					// code...
					?>

				<div id ="intern-form">

				<section class ="title">

				<center><img src ="images/version 2 (green) - no bg.png" height="120px" width="120px" style="background:#fff;border-radius:100px; border:5px solid #badfe7" alt="logo"></center>

				</section>
						<form method="post" action="forgot_pass.php?mode=enter_password"> 
							<h1 class ="white-txt">Forgot Password</h1>
							<span class ="white-txt">Enter your new password</span><br>
							<span style="font-size: 12px;color:red;">
							<?php 
								foreach ($error as $err) {
									// code...
									echo $err . "";
								}
							?>
							</span>

							<input class="form-control" type="text" name="password" placeholder="Password"><br>
							<span style="font-size: 12px;color:red;">
							<?php 
								foreach ($error as $err) {
									// code...
									echo $err . "<br>";
								}
							?>
							</span>
							
							<input class="form-control" type="text" name="password2" placeholder="Retype Password"><br>
							<br style="clear: both;">

							

							<div class ="row">
								<div class ="col">
									
									<a href="forgot_pass.php">
										<input style="width:100%;" class ="btn btn-primary"type="button" value="Start Over">
									</a>
								</div>
								
								<div class ="col">
									
									<input style ="width:100%;" class ="btn btn-success" type="submit" value="Next" style="float: right;">
								</div>
							</div>

							<br><br>
							<div>
								
							<center>
								<a style="color:#ffffff;" href="login.php?r=succ">Back to Login</a></div>

							</center>
						</form>

							</div>
					<?php
					break;
				
				default:
					// code...
					break;
			}

		?>


</body>
</html>