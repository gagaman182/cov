<?php
header('Access-Control-Allow-Origin: *');
include 'conn.php';

 $prename = $_GET["prename"];
 $name = $_GET["name"];
 $age = $_GET["age"];
 $occupation = $_GET["occupation"];
 $idcard = $_GET["idcard"];
 $address = $_GET["address"];
 $village = $_GET["village"];
 $villname = $_GET["villname"];
 $soi = $_GET["soi"];
 $road = $_GET["road"];
 $subdistrict = $_GET["subdistrict"];
 $district = $_GET["district"];
 $province = $_GET["province"];
 $travel = $_GET["travel"];
 $startday = $_GET["startday"];
 $endday = $_GET["endday"];
//  $time_start = strtotime($_GET["startday"]); //แปลงข้อความเป็นวันที่
// $startday = date('Y-m-d',$time_start);//แปลง format


//  $time_end = strtotime($_GET["endday"]); //แปลงข้อความเป็นวันที่
// $endday = date('Y-m-d',$time_end);//แปลง format



	



        
    
       $strvisit  = "  INSERT INTO cov_person(prename,name,age,occupation,idcard,address,village,villname,soi,road,subdistrict,district,province,travel,startday,endday) 
        VALUES('".$prename."','".$name."','".$age."','".$occupation."','".$idcard."','".$address."','".$village."','".$villname."','".$soi."','".$road."','".$subdistrict."','".$district."','".$province."','".$travel."','".$startday."','".$endday."')";
      
        
        
        
        if ($conn->query($strvisit) === TRUE) {
            // echo "ระบบทำงานเสร็จสมบูรณ์";
            
            $return_message = array();
            $row_array['message'] = "เพิ่มข้อมูลสำเร็จ";
            array_push($return_message,$row_array);
        
        
        } else {
            // echo "Error: " . $sql . "<br>" . $conn->error;
            $return_message = array();
            $row_array['message'] = "เพิ่มข้อมูลไม่สำเร็จหรือมีข้อมูลแล้ว";
            array_push($return_message,$row_array);
            
        }



      
mysqli_close($conn);
	
echo json_encode($return_message);

?>