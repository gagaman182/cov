<?php
	 header('Access-Control-Allow-Origin: *');
   
	 include 'conn.php';


 $sql = "SELECT
 CONCAT(prename,name) as name,
 age ,
 idcard,
 occupation
FROM
 cov_person"
  ;


$return_arr = array();

if ($result = mysqli_query( $conn, $sql )){
    while ($row = mysqli_fetch_assoc($result)) {
	$row_array['name'] = $row['name'];
	$row_array['age'] = $row['age'];
  $row_array['idcard'] = $row['idcard'];
  $row_array['occupation'] = $row['occupation'];
	
	
	
    array_push($return_arr,$row_array);
   }
 }

mysqli_close($conn);

echo json_encode($return_arr);








?>
