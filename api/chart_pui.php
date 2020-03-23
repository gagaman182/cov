<?php
	 header('Access-Control-Allow-Origin: *');
   
	 include 'conn.php';


 $sql = "select pui,count(id) as value from cov_person GROUP BY pui


"
  ;


$return_arr = array();
$final = array();

if ($result = mysqli_query( $conn, $sql )){
    while ($row = mysqli_fetch_assoc($result)) {
	 $row_array['name'] = $row['pui'];
   $row_array['value'] =  intval($row['value']);
  
 

 
		
    array_push($return_arr,$row_array);
	
	
     
 

   }
  
 }
  // $data_array = array("name" => "จำนวนคน");
  // $data_array2 = array("data" => $return_arr);
  //  $result = array_merge($data_array,$data_array2);
  //  array_push($final,$result);

 mysqli_close($conn);

echo json_encode($return_arr);








?>
