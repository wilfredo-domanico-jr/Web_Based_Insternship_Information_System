<?php
	require '../constants/db_config.php';
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$email = $_POST['email'];
	
    $stmt = $conn->prepare("SELECT * FROM tbl_users WHERE email = :email");
	$stmt->bindParam(':email', $email);
    $stmt->execute();
    $result = $stmt->fetchAll();
	$records = count($result); 
	
	
    //PAG CHECK NG MOA AT PERMIT

    $permit= $_FILES['permit']['name'];
    $permit_type=$_FILES['permit']['type'];
    $permit_size=$_FILES['permit']['size'];
    $permit_tem_loc=$_FILES['permit']['tmp_name']; 

    $moa=$_FILES['moa']['name'];
    $moa_type=$_FILES['moa']['type'];
    $moa_size=$_FILES['moa']['size'];
    $moa_tem_loc=$_FILES['moa']['tmp_name'];

    
	 
	
	if ($records > 0) {header("location:../signup.php?r=0927");}
    
    else{
        
       


       require '../constants/db_config.php';
       require '../constants/uniques.php';

            
        

       $moa_store="../files/company_files/moa/".$moa;
       move_uploaded_file($moa_tem_loc,$moa_store); 



       $permit_store="../files/company_files/permit/".$permit;
       move_uploaded_file($permit_tem_loc,$permit_store);
       
       $role = 'Company';
       $last_login = date('d-m-Y h:m A [T P]');
       $comp_no = 'CM'.get_rand_numbers(9).'';
       $cmpn_code = 'COMPCODE'.get_rand_numbers(12).'';
       $cname = ucwords($_POST['company']);
       $ctype = ucwords($_POST['type']);
       $email = $_POST['email'];
       $login = $_POST['password'];
       $status = 0; 
       $new_acc = 1; 

        $create_notif = "Member No.:  <b>'$comp_no'</b> New Industry Account has been Created!";
        $admin = "Admin";
        $delete = 0;


        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare("INSERT INTO tbl_users (first_name, title, email, last_login, login, role, member_no,cmpn_code,status,moa,permit,new_acc) 
        VALUES (:fname, :title, :email, :lastlogin, :login, :role, :memberno,:cmpn_code,:status,:moa,:permit,:new_acc)");
        $stmt->bindParam(':fname', $cname);
        $stmt->bindParam(':title', $ctype);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':lastlogin', $last_login);
        $stmt->bindParam(':login', $login);
        $stmt->bindParam(':role', $role);
        $stmt->bindParam(':memberno', $comp_no);
        $stmt->bindParam(':cmpn_code', $cmpn_code);
        $stmt->bindParam(':status', $status);
        $stmt->bindParam(':moa', $moa);
        $stmt->bindParam(':permit', $permit);
        $stmt->bindParam(':new_acc', $new_acc);
        $stmt->execute();


        $stmt2 = $conn->prepare("INSERT INTO tbl_interview(title,class,msg_delete) 
        VALUES (:title,:class,:msg_delete)");
        $stmt2->bindParam(':title',$create_notif);
        $stmt2->bindParam(':class',$admin);
        $stmt2->bindParam(':msg_delete',$delete);
        $stmt2->execute();   


        header("location:../login.php?r=1123");		
        
            // register_as_company();
    
    
    }



//CHeck kung already existed
function checkemail() {
	

					  
	}




function register_as_company() {

            //PAG CHECK NG MOA AT PERMIT
            $moa=$_FILES['moa']['name'];
            $moa_type=$_FILES['moa']['type'];
            $moa_size=$_FILES['moa']['size'];
            $moa_tem_loc=$_FILES['moa']['tmp_name'];

                
                

            $permit=$_FILES['permit']['name'];
            $permit_type=$_FILES['permit']['type'];
            $permit_size=$_FILES['permit']['size'];
            $permit_tem_loc=$_FILES['permit']['tmp_name'];

       //PAG TAKE NG PDF ONLY
            // $allowedExtention = 'application/pdf'; 

            // if($moa_type != $allowedExtention || $permit_type != $allowedExtention){
            //         header("location:../signup.php?r=3479&i=$moa_type&p=$permit_type");	
            // }

            // else{    
                
                
                $moa_store="../../files/company_files/moa/".$moa;
                move_uploaded_file($moa_tem_loc,$moa_store); 



                $permit_store="../../files/company_files/permit/".$permit;
                move_uploaded_file($permit_tem_loc,$permit_store);


                require '../constants/db_config.php';
                require '../constants/uniques.php';
                
                $role = 'Company';
                $last_login = date('d-m-Y h:m A [T P]');
                $comp_no = 'CM'.get_rand_numbers(9).'';
                $cmpn_code = 'COMPCODE'.get_rand_numbers(12).'';
                $cname = ucwords($_POST['company']);
                $ctype = ucwords($_POST['type']);
                $email = $_POST['email'];
                $login = $_POST['password'];
                $status = 1; 



            // }   



    //-----------

    $create_notif = "Member No.:  <b>'$comp_no'</b> New Industry Account has been Created!";
    $admin = "Admin";
    $delete = 0;

	
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("INSERT INTO tbl_users (first_name, title, email, last_login, login, role, member_no,cmpn_code,status,moa,permit) 
	VALUES (:fname, :title, :email, :lastlogin, :login, :role, :memberno,:cmpn_code,:status,:moa,:permit)");
    $stmt->bindParam(':fname', $cname);
    $stmt->bindParam(':title', $ctype);
    $stmt->bindParam(':email', $email);
	$stmt->bindParam(':lastlogin', $last_login);
    $stmt->bindParam(':login', $login);
    $stmt->bindParam(':role', $role);
	$stmt->bindParam(':memberno', $comp_no);
	$stmt->bindParam(':cmpn_code', $cmpn_code);
	$stmt->bindParam(':status', $status);
	$stmt->bindParam(':moa', $moa);
	$stmt->bindParam(':permit', $permit);
    $stmt->execute();
	// header("location:../register.php?p=Employer&r=1123");
    
    
    $stmt2 = $conn->prepare("INSERT INTO tbl_interview(title,class,msg_delete) 
    VALUES (:title,:class,:msg_delete)");
    $stmt2->bindParam(':title',$create_notif);
    $stmt2->bindParam(':class',$admin);
    $stmt2->bindParam(':msg_delete',$delete);
    $stmt2->execute();   


    header("location:../login.php?r=1123");				  
	
	
}




?>