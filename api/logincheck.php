<?php
	 header('Access-Control-Allow-Origin: *');
   
	 include 'conn.php';




	 
//   $username = 'u111';
//   $password = 'p111';

 	 
   $username = $_GET["username"];
   $password = $_GET["password"];


   $ip_login = getHostByName(getHostName());


session_start();



$return_arr = array();


$sql = "select * from users where user =  '".$username."' and pass  =  '".$password."'";

$runcheck = mysqli_query($conn,$sql);
if (mysqli_num_rows($runcheck) > 0)
{
	$sql_login = "INSERT INTO cov_login_stamp(user_login,ip_login,date_login)
	VALUES('".$username."','".$ip_login."',CURRENT_TIMESTAMP)";
	if ($conn->query($sql_login) === TRUE) {
	while ($row = mysqli_fetch_assoc($runcheck)) {
    $row_array['token'] = session_id();
		$row_array['message'] = 'ยืนยันตัวตนถูกต้อง';
		$row_array['state'] = 'ok';
		$row_array['fullname'] =  $row['fullname'];
		array_push($return_arr,$row_array);
	}
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
