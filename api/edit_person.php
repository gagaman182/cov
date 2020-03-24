<?php
	 header('Access-Control-Allow-Origin: *');
   
	 include 'conn.php';
   $num = $_GET["num"];


 $sql = "SELECT
*

FROM
 cov_person
 where id  = '".$num."' ";



$return_arr = array();

if ($result = mysqli_query( $conn, $sql )){
    while ($row = mysqli_fetch_assoc($result)) {
  $row_array['id'] = $row['id'];
  $row_array['prename'] = $row['prename'];
	$row_array['name'] = $row['name'];
  $row_array['age'] = $row['age'];
  $row_array['occupation'] = $row['occupation'];
  $row_array['idcard'] = $row['idcard'];
  $row_array['address'] = $row['address'];
  $row_array['village'] = $row['village'];
  $row_array['villname'] = $row['villname'];
  $row_array['soi'] = $row['soi'];
  $row_array['road'] = $row['road'];
  $row_array['subdistrict'] = $row['subdistrict'];
  $row_array['district'] = $row['district'];
  $row_array['province'] = $row['province'];
  $row_array['zipcode'] = $row['zipcode'];
  $row_array['travel'] = $row['travel'];
  $row_array['pui'] = $row['pui'];
  $row_array['startday'] = $row['startday'];
  $row_array['endday'] = $row['endday'];

	
	
	
    array_push($return_arr,$row_array);
   }
 }

mysqli_close($conn);

echo json_encode($return_arr);








?>
