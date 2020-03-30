<?php
	 header('Access-Control-Allow-Origin: *');
   
	 include 'conn.php';


 $sql = "SELECT
 id,
 CONCAT(prename,name) as name,
 hn,
 age ,
 idcard,
 sex,
 tel,
 case when pui = 'pui' then 'pui' 
        when pui = 'lowrisk' then 'rowrisk'
				when pui = 'hightrisk' then 'hightrisk'
end as pui,
startday,
case WHEN total14 = 'true' then 'ครบ'  end  as total14

FROM
 cov_person"
  ;


$return_arr = array();

if ($result = mysqli_query( $conn, $sql )){
    while ($row = mysqli_fetch_assoc($result)) {
  $row_array['id'] = $row['id'];
  $row_array['name'] = $row['name'];
  $row_array['hn'] = $row['hn'];
	$row_array['age'] = $row['age'];
  $row_array['idcard'] = $row['idcard'];
  $row_array['sex'] = $row['sex'];
  $row_array['tel'] = $row['tel'];
  $row_array['pui'] = $row['pui'];
  $row_array['startday'] = $row['startday'];
  $row_array['total14'] = $row['total14'];
	
	
	
    array_push($return_arr,$row_array);
   }
 }

mysqli_close($conn);

echo json_encode($return_arr);








?>
