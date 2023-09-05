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
            $status = 0;

            $member_no = 'ADV-'.get_rand_numbers(9).''; 

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

			$role = "";
            if (isset($spreadSheetAry[$i][5])) {
                $role = mysqli_real_escape_string($conn, $spreadSheetAry[$i][5]);
            }



            if (! empty($first_name) || ! empty($last_name) ||
			 !empty($gender)  || !empty($email)
			 || ! empty($phone) || ! empty($role)
			 
			 ) {
                $query = "insert into tbl_users(member_no,first_name,last_name,
                gender,email,phone,role,status,login) 
                values(?,?,?,?,?,?,?,?,?)";
                //String , String, String dagdagan pa
				$paramType = "sssssssss";
                $paramArray = array(
                    $member_no,
                    $first_name,
                    $last_name,
					$gender,
					$email,
					$phone,
					$role,
                    $status,
                    $pass

                );
                $insertId = $db->insert($query, $paramType, $paramArray);
                // $query = "insert into tbl_info(name,description) values('" . $name . "','" . $description . "')";
                // $result = mysqli_query($conn, $query);

                 //SEND NG EMAIL SA INTERN

                 $message ="


                
                 Hi Adviser, welcome to the Web-based 
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


                header("location:../rep-adviser.php?r=3447");
            }
        }
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

// $message ="


//     Here's your Account Details:

//     Email:".$email."
    
//     Password:".$pass."
// ";


    

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