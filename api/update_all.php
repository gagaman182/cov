<?php
	 header('Access-Control-Allow-Origin: *');
   
	 include 'conn.php';

     $id = $_GET["id"];
	 $prename = $_GET["prename"];
	 $name = $_GET["name"];

	


	 $return_arr = array();



 $sql = "UPDATE cov_person SET prename='".$prename."' ,name = '".$name."' WHERE id = '".$id."' ";




if ($conn->query($sql) === TRUE) {
	$row_array['message'] = "แก้ไขข้อมูลบุคคลสำเร็จ";
	array_push($return_arr,$row_array);
} else {
	$row_array['message'] =  "แก้ไขข้อมูลบุคคลไม่สำเร็จ " ;
	array_push($return_arr,$row_array);
}









 

mysqli_close($conn);

echo json_encode($return_arr);









?>
