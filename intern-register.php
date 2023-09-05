<?php 
include 'constants/settings.php'; 
include 'constants/check-login.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> WIIS</title>

    


    <link rel="icon" type="image/jpeg" href="images/version 2 (green) - no bg.png"/>
        

</head>

<style>
 
 
 @import url('https://fonts.googleapis.com/css?family=Roboto');

* {
    margin:0;
    font-family: "Roboto", sans-serif;
    box-sizing: border-box;
}

html, body {
    height:100%; 
     
}

html{
    background: url("images/body.jpg") no-repeat center center fixed; 
          -webkit-background-size: cover;
          -moz-background-size: cover;
          -o-background-size: cover;
          background-size: cover;
}

#registration-page {
    height:100%;
    /* background:#78a7ba;  */
    display:flex;
    justify-content: center;
    align-items: center;
    overflow:scroll;
}

.signup-form  {
    flex:1;
    max-width:600px;
    border-radius: 10px;
    background-color: #EFF0F1;
    border: 1px solid #999;
    margin-top: auto;
    margin-bottom:  auto;
  }
  
/* FORM HEADER */
.form-header {
    padding:15px 0;
    border-bottom:1px solid #cccccc;
}

.form-header h1 {
    font-size: 28px;
    text-align:center;
    color:#666;
}

/* FORM BODY */
.form-body {
    background:white;
    padding:5px 10px;
}

.row {
    display:flex; 
}
  
.input-group {
    flex:1;  
    display:flex;
    flex-direction:column; 
    margin:10px 5px;
}

/* FORM BODY - Gender & Hobbies */
.radio-group, .checkbox-group {
    display:flex;
  }
  
  .radio-group div, .checkbox-group div {
    flex:1;
  }
  
  .radio-group label, .checkbox-group label  {
    color:#666;
    cursor:pointer;
  }
/* FORM BODY - Source of Income & Income */
  .range-group {
    display:flex;
  }

  .range-group input {
      flex:1;
  }

  .range-group label {
    margin-left:10px;
    background-color: #1BBA93;
    color:white;
    border-radius: 5px;
    padding:5px;
    font-size:17px;
    text-align:center;
  }

/* MOBILE VIEW */
@media only screen and (max-width: 500px) {
    .row{
      flex-direction:column; 
    }

    .btn {
        flex:1;
    }
}


/* FORM FOTTER */
.form-footer {
    display:flex;
    justify-content: center;
    padding:10px;

}

.btn {
    padding:10px 20px;
    background-color: #1BBA93;
    font-size:17px;
    border:none;
    border-radius:5px;
    color:#bcf5e7;
    cursor:pointer;
 }

 /* INPUT*/

 label {
  color:#000000;
  font-size: 17px;
  font-weight: 500;
}

input[type="text"],
input[type="email"] ,
input[type="password"],
/* input[type="file"], */
input[type="number"],
select,
textarea  {
width:100%;

font-size: 18px;
height: 34px;
padding-left: 10px;
padding-right: 10px;
color: #666;
border: 1px solid #d6d6d6;
border-radius: 4px;
background: white;
outline: none;
}


textarea {
  resize: none;
  height:100px;
}
</style>

<body>
    <section id="registration-page">
        <form class="signup-form" name="frm" action="app/add_intern.php" method="POST" autocomplete="off">
            <!-- FORM HEADER --><br>

            <section class ="title">

<center><img src ="images/version 2 (green) - no bg.png" height="120px" width="120px" style="border-radius:100px; border:5px solid #badfe7" alt="logo"></center>

</section>


            <div class="form-header">
                <h1>Create Your Account</h1>
            </div>
            <!-- FORM BODY -->
            <div class="form-body">
                <!-- First name & Last name -->


                <?php include 'constants/check_reply.php';?>



                <div class="row">
                    <div class="input-group">
                        <label>First name </label>
                        <input type="text" name="fname" required placholder="Enter your first name">
                    </div>
                    <div class="input-group">
                        <label>Last name</label>
                        <input type="text" name="lname" required placholder="Enter your last name">
                    </div>
                </div>
                <div class="row">
                    <div class="input-group">
                        <label>Email: </label>
                        <input type="email" name="email" required placholder="Enter your email address">
                    </div> 
                    <div class="input-group">
                        <label>Class Code:</label>
                        <input type="text" name="code" required placholder="Enter Code">
                    </div>
                </div>
                <div class="row">
                            <div class="input-group">
                                <label>Password </label>
                                <input type="password" required name="password" placholder="Enter your your password">
                            </div>
                            <div class="input-group">
                                <label>Confirm Password</label>
                                <input type="password" required name="confirmPass" placholder="Enter your password again">
                            </div><br>

                </div>

        <center>

            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" required>

            <span>I agree with <a href ="termsAndCondition.php">Terms and Condition</a></span>

        </center>

        <br>





                        </div>
                    </div>
                </div>
            <div class="form-footer">
                <a href ="user-select.php" style ="text-decoration:none;background-color:red;" class="btn">Back</a>&nbsp;
                <button class="btn" type ="submit" name="reg_mode">Create</button>
            </div>
        </form>
    </section>

    <script> 
        const changeSliderValue = (value) => {
            document.getElementById("rangeSliderLabel").innerText = value + " K";
        }
    </script>

</body>

</html>