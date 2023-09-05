<?php



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

            $class_status = 0;

            $section = "";
            if (isset($spreadSheetAry[$i][0])) {
                $section = mysqli_real_escape_string($conn, $spreadSheetAry[$i][0]);
            }

            
            $course_code = "";
            if (isset($spreadSheetAry[$i][1])) {
                $course_code = mysqli_real_escape_string($conn, $spreadSheetAry[$i][1]);
            }
            

			$adviser_id = "";
            if (isset($spreadSheetAry[$i][2])) {
                $adviser_id = mysqli_real_escape_string($conn, $spreadSheetAry[$i][2]);
            }

			$schedule = "";
            if (isset($spreadSheetAry[$i][3])) {
                $schedule = mysqli_real_escape_string($conn, $spreadSheetAry[$i][3]);
            }
			$day = "";
            if (isset($spreadSheetAry[$i][4])) {
                $day = mysqli_real_escape_string($conn, $spreadSheetAry[$i][4]);
            }

            $school_year = "";
            if (isset($spreadSheetAry[$i][5])) {
                $school_year = mysqli_real_escape_string($conn, $spreadSheetAry[$i][5]);
            }

            $subject = "";
            if (isset($spreadSheetAry[$i][6])) {
                $subject = mysqli_real_escape_string($conn, $spreadSheetAry[$i][6]);
            }



            if (! empty($section) || ! empty($course_code) || ! empty($adviser_id) ||
			 !empty($schedule)  || !empty($day)||  ! empty($school_year) || !empty($subject)
			 
			 ) {
                $query = "insert into tbl_class(section,course_code,
                prof,sched,day,school_year,class_status,subj) 
                values(?,?,?,?,?,?,?,?)";
                //String , String, String dagdagan pa
				$paramType = "ssssssss";
                $paramArray = array(
                    $section,
                    $course_code,
                    $adviser_id,
                    $schedule,
                    $day,
                    $school_year,
                    $class_status,
                    $subject

                );
                $insertId = $db->insert($query, $paramType, $paramArray);
                // $query = "insert into tbl_info(name,description) values('" . $name . "','" . $description . "')";
                // $result = mysqli_query($conn, $query);

                if (! empty($insertId)) {
                    $type = "success";
                    $message = "Excel Data Imported into the Database";
                } else {
                    $type = "error";
                    $message = "Problem in Importing Excel Data";
                }

                header("location:../rep-class.php?r=3447");
            }
        }
    } else {
        $type = "error";
        $message = "Invalid File Type. Upload Excel File.";
    }
}





?>