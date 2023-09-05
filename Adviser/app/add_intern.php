<?php
// date_default_timezone_set('Africa/Dar_es_salaam');

if (isset($_POST['reg_mode'])) {
    checkemail();	
    }else{
    header("location:../");		
    }



    //CHeck kung already existed
function checkemail() {
	 
    try { 
        require '../constants/db_config.php';
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $email = $_POST['email'];
        
        $stmt = $conn->prepare("SELECT * FROM tbl_users WHERE email = :email");
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        $result = $stmt->fetchAll();
        $records = count($result);
        
        
            $role = "Intern";	 
        
        if ($records > 0) {
        header("location:../interns.php?r=0927");	
            
        }else{
        
            register_as_Intern();
        }
        
            
        
                          
        }catch(PDOException $e)
        {
        header("location:../interns.php?r=4568");
        }
    }



    //-------------------------------------------------------

    function register_as_Intern() {
        try {
            require '../constants/db_config.php';
            require '../constants/uniques.php'; 
            
            $role = 'Intern';//6
             
            $stud_no = $_POST['stud_no'];//9
            $last_login = date('d-m-Y h:m A [T P]');//4
            $member_no = 'INT'.get_rand_numbers(9).'';//7
            $fname = ucwords($_POST['fname']);//1
            $lname = ucwords($_POST['lname']);//2
            $email = $_POST['email'];//3
            $adv_id = $_POST['adv_id'];//9 
            $login = md5($_POST['password']);//5  
            $ojt_hours = 0;//5  
            $status = 0;
            $cetificate_stats = 0;
    
    
            
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $conn->prepare("INSERT INTO tbl_users (first_name, last_name, email, last_login, login, role, member_no,stud_num,ojr_prof,student_ojthours,status,cetificate_stats) 
            VALUES (:fname,:lname,:email,:lastlogin, :login, :role, :memberno,:stud_no,:adv_id,:student_ojthours,:status,:cetificate_stats)");
            $stmt->bindParam(':fname', $fname);
            $stmt->bindParam(':lname', $lname);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':lastlogin', $last_login);
            $stmt->bindParam(':login', $login);
            $stmt->bindParam(':role', $role);
            $stmt->bindParam(':memberno', $member_no);
            $stmt->bindParam(':stud_no', $stud_no);
            $stmt->bindParam(':adv_id', $adv_id);
            $stmt->bindParam(':student_ojthours', $ojt_hours);
            $stmt->bindParam(':status', $status);
            $stmt->bindParam(':cetificate_stats', $cetificate_stats);
            $stmt->execute();
            header("location:../interns.php");	
            }
            
            catch(PDOException $e)
            {
                
            header("location:../rep-advisasder.php");
            }	
            
        }

   
    

?>