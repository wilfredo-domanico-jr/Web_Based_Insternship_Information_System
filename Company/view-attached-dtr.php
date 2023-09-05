

<?php 
include '../constants/settings.php'; 
include 'constants/check-login.php';

if ($user_online == "true") {
        if ($myrole == "Company") { 
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
  <link rel="icon" type="image/jpeg" href="../images/icon.jpg"/>
    <meta charset="utf-8">
    <title>View DTR - Company</title>
    <style media="screen">
      *{
        margin:0;
        padding:0;
      }
      embed{
        border: 2px solid black;
        height:100vh;
      }
    </style>
  </head>
  <body>
    <div class="div1">

    <?php
                require '../constants/db_config.php';
                $file_id = $_GET['id'];


                try {
                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                    
                $stmt = $conn->prepare("SELECT * FROM tbl_dtr WHERE id = :id");
                $stmt->bindParam(':id', $file_id);
                $stmt->execute();
                $result = $stmt->fetchAll();

                foreach($result as $row)
                {
                    
                    // $title = $row['internship_id'];
                    
                    ?>
                        <embed type="application/pdf" src="../files/intern/dtr/<?php echo $row['dtr_file']; ?>" width="100%" height="200vh">
                <?php
                }

                                    
                }catch(PDOException $e)
                {

                }

                ?>

    
      

    </div>

  </body>
</html>




