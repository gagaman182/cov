<?php
	 header('Access-Control-Allow-Origin: *');
   
	 include 'conn.php';


 $sql = "SELECT
 'คลองอู่ตะเภา' AS NAME,
 count(id) AS total
FROM
 cov_person
WHERE
 subdistrict = 'คลองอู่ตะเภา'
UNION ALL
 SELECT
   'คลองแห' AS NAME,
   count(id) AS total
 FROM
   cov_person
 WHERE
   subdistrict = 'คลองแห'
UNION ALL
SELECT
 'ควนลัง' AS NAME,
 count(id) AS total
FROM
 cov_person
WHERE
 subdistrict = 'ควนลัง'
UNION ALL
SELECT
 'คอหงส์' AS NAME,
 count(id) AS total
FROM
 cov_person
WHERE
 subdistrict = 'คอหงส์'
UNION ALL

SELECT
 'คูเต่า' AS NAME,
 count(id) AS total
FROM
 cov_person
WHERE
 subdistrict = 'คูเต่า'
UNION ALL
SELECT
 'ฉลุง' AS NAME,
 count(id) AS total
FROM
 cov_person
WHERE
 subdistrict = 'ฉลุง'
UNION ALL
SELECT
 'ทุ่งตำเสา' AS NAME,
 count(id) AS total
FROM
 cov_person
WHERE
 subdistrict = 'ทุ่งตำเสา'
UNION ALL
SELECT
 'ทุ่งใหญ่' AS NAME,
 count(id) AS total
FROM
 cov_person
WHERE
 subdistrict = 'ทุ่งใหญ่'
UNION ALL
SELECT
 'ท่าข้าม' AS NAME,
 count(id) AS total
FROM
 cov_person
WHERE
 subdistrict = 'ท่าข้าม'
UNION ALL
SELECT
 'น้ำน้อย' AS NAME,
 count(id) AS total
FROM
 cov_person
WHERE
 subdistrict = 'น้ำน้อย'
UNION ALL
SELECT
 'บ้านพรุ' AS NAME,
 count(id) AS total
FROM
 cov_person
WHERE
 subdistrict = 'บ้านพรุ'
UNION ALL
SELECT
 'พะตง' AS NAME,
 count(id) AS total
FROM
 cov_person
WHERE
 subdistrict = 'พะตง'
UNION ALL
SELECT
 'หาดใหญ่' AS NAME,
 count(id) AS total
FROM
 cov_person
WHERE
 subdistrict = 'หาดใหญ่'


"
  ;


$return_arr = array();
$final = array();

if ($result = mysqli_query( $conn, $sql )){
    while ($row = mysqli_fetch_assoc($result)) {
	 $row_array['label'] = $row['NAME'];
   $row_array['value'] =  intval($row['total']);
  
 

 
		
    array_push($return_arr,$row_array);
	
	
     
    // array(intval($row['data']));

   }
  
 }
  $data_array = array("name" => "จำนวนคน");
  $data_array2 = array("data" => $return_arr);
   $result = array_merge($data_array,$data_array2);
   array_push($final,$result);

 mysqli_close($conn);

echo json_encode($final);








?>
