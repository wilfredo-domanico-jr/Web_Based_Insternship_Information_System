<?php


use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\Exception;
use Phppot\DataSource;
use PhpOffice\PhpSpreadsheet\Reader\Xlsx;

require_once '../DataSource.php';
$db = new DataSource();
$conn = $db->getConnection();
require_once ('../vendor/autoload.php');
require '../constants/uniques.php';
if (isset($_POST["import"])) {

    $allowedFileType = [
        'application/vnd.ms-excel',
        'text/xls',
        'text/xlsx',
        'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'
    ];

    if (in_array($_FILES["file"]["type"], $allowedFileType)) {

        $targetPath = '../uploads/' . $_FILES['file']['name'];
        move_uploaded_file($_FILES['file']['tmp_name'], $targetPath);

        $Reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();

        $spreadSheet = $Reader->load($targetPath);
        $excelSheet = $spreadSheet->getActiveSheet();
        $spreadSheetAry = $excelSheet->toArray();
        $sheetCount = count($spreadSheetAry);

        for ($i = 1; $i <= $sheetCount; $i ++) {

            //GET RANDOM LETTERS

            $subject = "Your Account has been Created";
            
            $pass = uniqid();

            $ojt_hours = 0;
            $status = 0;
            $cetificate_stats = 0;
            
            $member_no = 'INT'.get_rand_numbers(9).'';//7


            $first_name = "";
            if (isset($spreadSheetAry[$i][0])) {
                $first_name = mysqli_real_escape_string($conn, $spreadSheetAry[$i][0]);
            }
            $last_name = "";
            if (isset($spreadSheetAry[$i][1])) {
                $last_name = mysqli_real_escape_string($conn, $spreadSheetAry[$i][1]);
            }

			$gender = "";
            if (isset($spreadSheetAry[$i][2])) {
                $gender = mysqli_real_escape_string($conn, $spreadSheetAry[$i][2]);
            }

			$email = "";
            if (isset($spreadSheetAry[$i][3])) {
                $email = mysqli_real_escape_string($conn, $spreadSheetAry[$i][3]);
            }
			$phone = "";
            if (isset($spreadSheetAry[$i][4])) {
                $phone = mysqli_real_escape_string($conn, $spreadSheetAry[$i][4]);
            }
			$stud_num = "";
            if (isset($spreadSheetAry[$i][5])) {
                $stud_num = mysqli_real_escape_string($conn, $spreadSheetAry[$i][5]);
            }

			$role = "";
            if (isset($spreadSheetAry[$i][6])) {
                $role = mysqli_real_escape_string($conn, $spreadSheetAry[$i][6]);
            }
			$stud_section = "";
            if (isset($spreadSheetAry[$i][7])) {
                $stud_section = mysqli_real_escape_string($conn, $spreadSheetAry[$i][7]);
            }

            $school_year = "";
            if (isset($spreadSheetAry[$i][8])) {
                $school_year = mysqli_real_escape_string($conn, $spreadSheetAry[$i][8]);
            }



            if (! empty($first_name) || ! empty($last_name) ||
			 !empty($gender)  || !empty($email)
			 || ! empty($phone) || ! empty($stud_num) ||
			 ! empty($role) || ! empty($stud_section) ||  ! empty($school_year)
			 
			 ) {
                $query = "insert into tbl_users(first_name,last_name,
                gender,email,phone,stud_num,role,stud_section,
                member_no,school_year,student_ojthours,status,cetificate_stats,login) 
                values(?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
                //String , String, String dagdagan pa
				$paramType = "ssssssssssssss";
                $paramArray = array(
                    $first_name,
                    $last_name,
					$gender,
					$email,
					$phone,
					$stud_num,
					$role,
					$stud_section,
                    $member_no,
                    $school_year,
                    $ojt_hours,
                    $status,
                    $cetificate_stats,
                    $pass

                );
                $insertId = $db->insert($query, $paramType, $paramArray);
                // $query = "insert into tbl_info(name,description) values('" . $name . "','" . $description . "')";
                // $result = mysqli_query($conn, $query);

                //SEND NG EMAIL SA INTERN

                $message ="


                    Hi Intern, welcome to the Web-based 
                    Intership Information System of the 
                    Scholarship, Placements and Alumni 
                    Relation Division (SPARD).<br>
                    We would like to give you an account
                     but to access your account information,
                      you will need the following information: 
                        
                    <br><br>Username:<br>".$email."
                    
                    <br><br>Password:<br>".$pass."

                    <br><br>Login link:<br><br>

                    <a href ='wiis-qcu.online/login.php'>Click Here!!</a>
                ";

                send_mail($email,$subject,$message);

                header("location:../rep-intern.php?r=3447");

                //-------------------------

            }
        }//END OF FOR LOOP
    } else {
        $type = "error";
        $message = "Invalid File Type. Upload Excel File.";
    }
}



function send_mail($email,$subject,$message) {

require '../PHPMailer/src/Exception.php';
require '../PHPMailer/src/PHPMailer.php';
require '../PHPMailer/src/SMTP.php';


$mail = new PHPMailer();
$mail->IsSMTP();

    

    $mail->SMTPDebug  = 0;  
    $mail->SMTPAuth   = TRUE;
    $mail->SMTPSecure = "tls";
    $mail->Port       = 587;
    $mail->Host       = "smtp.gmail.com";
    //$mail->Host       = "smtp.mail.yahoo.com";
    $mail->Username   = "wiis5upport@gmail.com";
    $mail->Password   = "ftarudbubexcspgv";

    $mail->IsHTML(true);
    $mail->AddAddress($email, "Hello Intern");
    $mail->SetFrom("wiis5upport@gmail.com", "WIIS Support");
    //$mail->AddReplyTo("reply-to-email", "reply-to-name");
    //$mail->AddCC("cc-recipient-email", "cc-recipient-name");
    $mail->Subject = $subject;
    $content = $message;

    $mail->MsgHTML($content); 
    if(!$mail->Send()) {
    //echo "Error while sending Email.";
    //echo "<pre>";
    //var_dump($mail);
    return false;
    } else {
    //echo "Email sent successfully";
    return true;
    }


}

?>