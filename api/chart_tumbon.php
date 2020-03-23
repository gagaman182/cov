<?php
	 header('Access-Control-Allow-Origin: *');
   
	 include 'conn.php';


 $sql = "SELECT

 count(id) AS total
FROM
 cov_person
WHERE
 subdistrict = 'คลองอู่ตะเภา'
UNION ALL
 SELECT

   count(id) AS total
 FROM
   cov_person
 WHERE
   subdistrict = 'คลองแห'
UNION ALL
SELECT

 count(id) AS total
FROM
 cov_person
WHERE
 subdistrict = 'ควนลัง'
UNION ALL
SELECT

 count(id) AS total
FROM
 cov_person
WHERE
 subdistrict = 'คอหงส์'
UNION ALL

SELECT

 count(id) AS total
FROM
 cov_person
WHERE
 subdistrict = 'คูเต่า'
UNION ALL
SELECT

 count(id) AS total
FROM
 cov_person
WHERE
 subdistrict = 'ฉลุง'
UNION ALL
SELECT

 count(id) AS total
FROM
 cov_person
WHERE
 subdistrict = 'ทุ่งตำเสา'
UNION ALL
SELECT

 count(id) AS total
FROM
 cov_person
WHERE
 subdistrict = 'ทุ่งใหญ่'
UNION ALL
SELECT

 count(id) AS total
FROM
 cov_person
WHERE
 subdistrict = 'ท่าข้าม'
UNION ALL
SELECT

 count(id) AS total
FROM
 cov_person
WHERE
 subdistrict = 'น้ำน้อย'
UNION ALL
SELECT

 count(id) AS total
FROM
 cov_person
WHERE
 subdistrict = 'บ้านพรุ'
UNION ALL
SELECT

 count(id) AS total
FROM
 cov_person
WHERE
 subdistrict = 'พะตง'
UNION ALL
SELECT

 count(id) AS total
FROM
 cov_person
WHERE
 subdistrict = 'หาดใหญ่'


"
  ;


$return_arr = array();
$return_arr2 = array();
if ($result = mysqli_query( $conn, $sql )){
    while ($row = mysqli_fetch_assoc($result)) {
	// $row_array['name'] = $row['NAME'];
  // $row_array['data'] =  array(intval($row['total']));
    $row_array=  intval($row['total']);
 

 
		
    array_push($return_arr,$row_array);
	
	
      // array_push($return_arr, intval($row['total']));  


   }
 }
//  array_push($return_arr2, $return_arr);  

// $data['cat'] =  array(intval(1));
//  echo   json_encode($data);
//  $row_array['name'] =  $return_arr
//  array_push($return_arr2,$row_array);

// echo $return_arr;
$data = array(
  array('Year', 'Sales','Expenses'),
  array(2004, 1000, 400),
  array(2005, 800, 300),
  array(2006, 660, 1120)
);


// mysqli_close($conn);

echo json_encode($data);








?>
