<?php
include("functions/init.php");

//echo "https://student.dagloremodelschool.com.ng/qrnt";

$sql = "SELECT * FROM staff WHERE `bday` = '0' OR `bday` = '' GROUP BY `tel1` ";
$res = query($sql);
while($row = mysqli_fetch_array($res)){

echo $row['surname'];
}
//echo $call['stud']."/qrnt";
  
//echo strtotime($);