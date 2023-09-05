<?php
// date_default_timezone_set('Africa/Dar_es_salaam');

if (isset($_POST['reg_mode'])) {
    checkemail();	
    }else{
    header("location:../");		
    }



    //CHeck kung already existed
function checkemail() {
	 
  
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
        header("location:../intern-register.php?r=0927");	
            
        }else{
        
            register_as_Intern();
        }
    }



    //-------------------------------------------------------

    function register_as_Intern() {
        
            require '../constants/db_config.php';
            require '../constants/uniques.php';
            
            $role = 'Intern';//6
            $member_no = 'INT'.get_rand_numbers(9).'';//7
            $fname = ucwords($_POST['fname']);//1
            $lname = ucwords($_POST['lname']);//2
            $email = $_POST['email'];//3
            $login = $_POST['password'];//5   
            // $login = md5($_POST['password']);//5  
            $ojt_hours = 0;
            $status = 1;
            $cetificate_stats = 0;
            $code = $_POST['code'];
            $delete = 0;
            $read = 0;

            $create_notif = "A New Account has been created!";
    
    
            
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $conn->prepare("INSERT INTO tbl_users (first_name, last_name, email,login, role, member_no,student_ojthours,status,cetificate_stats,stud_section) 
            VALUES (:fname,:lname,:email,:login,:role,:memberno,:student_ojthours,:status,:cetificate_stats,:stud_section)");


            $stmt2 = $conn->prepare("SELECT * FROM tbl_class where join_code = :code");
            $stmt2->bindParam(':code', $code);
            $stmt2->execute();
            $result2 = $stmt2->fetchAll();


            foreach($result2 as $row) {
                ?>
                        <!-- Lagay dito -->


                       <?php $class_unique = $row['class_unique'];?>

                        
                <?php
                
                {

                }
                
                }
            
            $cnt_code = count($result2);

            if($cnt_code == 0){header("location:../intern-register.php?r=1177");}

            else{
                $stmt->bindParam(':fname', $fname);
                $stmt->bindParam(':lname', $lname);
                $stmt->bindParam(':email', $email);
                $stmt->bindParam(':login', $login);
                $stmt->bindParam(':role', $role);
                $stmt->bindParam(':memberno', $member_no);
                $stmt->bindParam(':student_ojthours', $ojt_hours);
                $stmt->bindParam(':status', $status);
                $stmt->bindParam(':cetificate_stats', $cetificate_stats);
                $stmt->bindParam(':stud_section', $code);
                $stmt->execute(); 

                $stmt2 = $conn->prepare("INSERT INTO tbl_interview(title,class,msg_delete,msg_read) 
                VALUES (:title,:class,:msg_delete,:msg_read)");
                $stmt2->bindParam(':title',$create_notif);
                $stmt2->bindParam(':class',$class_unique);
                $stmt2->bindParam(':msg_delete',$delete);
                $stmt2->bindParam(':msg_read',$read);
                $stmt2->execute();   





                header("location:../login.php?r=1123");	
            }
            
            
    
            
        }

   
    

?>