<?php
include("functions/init.php");

//echo "https://student.dagloremodelschool.com.ng/qrnt";

$r = date("d");
$s = date("m");

$sql="SELECT * FROM students WHERE `bday` = '0' OR `bday` = ''";
$result_set=query($sql);
while($row= mysqli_fetch_array($result_set))
{
	$h = $row['Date'];
	$g = $row['Month'];

	if($h == $r && $s == $g) {
		
	$admno = $row['AdminID'];

   //update table bday
   $ssl = "UPDATE students SET `bday` = '1' WHERE `AdminID` = '$admno'";
   $rrr = query($ssl);

  


}	 else {


    echo "No record";
}
}
//echo $call['stud']."/qrnt";
  
//echo strtotime($);