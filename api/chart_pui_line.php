<?php
	 header('Access-Control-Allow-Origin: *');
   
	 include 'conn.php';


 $sql = "SELECT
 date_format(startday,'%d-%m-%Y') as date,
 count(id) AS total
FROM
 cov_person
WHERE
 pui = 'rowrisk'
GROUP BY date_format(startday,'%d-%m-%Y')
ORDER BY startday"
  ;


$step1 = array();
$final_rowrisk = array();

if ($result = mysqli_query( $conn, $sql )){
    while ($row = mysqli_fetch_assoc($result)) {
   $row_array['label'] = $row['date'];
   $row_array['value'] =  intval($row['total']);
   array_push($step1,$row_array);

   }
  
 }
  $rowrisk_array = array("name" => "rowrisk");
  $rowrisk2_array = array("data" => $step1);
   $result_rowrisk = array_merge($rowrisk_array,$rowrisk2_array);
   array_push($final_rowrisk,$result_rowrisk);


   $sql2 = "SELECT
   date_format(startday,'%d-%m-%Y') as date,
   count(id) AS total
  FROM
   cov_person
  WHERE
   pui = 'hightrisk'
  GROUP BY date_format(startday,'%d-%m-%Y')
  ORDER BY startday"
  
    ;
  
  
  $step2 = array();
  $final_hightrisk = array();
  
  if ($result = mysqli_query( $conn, $sql2 )){
      while ($row = mysqli_fetch_assoc($result)) {
     $row_array['label'] = $row['date'];
     $row_array['value'] =  intval($row['total']);
     array_push($step2,$row_array);
  
     }
    
   }
    $hightrisk_array = array("name" => "hightrisk");
    $hightrisk2_array = array("data" => $step2);
     $result_hightrisk = array_merge($hightrisk_array,$hightrisk2_array);
     array_push($final_hightrisk,$result_hightrisk);
  


  
$last = array_merge($final_rowrisk,$final_hightrisk);


 mysqli_close($conn);

echo json_encode($last);








?>
