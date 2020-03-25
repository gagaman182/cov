<?php
	 header('Access-Control-Allow-Origin: *');
   
	 include 'conn.php';




	 
//   $username = 'u111';
//   $password = 'p111';

 	 
   $username = $_GET["username"];
   $password = $_GET["password"];







 $sql = "select * from users where user =  '".$username."' and pass  =  '".$password."'";


session_start();



$return_arr = array();

// if ($result = mysqli_query( $conn, $sql )){
//     while ($row = mysqli_fetch_assoc($result)) {
// 	$row_array['token'] = session_id();


	
	


//     array_push($return_arr,$row_array);
//    }
//  }
$sql = "select * from users where user =  '".$username."' and pass  =  '".$password."'";

$runcheck = mysqli_query($conn,$sql);
if (mysqli_num_rows($runcheck) > 0)
{
	while ($row = mysqli_fetch_assoc($runcheck)) {
    $row_array['token'] = session_id();
		$row_array['message'] = 'ยืนยันตัวตนถูกต้อง';
		$row_array['state'] = 'ok';
		$row_array['fullname'] =  $row['fullname'];
		array_push($return_arr,$row_array);
	}
}else{
	$row_array['token'] = '';
	$row_array['message'] = 'ท่านไม่สามรถเข้าสู่ระบบได้';
	$row_array['state'] = 'no';

     array_push($return_arr,$row_array);
}

	
		


mysqli_close($conn);

echo json_encode($return_arr);

// print json_encode($rows);







?>
