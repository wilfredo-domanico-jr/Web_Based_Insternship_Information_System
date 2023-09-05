<html>
<head>
 
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>WIIS - View Attachment</title>
<link rel="shortcut icon" href="../images/ico/favicon.png">
<link href="../css/main.css" rel="stylesheet">
</head>

<body>
<?php
require '../constants/db_config.php';
include '../constants/check-login.php';
$file_id = $_GET['id'];

try {
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	
$stmt = $conn->prepare("SELECT * FROM tbl_apply");
$stmt->bindParam(':fileid', $file_id);
$stmt->execute();
$result = $stmt->fetchAll();

foreach($result as $row)
{
    $resume = $row['resume'];
	
	?>
<iframe  style="border:none;" src="../ViewerJS/#<?php echo 'data:application/pdf;base64,'.base64_encode($resume).'' ?>" height="100%" width="100%"></iframe>

<?php
}

					  
}catch(PDOException $e)
{

}

?>
</body>

</html>

