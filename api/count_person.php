<?php
	 header('Access-Control-Allow-Origin: *');
   
	 include 'conn.php';


 $sql = "select 
 count(id) as total,
 count(CASE when prename in ('นาย') then id end ) as man,
 count(CASE when prename not  in ('นาย') then id end ) as women
  from cov_person"
  ;


$return_arr = array();

if ($result = mysqli_query( $conn, $sql )){
    while ($row = mysqli_fetch_assoc($result)) {
	$row_array['total'] = $row['total'];
	$row_array['man'] = $row['man'];
	$row_array['women'] = $row['women'];
	
	
	
    array_push($return_arr,$row_array);
   }
 }

mysqli_close($conn);

echo json_encode($return_arr);








?>
