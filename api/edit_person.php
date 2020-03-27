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
  $row_array['hn'] = $row['hn'];
  $row_array['age'] = $row['age'];
  $row_array['occupation'] = $row['occupation'];
  $row_array['sex'] = $row['sex'];
  $row_array['idcard'] = $row['idcard'];
  $row_array['tel'] = $row['tel'];
  $row_array['mobile'] = $row['mobile'];
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
  $row_array['day1'] = $row['day1'];
  $row_array['day2'] = $row['day2'];
  $row_array['day3'] = $row['day3'];
  $row_array['day4'] = $row['day4'];
  $row_array['day5'] = $row['day5'];
  $row_array['day6'] = $row['day6'];
  $row_array['day7'] = $row['day7'];
  $row_array['day8'] = $row['day8'];
  $row_array['day9'] = $row['day9'];
  $row_array['day10'] = $row['day10'];
  $row_array['day11'] = $row['day11'];
  $row_array['day12'] = $row['day12'];
  $row_array['day13'] = $row['day13'];
  $row_array['day14'] = $row['day14'];
  $row_array['temp_detail1'] = $row['temp_detail1'];
  $row_array['temp_detail2'] = $row['temp_detail2'];
  $row_array['temp_detail3'] = $row['temp_detail3'];
  $row_array['temp_detail4'] = $row['temp_detail4'];
  $row_array['temp_detail5'] = $row['temp_detail5'];
  $row_array['temp_detail6'] = $row['temp_detail6'];
  $row_array['temp_detail7'] = $row['temp_detail7'];
  $row_array['temp_detail8'] = $row['temp_detail8'];
  $row_array['temp_detail9'] = $row['temp_detail9'];
  $row_array['temp_detail10'] = $row['temp_detail10'];
  $row_array['temp_detail11'] = $row['temp_detail11'];
  $row_array['temp_detail12'] = $row['temp_detail12'];
  $row_array['temp_detail13'] = $row['temp_detail13'];
  $row_array['temp_detail14'] = $row['temp_detail14'];
  $row_array['temp1'] = $row['temp1'];
  $row_array['temp2'] = $row['temp2'];
  $row_array['temp3'] = $row['temp3'];
  $row_array['temp4'] = $row['temp4'];
  $row_array['temp5'] = $row['temp5'];
  $row_array['temp6'] = $row['temp6'];
  $row_array['temp7'] = $row['temp7'];
  $row_array['temp8'] = $row['temp8'];
  $row_array['temp9'] = $row['temp9'];
  $row_array['temp10'] = $row['temp10'];
  $row_array['temp11'] = $row['temp11'];
  $row_array['temp12'] = $row['temp12'];
  $row_array['temp13'] = $row['temp13'];
  $row_array['temp14'] = $row['temp14'];
  $row_array['steam1'] = $row['steam1'];
  $row_array['steam2'] = $row['steam2'];
  $row_array['steam3'] = $row['steam3'];
  $row_array['steam4'] = $row['steam4'];
  $row_array['steam5'] = $row['steam5'];
  $row_array['steam6'] = $row['steam6'];
  $row_array['steam7'] = $row['steam7'];
  $row_array['steam8'] = $row['steam8'];
  $row_array['steam9'] = $row['steam9'];
  $row_array['steam10'] = $row['steam10'];
  $row_array['steam11'] = $row['steam11'];
  $row_array['steam12'] = $row['steam12'];
  $row_array['steam13'] = $row['steam13'];
  $row_array['steam14'] = $row['steam14'];
  $row_array['throat1'] = $row['throat1'];
  $row_array['throat2'] = $row['throat2'];
  $row_array['throat3'] = $row['throat3'];
  $row_array['throat4'] = $row['throat4'];
  $row_array['throat5'] = $row['throat5'];
  $row_array['throat6'] = $row['throat6'];
  $row_array['throat7'] = $row['throat7'];
  $row_array['throat8'] = $row['throat8'];
  $row_array['throat9'] = $row['throat9'];
  $row_array['throat10'] = $row['throat10'];
  $row_array['throat11'] = $row['throat11'];
  $row_array['throat12'] = $row['throat12'];
  $row_array['throat13'] = $row['throat13'];
  $row_array['throat14'] = $row['throat14'];
  $row_array['runny1'] = $row['runny1'];
  $row_array['runny2'] = $row['runny2'];
  $row_array['runny3'] = $row['runny3'];
  $row_array['runny4'] = $row['runny4'];
  $row_array['runny5'] = $row['runny5'];
  $row_array['runny6'] = $row['runny6'];
  $row_array['runny7'] = $row['runny7'];
  $row_array['runny8'] = $row['runny8'];
  $row_array['runny9'] = $row['runny9'];
  $row_array['runny10'] = $row['runny10'];
  $row_array['runny11'] = $row['runny11'];
  $row_array['runny12'] = $row['runny12'];
  $row_array['runny13'] = $row['runny13'];
  $row_array['runny14'] = $row['runny14'];
  $row_array['phlegm1'] = $row['phlegm1'];
  $row_array['phlegm2'] = $row['phlegm2'];
  $row_array['phlegm3'] = $row['phlegm3'];
  $row_array['phlegm4'] = $row['phlegm4'];
  $row_array['phlegm5'] = $row['phlegm5'];
  $row_array['phlegm6'] = $row['phlegm6'];
  $row_array['phlegm7'] = $row['phlegm7'];
  $row_array['phlegm8'] = $row['phlegm8'];
  $row_array['phlegm9'] = $row['phlegm9'];
  $row_array['phlegm10'] = $row['phlegm10'];
  $row_array['phlegm11'] = $row['phlegm11'];
  $row_array['phlegm12'] = $row['phlegm12'];
  $row_array['phlegm13'] = $row['phlegm13'];
  $row_array['phlegm14'] = $row['phlegm14'];
  $row_array['breath1'] = $row['breath1'];
  $row_array['breath2'] = $row['breath2'];
  $row_array['breath3'] = $row['breath3'];
  $row_array['breath4'] = $row['breath4'];
  $row_array['breath5'] = $row['breath5'];
  $row_array['breath6'] = $row['breath6'];
  $row_array['breath7'] = $row['breath7'];
  $row_array['breath8'] = $row['breath8'];
  $row_array['breath9'] = $row['breath9'];
  $row_array['breath10'] = $row['breath10'];
  $row_array['breath11'] = $row['breath11'];
  $row_array['breath12'] = $row['breath12'];
  $row_array['breath13'] = $row['breath13'];
  $row_array['breath14'] = $row['breath14'];
  $row_array['gasp1'] = $row['gasp1'];
  $row_array['gasp2'] = $row['gasp2'];
  $row_array['gasp3'] = $row['gasp3'];
  $row_array['gasp4'] = $row['gasp4'];
  $row_array['gasp5'] = $row['gasp5'];
  $row_array['gasp6'] = $row['gasp6'];
  $row_array['gasp7'] = $row['gasp7'];
  $row_array['gasp8'] = $row['gasp8'];
  $row_array['gasp9'] = $row['gasp9'];
  $row_array['gasp10'] = $row['gasp10'];
  $row_array['gasp11'] = $row['gasp11'];
  $row_array['gasp12'] = $row['gasp12'];
  $row_array['gasp13'] = $row['gasp13'];
  $row_array['gasp14'] = $row['gasp14'];
  $row_array['muscle1'] = $row['muscle1'];
  $row_array['muscle2'] = $row['muscle2'];
  $row_array['muscle3'] = $row['muscle3'];
  $row_array['muscle4'] = $row['muscle4'];
  $row_array['muscle5'] = $row['muscle5'];
  $row_array['muscle6'] = $row['muscle6'];
  $row_array['muscle7'] = $row['muscle7'];
  $row_array['muscle8'] = $row['muscle8'];
  $row_array['muscle9'] = $row['muscle9'];
  $row_array['muscle10'] = $row['muscle10'];
  $row_array['muscle11'] = $row['muscle11'];
  $row_array['muscle12'] = $row['muscle12'];
  $row_array['muscle13'] = $row['muscle13'];
  $row_array['muscle14'] = $row['muscle14'];
  $row_array['head1'] = $row['head1'];
  $row_array['head2'] = $row['head2'];
  $row_array['head3'] = $row['head3'];
  $row_array['head4'] = $row['head4'];
  $row_array['head5'] = $row['head5'];
  $row_array['head6'] = $row['head6'];
  $row_array['head7'] = $row['head7'];
  $row_array['head8'] = $row['head8'];
  $row_array['head9'] = $row['head9'];
  $row_array['head10'] = $row['head10'];
  $row_array['head11'] = $row['head11'];
  $row_array['head12'] = $row['head12'];
  $row_array['head13'] = $row['head13'];
  $row_array['head14'] = $row['head14'];
  $row_array['liquid1'] = $row['liquid1'];
  $row_array['liquid2'] = $row['liquid2'];
  $row_array['liquid3'] = $row['liquid3'];
  $row_array['liquid4'] = $row['liquid4'];
  $row_array['liquid5'] = $row['liquid5'];
  $row_array['liquid6'] = $row['liquid6'];
  $row_array['liquid7'] = $row['liquid7'];
  $row_array['liquid8'] = $row['liquid8'];
  $row_array['liquid9'] = $row['liquid9'];
  $row_array['liquid10'] = $row['liquid10'];
  $row_array['liquid11'] = $row['liquid11'];
  $row_array['liquid12'] = $row['liquid12'];
  $row_array['liquid13'] = $row['liquid13'];
  $row_array['liquid14'] = $row['liquid14'];
  $row_array['other_detail'] = $row['other_detail'];
  $row_array['other1'] = $row['other1'];
  $row_array['other2'] = $row['other2'];
  $row_array['other3'] = $row['other3'];
  $row_array['other4'] = $row['other4'];
  $row_array['other5'] = $row['other5'];
  $row_array['other6'] = $row['other6'];
  $row_array['other7'] = $row['other7'];
  $row_array['other8'] = $row['other8'];
  $row_array['other9'] = $row['other9'];
  $row_array['other10'] = $row['other10'];
  $row_array['other11'] = $row['other11'];
  $row_array['other12'] = $row['other12'];
  $row_array['other13'] = $row['other13'];
  $row_array['other14'] = $row['other14'];
  $row_array['informer1'] = $row['informer1'];
  $row_array['informer2'] = $row['informer2'];
  $row_array['informer3'] = $row['informer3'];
  $row_array['informer4'] = $row['informer4'];
  $row_array['informer5'] = $row['informer5'];
  $row_array['informer6'] = $row['informer6'];
  $row_array['informer7'] = $row['informer7'];
  $row_array['informer8'] = $row['informer8'];
  $row_array['informer9'] = $row['informer9'];
  $row_array['informer10'] = $row['informer10'];
  $row_array['informer11'] = $row['informer11'];
  $row_array['informer12'] = $row['informer12'];
  $row_array['informer13'] = $row['informer13'];
  $row_array['informer14'] = $row['informer14'];
  $row_array['user_create'] = $row['user_create'];
  $row_array['times1'] = $row['times1'];
  $row_array['times2'] = $row['times2'];
  $row_array['times3'] = $row['times3'];
  $row_array['times4'] = $row['times4'];
  $row_array['times5'] = $row['times5'];
  $row_array['times6'] = $row['times6'];
  $row_array['times7'] = $row['times7'];
  $row_array['times8'] = $row['times8'];
  $row_array['times9'] = $row['times9'];
  $row_array['times10'] = $row['times10'];
  $row_array['times11'] = $row['times11'];
  $row_array['times12'] = $row['times12'];
  $row_array['times13'] = $row['times13'];
  $row_array['times14'] = $row['times14'];
  $row_array['total14'] = $row['total14'];
  
    array_push($return_arr,$row_array);
   }
 }

mysqli_close($conn);

echo json_encode($return_arr);








?>
