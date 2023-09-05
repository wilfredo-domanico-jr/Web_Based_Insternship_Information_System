<?php

        require '../constants/db_config.php';
        require '../constants/uniques.php';
        $member_no = 'COM'.get_rand_numbers(5).''; 
        $company_name = ucwords($_POST['company_name']);
        $company_type = ucwords($_POST['company_type']);
        
        $logo = addslashes(file_get_contents($_FILES['logo']['tmp_name']));
        $about = $_POST['about'];

        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, 
        $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare("INSERT INTO tbl_other_company(company_name, 
        company_type,logo,about,member_no) 
        VALUES ('$company_name','$company_type','$logo','$about','$member_no')");
        
        $stmt->execute();

        header("location:../rep-cos.php?r=8521");	

?>