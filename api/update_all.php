<?php
	 header('Access-Control-Allow-Origin: *');
   
	 include 'conn.php';

     $id = $_GET["id"];
	 $prename = $_GET["prename"];
	 $name = $_GET["name"];
	 $age = $_GET["age"];
	 $occupation = $_GET["occupation"];
	 $idcard = $_GET["idcard"];
	 $address = $_GET["address"];
	 $village = $_GET["village"];
	 $villname = $_GET["villname"];
	 $soi = $_GET["soi"];
	 $road = $_GET["road"];
	 $subdistrict = $_GET["subdistrict"];
	 $district = $_GET["district"];
	 $province = $_GET["province"];
	 $zipcode = $_GET["zipcode"];
	 $travel = $_GET["travel"];
	 $pui = $_GET["pui"];	

	 $startday = $_GET["startday"];	
	 $endday = $_GET["endday"];	
	 $day1 = $_GET["day1"];
	 $day2 = $_GET["day2"];	
	 $day3 = $_GET["day3"];
	 $day4 = $_GET["day4"];
	 $day5 = $_GET["day5"];
	 $day6 = $_GET["day6"];
	 $day7 = $_GET["day7"];
	 $day8 = $_GET["day8"];
	 $day9 = $_GET["day9"];
	 $day10 = $_GET["day10"];
	 $day11 = $_GET["day11"];
	 $day12 = $_GET["day12"];
	 $day13 = $_GET["day13"];
	 $day14 = $_GET["day14"];

	 $temp_detail1 = $_GET["temp_detail1"];
	 $temp_detail2= $_GET["temp_detail2"];
	 $temp_detail3 = $_GET["temp_detail3"];
	 $temp_detail4 = $_GET["temp_detail4"];
	 $temp_detail5 = $_GET["temp_detail5"];
	 $temp_detail6 = $_GET["temp_detail6"];
	 $temp_detail7 = $_GET["temp_detail7"];
	 $temp_detail8 = $_GET["temp_detail8"];
	 $temp_detail9 = $_GET["temp_detail9"];
	 $temp_detail10 = $_GET["temp_detail10"];
	 $temp_detail11 = $_GET["temp_detail11"];
	 $temp_detail12 = $_GET["temp_detail12"];
	 $temp_detail13 = $_GET["temp_detail13"];
	 $temp_detail14 = $_GET["temp_detail14"];

	 $temp1 = $_GET["temp1"];
	 $temp2 = $_GET["temp2"];
	 $temp3 = $_GET["temp3"];
	 $temp4 = $_GET["temp4"];
	 $temp5 = $_GET["temp5"];
	 $temp6 = $_GET["temp6"];
	 $temp7 = $_GET["temp7"];
	 $temp8 = $_GET["temp8"];
	 $temp9 = $_GET["temp9"];
	 $temp10 = $_GET["temp10"];
	 $temp11 = $_GET["temp11"];
	 $temp12 = $_GET["temp12"];
	 $temp13 = $_GET["temp13"];
	 $temp14 = $_GET["temp14"];

	 $steam1 = $_GET["steam1"];
	 $steam2 = $_GET["steam2"];
	 $steam3 = $_GET["steam3"];
	 $steam4 = $_GET["steam4"];
	 $steam5 = $_GET["steam5"];
	 $steam6 = $_GET["steam6"];
	 $steam7 = $_GET["steam7"];
	 $steam8 = $_GET["steam8"];
	 $steam9 = $_GET["steam9"];
	 $steam10 = $_GET["steam10"];
	 $steam11 = $_GET["steam11"];
	 $steam12 = $_GET["steam12"];
	 $steam13 = $_GET["steam13"];
	 $steam14 = $_GET["steam14"];

	 $throat1 = $_GET["throat1"];
	$throat2 = $_GET["throat2"];
	$throat3 = $_GET["throat3"];
	$throat4 = $_GET["throat4"];
	$throat5 = $_GET["throat5"];
	$throat6 = $_GET["throat6"];
	$throat7 = $_GET["throat7"];
	$throat8 = $_GET["throat8"];
	$throat9 = $_GET["throat9"];
	$throat10 = $_GET["throat10"];
	$throat11 = $_GET["throat11"];
	$throat12 = $_GET["throat12"];
	$throat13 = $_GET["throat13"];
	$throat14 = $_GET["throat14"];

	$runny1 = $_GET["runny1"];
	$runny2 = $_GET["runny2"];
	$runny3 = $_GET["runny3"];
	$runny4 = $_GET["runny4"];
	$runny5 = $_GET["runny5"];
	$runny6 = $_GET["runny6"];
	$runny7 = $_GET["runny7"];
	$runny8 = $_GET["runny8"];
	$runny9 = $_GET["runny9"];
	$runny10= $_GET["runny10"];
	$runny11 = $_GET["runny11"];
	$runny12 = $_GET["runny12"];
	$runny13 = $_GET["runny13"];
	$runny14 = $_GET["runny14"];

	$phlegm1 = $_GET["phlegm1"];
	$phlegm2 = $_GET["phlegm2"];
	$phlegm3 = $_GET["phlegm3"];
	$phlegm4 = $_GET["phlegm4"];
	$phlegm5 = $_GET["phlegm5"];
	$phlegm6 = $_GET["phlegm6"];
	$phlegm7 = $_GET["phlegm7"];
	$phlegm8 = $_GET["phlegm8"];
	$phlegm9 = $_GET["phlegm9"];
	$phlegm10 = $_GET["phlegm10"];
	$phlegm11 = $_GET["phlegm11"];
	$phlegm12 = $_GET["phlegm12"];
	$phlegm13 = $_GET["phlegm13"];
	$phlegm14 = $_GET["phlegm14"];

	$breath1 = $_GET["breath1"];
	$breath2 = $_GET["breath2"];
	$breath3 = $_GET["breath3"];
	$breath4 = $_GET["breath4"];
	$breath5 = $_GET["breath5"];
	$breath6 = $_GET["breath6"];
	$breath7 = $_GET["breath7"];
	$breath8 = $_GET["breath8"];
	$breath9 = $_GET["breath9"];
	$breath10 = $_GET["breath10"];
	$breath11 = $_GET["breath11"];
	$breath12 = $_GET["breath12"];
	$breath13 = $_GET["breath13"];
	$breath14 = $_GET["breath14"];

	$gasp1 = $_GET["gasp1"];
 $gasp2 = $_GET["gasp2"];
 $gasp3 = $_GET["gasp3"];
 $gasp4 = $_GET["gasp4"];
 $gasp5 = $_GET["gasp5"];
 $gasp6 = $_GET["gasp6"];
 $gasp7 = $_GET["gasp7"];
 $gasp8 = $_GET["gasp8"];
 $gasp9 = $_GET["gasp9"];
 $gasp10 = $_GET["gasp10"];
 $gasp11 = $_GET["gasp11"];
 $gasp12 = $_GET["gasp12"];
 $gasp13 = $_GET["gasp13"];
 $gasp14 = $_GET["gasp14"];

 $muscle1 = $_GET["muscle1"];
 $muscle2 = $_GET["muscle2"];
 $muscle3 = $_GET["muscle3"];
 $muscle4 = $_GET["muscle4"];
 $muscle5 = $_GET["muscle5"];
 $muscle6 = $_GET["muscle6"];
 $muscle7 = $_GET["muscle7"];
 $muscle8 = $_GET["muscle8"];
 $muscle9 = $_GET["muscle9"];
 $muscle10 = $_GET["muscle10"];
 $muscle11 = $_GET["muscle11"];
 $muscle12 = $_GET["muscle12"];
 $muscle13 = $_GET["muscle13"];
 $muscle14 = $_GET["muscle14"];

 $head1 = $_GET["head1"];
 $head2 = $_GET["head2"];
 $head3 = $_GET["head3"];
 $head4 = $_GET["head4"];
 $head5 = $_GET["head5"];
 $head6 = $_GET["head6"];
 $head7 = $_GET["head7"];
 $head8 = $_GET["head8"];
 $head9 = $_GET["head9"];
 $head10 = $_GET["head10"];
 $head11 = $_GET["head11"];
 $head12 = $_GET["head12"];
 $head13 = $_GET["head13"];
 $head14 = $_GET["head14"];

 $liquid1 = $_GET["liquid1"];
 $liquid2 = $_GET["liquid2"];
 $liquid3 = $_GET["liquid3"];
 $liquid4 = $_GET["liquid4"];
 $liquid5 = $_GET["liquid5"];
 $liquid6 = $_GET["liquid6"];
 $liquid7 = $_GET["liquid7"];
 $liquid8 = $_GET["liquid8"];
 $liquid9 = $_GET["liquid9"];
 $liquid10 = $_GET["liquid10"];
 $liquid11 = $_GET["liquid11"];
 $liquid12 = $_GET["liquid12"];
 $liquid13 = $_GET["liquid13"];
 $liquid14 = $_GET["liquid14"];

 $other_detail = $_GET["other_detail"];
 $other1 = $_GET["other1"];
 $other2 = $_GET["other2"];
 $other3 = $_GET["other3"];
 $other4 = $_GET["other4"];
 $other5 = $_GET["other5"];
 $other6 = $_GET["other6"];
 $other7 = $_GET["other7"];
 $other8 = $_GET["other8"];
 $other9 = $_GET["other9"];
 $other10 = $_GET["other10"];
 $other11 = $_GET["other11"];
 $other12 = $_GET["other12"];
 $other13 = $_GET["other13"];
 $other14 = $_GET["other14"];

 $informer1 = $_GET["informer1"];
 $informer2 = $_GET["informer2"];
 $informer3 = $_GET["informer3"];
 $informer4 = $_GET["informer4"];
 $informer5 = $_GET["informer5"];
 $informer6 = $_GET["informer6"];
 $informer7 = $_GET["informer7"];
 $informer8 = $_GET["informer8"];
 $informer9 = $_GET["informer9"];
 $informer10 = $_GET["informer10"];
 $informer11 = $_GET["informer11"];
 $informer12 = $_GET["informer12"];
 $informer13 = $_GET["informer13"];
 $informer14 = $_GET["informer14"];
 $total14 = $_GET["total14"];




 
	


	 $return_arr = array();



 $sql = "UPDATE cov_person SET prename='".$prename."' ,name = '".$name."' ,age = '".$age."',occupation = '".$occupation."',idcard = '".$idcard."',
 address = '".$address."',village = '".$village."',villname = '".$villname."',soi = '".$soi."',road = '".$road."',subdistrict = '".$subdistrict."',
 district = '".$district."',province = '".$province."',zipcode = '".$zipcode."',travel = '".$travel."',pui = '".$pui."' , 
 startday = '".$startday."',endday = '".$endday."',day1 = '".$day1."',day2 = '".$day2."',day3 = '".$day3."',day4 = '".$day4."',day5 = '".$day5."',day6 = '".$day6."',
 day7 = '".$day7."',day8 = '".$day8."',day9 = '".$day9."',day10 = '".$day10."',day11 = '".$day11."',day12 = '".$day12."',day13 = '".$day13."',day14 = '".$day14."',
 temp_detail1 = '".$temp_detail1."',temp_detail2 = '".$temp_detail2."',temp_detail3 = '".$temp_detail3."',temp_detail4 = '".$temp_detail4."',temp_detail5 = '".$temp_detail5."',temp_detail6 = '".$temp_detail6."',temp_detail7 = '".$temp_detail7."',
 temp_detail8 = '".$temp_detail8."',temp_detail9 = '".$temp_detail9."',temp_detail10 = '".$temp_detail10."',temp_detail11 = '".$temp_detail11."',temp_detail12 = '".$temp_detail12."',temp_detail13 = '".$temp_detail13."',temp_detail14 = '".$temp_detail14."',
 temp1 = '".$temp1."', temp2 = '".$temp2."', temp3 = '".$temp3."', temp4 = '".$temp4."', temp5 = '".$temp5."', temp6 = '".$temp6."', temp7 = '".$temp7."',
 temp8 = '".$temp8."', temp9 = '".$temp9."', temp10 = '".$temp10."', temp11 = '".$temp11."', temp12 = '".$temp12."', temp13 = '".$temp13."', temp14 = '".$temp14."',
 steam1 = '".$steam1."', steam2 = '".$steam2."', steam3 = '".$steam3."', steam4 = '".$steam4."', steam5 = '".$steam5."', steam6 = '".$steam6."', steam7 = '".$steam7."',
 steam8 = '".$steam8."', steam9 = '".$steam9."', steam10 = '".$steam10."', steam11 = '".$steam11."', steam12 = '".$steam12."', steam13 = '".$steam13."', steam14 = '".$steam14."',
 throat1 = '".$throat1."',throat2 = '".$throat2."',throat3 = '".$throat3."',throat4 = '".$throat4."',throat5 = '".$throat5."',throat6 = '".$throat6."',throat7 = '".$throat7."',
 throat8 = '".$throat8."',throat9 = '".$throat9."',throat10 = '".$throat10."',throat11 = '".$throat11."',throat12 = '".$throat12."',throat13 = '".$throat13."',throat14 = '".$throat14."',
 runny1 = '".$runny1."',runny2 = '".$runny2."',runny3 = '".$runny3."',runny4 = '".$runny4."',runny5 = '".$runny5."',runny6 = '".$runny6."',runny7 = '".$runny7."',
 runny8 = '".$runny8."',runny9 = '".$runny9."',runny10 = '".$runny10."',runny11 = '".$runny11."',runny12 = '".$runny12."',runny13 = '".$runny13."',runny14 = '".$runny14."',
 phlegm1 = '".$phlegm1."',phlegm2 = '".$phlegm2."',phlegm3 = '".$phlegm3."',phlegm4 = '".$phlegm4."',phlegm5 = '".$phlegm5."',phlegm6 = '".$phlegm6."',phlegm7 = '".$phlegm7."',
 phlegm8 = '".$phlegm8."',phlegm9 = '".$phlegm9."',phlegm10 = '".$phlegm10."',phlegm11 = '".$phlegm11."',phlegm12 = '".$phlegm12."',phlegm13 = '".$phlegm13."',phlegm14 = '".$phlegm14."',
 breath1 = '".$breath1."',breath2 = '".$breath2."',breath3 = '".$breath3."',breath4 = '".$breath4."',breath5 = '".$breath5."',breath6 = '".$breath6."',breath7 = '".$breath7."',
 breath8 = '".$breath8."',breath9 = '".$breath9."',breath10 = '".$breath10."',breath11 = '".$breath11."',breath12 = '".$breath12."',breath13 = '".$breath13."',breath14 = '".$breath14."',
 gasp1 = '".$gasp1."', gasp2 = '".$gasp2."', gasp3 = '".$gasp3."', gasp4 = '".$gasp4."', gasp5 = '".$gasp5."', gasp6 = '".$gasp6."', gasp7 = '".$gasp7."',
 gasp8 = '".$gasp8."', gasp9 = '".$gasp9."', gasp10 = '".$gasp10."', gasp11 = '".$gasp11."', gasp12 = '".$gasp12."', gasp13 = '".$gasp13."', gasp14 = '".$gasp14."',
 muscle1 = '".$muscle1."',muscle2 = '".$muscle2."',muscle3 = '".$muscle3."',muscle4 = '".$muscle4."',muscle5 = '".$muscle5."',muscle6 = '".$muscle6."',muscle7 = '".$muscle7."',
 muscle8 = '".$muscle8."',muscle9 = '".$muscle9."',muscle10 = '".$muscle10."',muscle11 = '".$muscle11."',muscle12 = '".$muscle12."',muscle13 = '".$muscle13."',muscle14 = '".$muscle14."',
 head1 = '".$head1."',head2 = '".$head2."',head3 = '".$head3."',head4 = '".$head4."',head5 = '".$head5."',head6 = '".$head6."',head7 = '".$head7."',
 head8 = '".$head8."',head9 = '".$head9."',head10 = '".$head10."',head11 = '".$head11."',head12 = '".$head12."',head13 = '".$head13."',head14 = '".$head14."',
 liquid1 = '".$liquid1."',liquid2 = '".$liquid2."',liquid3 = '".$liquid3."',liquid4 = '".$liquid4."',liquid5 = '".$liquid5."',liquid6 = '".$liquid6."',liquid7 = '".$liquid7."',
 liquid8 = '".$liquid8."',liquid9 = '".$liquid9."',liquid10 = '".$liquid10."',liquid11 = '".$liquid11."',liquid12 = '".$liquid12."',liquid13 = '".$liquid13."',liquid14 = '".$liquid14."',
 other_detail = '".$other_detail."',
 other1 = '".$other1."',other2 = '".$other2."',other3 = '".$other3."',other4 = '".$other4."',other5 = '".$other5."',other6 = '".$other6."',other7 = '".$other7."',
 other8 = '".$other8."',other9 = '".$other9."',other10 = '".$other10."',other11 = '".$other11."',other12 = '".$other12."',other13 = '".$other13."',other14 = '".$other14."',
 informer1 = '".$informer1."', informer2 = '".$informer2."', informer3 = '".$informer3."', informer4 = '".$informer4."', informer5 = '".$informer5."', informer6 = '".$informer6."', informer7 = '".$informer7."',
 informer8 = '".$informer8."', informer9 = '".$informer9."', informer10 = '".$informer10."', informer11 = '".$informer11."', informer12 = '".$informer12."', informer13 = '".$informer13."', informer14 = '".$informer14."',
 total14 = '".$total14."'
 WHERE id = '".$id."' ";




if ($conn->query($sql) === TRUE) {
	$row_array['message'] = "แก้ไขข้อมูลบุคคลสำเร็จ";
	array_push($return_arr,$row_array);
} else {
	$row_array['message'] =  "แก้ไขข้อมูลบุคคลไม่สำเร็จ " ;
	array_push($return_arr,$row_array);
}









 

mysqli_close($conn);

echo json_encode($return_arr);









?>
