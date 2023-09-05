<?php 
include 'constants/check-login.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password - Intern</title>

    


    <link rel="icon" type="image/jpeg" href="../images/version 2 (green) - no bg.png"/>
        

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
    background: url("img/body.jpg") no-repeat center center fixed; 
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
    max-width:400px;
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
    padding:15px 40px;
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
        <form class="signup-form" action="app/chng-password.php" method="POST" autocomplete="off">
            <!-- FORM HEADER --><br>

            <section class ="title">

<center><img src ="../images/version 2 (green) - no bg.png" height="120px" width="120px" style="border-radius:100px; border:5px solid #badfe7" alt="logo"></center>

</section>


            <div class="form-header">
                <h1>Change Password</h1>
            </div>
            <!-- FORM BODY -->
            <div class="form-body">
                <!-- First name & Last name -->

                    
                    <?php
                        require '../constants/db_config.php';
                        if (isset($_GET['r'])) {
                        $error_code = $_GET['r'];

                            try {
                            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                            
                            $stmt = $conn->prepare("SELECT * FROM tbl_alerts WHERE code = :errorcode");
                            $stmt->bindParam(':errorcode', $error_code);
                            $stmt->execute();
                            $result = $stmt->fetchAll();

                            foreach($result as $row)
                            {
                                
                            $description = $row['description'];
                            $type = $row['type'];
                            print '
                                <center>
                                <div style ="border-radius:0.25rem;color:#721c24;background-color:#f8d7da;padding:10px;border-color:#f5c6cb;">
                                
                                <div class="alert alert-'.$type.'">
                                '.$description.'
                                </div>
                                </div>
                                </center>
                            ';
                            }

                                            
                            }catch(PDOException $e)
                            {

                            }
                            

                        }

                        ?>



                
                    <div class="input-group">
                        <label>Old Password</label>
                        <input type="password" name="old_pass" required placholder="Enter old Password">
                    </div>
                    <div class="input-group">
                        <label>New Password</label>
                        <input type="password" name="new_pass" required placholder="Enter new Password">
                    </div>
                    <div class="input-group">
                        <label>Confirm Password</label>
                        <input type="password" name="confirm" required placholder="Confirm Password">
                    </div>
                
               


        <br>





                        </div>
                    </div>
                </div>
            <div class="form-footer">
                <a href ="index.php" style ="text-decoration:none;background-color:red;" class="btn">Back to Home</a>&nbsp;&nbsp;&nbsp;
                <button onclick =" return confirm('Confirm Change Password')"class="btn" type ="submit" name="reg_mode">Change Password</button>
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