<?php
// date_default_timezone_set('Africa/Dar_es_salaam');



    try {
        require '../constants/db_config.php';
        
        require '../constants/uniques.php';
        
        $code = $_POST['code'];
        $section = $_POST['section'];
        $subj = $_POST['subj'];
        $adviser_id = $_POST['adv_id'];
       


            //GET AM OR PM (FROM)

            $firstTwoText = substr($_POST['from'],0,2);//=00
            $minutes = substr($_POST['from'],3,2);
            // $minutes = number_format($getMinutes);
            //Convert to INT
            $getTime = number_format($firstTwoText);


            //GET AM OR PM (TO)

            $firstTwoText2 = substr($_POST['to'],0,2);//=00
            $minutes2 = substr($_POST['to'],3,2);
            // $minutes = number_format($getMinutes);
            //Convert to INT
            $getTime2 = number_format($firstTwoText2);




            //FROM
            //GET TIME AND SUBTRACT IF OVERTHAN 12 
            if($getTime > 12){

                    $hour = $getTime - 12; 
                    $from = $hour.':'.$minutes.' PM';

            }

            elseif($getTime == 12){
                    $hour = 12;
                    $from = $hour.':'.$minutes.' PM';
            }


            elseif($getTime == 0){
                    $hour = 12;
                    $from = $hour.':'.$minutes.' AM';
            }

            else{

                    $hour = $getTime;
                    $from = $hour.':'.$minutes.' AM';

            }
            //GET TIME AND SUBTRACT IF OVERTHAN 12 (END)



            //TO 

            //FROM
            //GET TIME AND SUBTRACT IF OVERTHAN 12 
            if($getTime2 > 12){

                $hour2 = $getTime2 - 12; 
                $to = $hour2.':'.$minutes2.' PM';

            }

            elseif($getTime2 == 12){
                $hour2 = 12;
                $to = $hour2.':'.$minutes2.' PM';
            }


            elseif($getTime2 == 0){
                $hour2 = 12;
                $to = $hour2.':'.$minutes2.' AM';
            }

            else{

                $hour2 = $getTime2;
                $to = $hour2.':'.$minutes2.' AM';

            }




        $day = $_POST['day']; 
        
	    $join_code = 'JOIN'.get_rand_numbers(9).'';//7


        $unique = ''.get_rand_numbers(3).''.get_rand_numbers(3).''.get_rand_numbers(3).''.get_rand_numbers(2);//7

         
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare("INSERT INTO tbl_class (course_code, section, subj,prof,sched_from,sched_to,join_code,class_unique,day) 
        VALUES (:code,:section, :subj, :prof,:sched_from,:sched_to,:join_code,:class_unique,:day)");
        $stmt->bindParam(':code', $code);
        $stmt->bindParam(':section', $section);
        $stmt->bindParam(':subj', $subj);
        $stmt->bindParam(':prof', $adviser_id);
        $stmt->bindParam(':sched_from', $from);
        $stmt->bindParam(':sched_to', $to);
        $stmt->bindParam(':join_code', $join_code);
        $stmt->bindParam(':class_unique', $unique);
        $stmt->bindParam(':day', $day);
        $stmt->execute();
        header("location:../my_class.php");				  
        }
        
        catch(PDOException $e)
        {
            
        header("location:../my_classasdas.php");
        }	
        
    

?>