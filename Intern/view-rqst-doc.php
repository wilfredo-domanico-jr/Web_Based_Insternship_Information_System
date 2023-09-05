<?php 
include '../constants/settings.php'; 
include 'constants/check-login.php';

if ($user_online == "true") {
        if ($myrole == "Intern") { 
        }else{
        header("location:../");		
        }
}

else{
header("location:../");	
}

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    
    <link rel="icon" type="image/jpeg" href="../images/icon.jpg"/>
    <title>View Request Document - Intern</title>
    <style media="screen">
      embed{
        border: 2px solid black;
        height:100vh;
      }
      *{
        margin:0;
        padding:0;
      }
    </style>
  </head>
  <body>
    <div class="div1">

    <?php
                require '../constants/db_config.php';
                $file_id = $_GET['cntrol'];


                try {
                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                    
                $stmt = $conn->prepare("SELECT * FROM tbl_docreq WHERE cntrl_no = :fileid AND intern_id = '$myid'");
                $stmt->bindParam(':fileid', $file_id);
                $stmt->execute();
                $result = $stmt->fetchAll();

                foreach($result as $row)
                {
                    
                    // $title = $row['internship_id'];
                    
                    ?>
                        <embed type="application/pdf" src="../files/intern/request/<?php echo $row['files']; ?>" width="100%" height="200vh">
                <?php
                }

                                    
                }catch(PDOException $e)
                {

                }

                ?>

    
      

    </div>

  </body>
</html>
