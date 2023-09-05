<?php 
include 'header.php'; 

echo '<title>Intern List - Adviser</title>';
?>             


<style>


#cos-application{
    background:#fff;
    color:#2b7a78;
  }

@media print{
.sb-sidenav-menu{

display:none;

}
.dont-print{
display:none;
}

.datatable-top{
display:none;
}

.datatable-info{
display:none;
}

.tbl-container{
border:none;
}

.dataTables_length{
display:none;
}



#datatablesSimple_filter{
display:none;
}

.dataTables_info{
display:none;
}

#datatablesSimple_paginate{
display:none;
}

.th-hide{
display:none;
}

.tbl-container{
margin-top:-60px;
background:none;
/* font-size:10px; */
font-size:1vw;
}

.changein-print{
background:none;
font-color:black;
}

::-webkit-scrollbar{
display:none;
}



}
</style>

<main style="background-color:var(--main-bg); height:100%;">  

<div class="container-fluid px-4">
<div class = "mt-4 mb-4 contact-us">

<h1 class="title-page">intern list</h1>
</div>
<div class="card mb-4">


<!-- <div class="card-header"> -->



<!-- <div class ="breadcrumb-n-btn">



<button type="button" class ="btn btn-success" 
data-toggle="modal" data-target="#exampleModal">
<i class="fas fa-plus-circle"></i>&nbsp;Add Student




</div>  -->

<!-- </div> -->
<div class="card-body">

<?php include 'constants/check_reply.php';?> 

<div class ="accesibility">

<div class="card-body">

<div class ="tbl-container">
<br>


<table id="datatablesSimple" 
class="display nowrap table-sm table-responsive" 
style="width:100%">
<thead class=" table table-primary">
<tr>
<th><center>COMPANY</th>
<th><center>DATE APPLIED</th>
<th><center>STATUS</th>
<th><center>ACCEPTANCE LETTER</th>
<th><center>APPROVE</th>
<th><center>DISAPPROVE</th>
</tr>
</thead>

<tbody>




<?php
require '../constants/db_config.php';
try {
$conn = new PDO("mysql:host=$servername;
dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$stmt = $conn->prepare("SELECT cos_internship.cancel, 
cos_internship.apply_id,cos_internship.company_id, 
cos_internship.date_apply,cos_internship.cos_status, 
cos_internship.intern,tbl_other_company.company_name 
FROM cos_internship 
INNER JOIN tbl_other_company 
ON cos_internship.company_id=tbl_other_company.member_no 
where cancel = 0 and cos_status = 'Pending'
ORDER BY cos_status DESC;");

// and cos_status = 'Pending'
$stmt->execute();
$result = $stmt->fetchAll();

foreach($result as $row) {
?>
<!-- Lagay dito -->

<tr>


<td><center><?php echo $row['company_name'];?></td>
<td><center><?php echo $row['date_apply'];?></td>


<td><center>

<span class="badge bg-primary">PENDING</span>

</td>

<td><center>

<a target = "_blank" 
href = "view-acceptance.php?id=<?php echo $row['apply_id']?>" 
class ="btn btn-primary">

<i class="fa-solid fa-eye">

</i>

</target>

</td>



<td>
<center>


<form action="app/cos-approve.php" method ="POST" >

<button type ="submit" class ="btn btn-success">

<i class="fa-solid fa-thumbs-up">

</i>

</button>


<input type="hidden" name="id" 
value="<?php echo $row['apply_id']; ?>">
<input type="hidden" name="intern" 
value="<?php echo $row['intern']; ?>">
<input type="hidden" name="company" 
value="<?php echo $row['company_id']; ?>">


</form>

</center>

</td>


<td>

<center>

<form action="app/cos-disapprove.php" method ="POST" >

<button type ="submit" class ="btn btn-danger">

<i class="fa-solid fa-thumbs-down">

</i>

</button>


<input type="hidden" name="id" 
value="<?php echo $row['apply_id']; ?>">
<input type="hidden" name="intern" 
value="<?php echo $row['intern']; ?>">


</form>

</center>
</td>


</tr>
<?php

{

}

}}catch(PDOException $e)
{

}

?>

</tbody>
</table>

</div>



</div>

</div>


</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" 
tabindex="-1" role="dialog" 
aria-labelledby="exampleModalLabel" 
aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content" 
style ="width: 700px;margin: 20px;margin-left:-100px;"">
<div class="modal-header header-modal-color">
<h5 class="modal-title text-light" 
id="exampleModalLabel">Add Account</h5>
<button type="button" class="close" 
data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body body-modal-color text-center">

<?php include 'constants/draw-intern.php';?> 

</div>
</div>
</div>
</div>
</main>

</div>
</div>

<?php include 'footer.php';?>

</body>
</html>