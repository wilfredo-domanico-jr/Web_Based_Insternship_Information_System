<div class ="stream-content">

 <?php
 require '../constants/db_config.php';

$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$company = $conn->prepare("SELECT * FROM tbl_other_company 
WHERE member_no ='$stud_company'");
$company->execute();
$company_result = $company->fetchAll();

foreach($company_result as $row){
?>
<!-- DETAILS NG COMPANY --->                                         
<center>
<?php

if ($row['logo'] == null) { 
echo '<img class ="internship-company" 
alt="default-image" title="no-image"  
src="./img/image.png"/></center>';
}else{
echo '<img class ="internship-company" 
alt="image" 
src="data:image/jpeg;base64,'.base64_encode($row['logo']).'"/>';	
}
?>

</center>    

<br><br>

<h4 class ="com-name text-center" 
style ="font-size:5vmin">
<?php echo $row['company_name']?>
</h4>

<p style="font-size:18px" 
class="text-light text-center">
<?php echo $row['company_type']?>
</p>
                                                                                
                                                                           
<hr>
<p style="font-size:18px" 
class="text-light text-center">
ABOUT
</p>

<div style ="margin:0 50px;text-align:justify">

    <?php echo $row['about']?>
    
</div>
<hr>

<!-- END OF DETAILS NG COMPANY --->    
                                    
                                    
<?php
}
?>




</div>