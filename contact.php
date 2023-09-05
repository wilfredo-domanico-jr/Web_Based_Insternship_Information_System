<!DOCTYPE html>
<html lang="en">
<head>
	<title>Contact Support - WIIS</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<!-- <link rel="icon" type="image/png" href="Contact/images/icons/favicon.ico"/>ICON TO AHH
 -->
 <!--FONTAWESOME-->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
       
 <link rel="icon" type="image/jpeg" href="images/icon.jpg"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Contact/vendor/bootstrap/css/bootstrap.min.css?v=<?php echo time();?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Contact/fonts/font-awesome-4.7.0/css/font-awesome.min.css?v=<?php echo time();?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Contact/vendor/animate/animate.css?v=<?php echo time();?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Contact/vendor/css-hamburgers/hamburgers.min.css?v=<?php echo time();?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Contact/vendor/select2/select2.min.css?v=<?php echo time();?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Contact/css/util.css?v=<?php echo time();?>">
	<link rel="stylesheet" type="text/css" href="Contact/css/main.css?v=<?php echo time();?>">
<!--===============================================================================================-->
</head>
<body>

	<div class="contact1">
		<div class="container-contact1">
			<div class="contact1-pic js-tilt" data-tilt>
				<img src="Contact/images/icon.jpg" alt="IMG">

				<span class="contact1-form-title">
				<h1><center><i class="fas fa-envelope"></i> WIIS</center></h1>
				</span>
				
			</div>

			<form class="contact1-form validate-form" action="email.php" method="post">
				<span class="contact1-form-title">
					Send Us A Message!
				</span>
 
				<div class="wrap-input1 validate-input" data-validate = "Name is required">
					<input class="input1" type="text" name="name" placeholder="Name">
					<span class="shadow-input1"></span>
				</div>

				<div class="wrap-input1 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<input class="input1" type="email" name="email" placeholder="Email">
					<span class="shadow-input1"></span>
				</div>

				<div class="wrap-input1 validate-input" data-validate = "Subject is required">
					<input class="input1" type="text" name="subject" placeholder="Subject">
					<span class="shadow-input1"></span>
				</div>

				<div class="wrap-input1 validate-input" data-validate = "Message is required">
					<textarea class="input1" name="message" placeholder="Message"></textarea>
					<span class="shadow-input1"></span>
				</div>

				<div class="container-contact1-form-btn">
					<button class="contact1-form-btn" type="submit" name="send">
						<span>
							Send Email
							<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
						</span>
					</button>
				</div>
			</form>
		</div>
	</div>




<!--===============================================================================================-->
	<script src="Contact/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="Contact/vendor/bootstrap/js/popper.js"></script>
	<script src="Contact/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="Contact/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="Contact/vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

<!--===============================================================================================-->
	<script src="Contact/js/main.js"></script>

</body>
</html>
