<?php
	 header('Access-Control-Allow-Origin: *');
   
	 include 'conn.php';

	 $id = $_GET["id"];
	 $user_remove = $_GET["user_remove"];
	 $idcard_remove = $_GET["idcard_remove"];
	 $ip_remove = getHostByName(getHostName());
	 
 	 $sql = "DELETE FROM cov_person WHERE id = '".$id."' ";


$return_arr = array();

if ($conn->query($sql) === TRUE) {
	$sql_remove = "INSERT INTO cov_romove_stamp(user_remove,idcard_remove,ip_remove,date_remove) 
	VALUES('".$user_remove."','".$idcard_remove."','".$ip_remove."',CURRENT_TIMESTAMP)";
	 if ($conn->query($sql_remove) === TRUE) {
		$row_array['message'] = "ลบข้อมูลสำเร็จ";
		array_push($return_arr,$row_array);
	 }
        
        
	
} else {
	$row_array['message'] =  "ลบข้อมูลไม่สำเร็จ " ;
	array_push($return_arr,$row_array);
}


mysqli_close($conn);

echo json_encode($return_arr);









?>
