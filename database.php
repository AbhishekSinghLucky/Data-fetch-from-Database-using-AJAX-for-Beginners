<?php
include "connection.php";

$myArray1=array();
$myArray2=array();
$myArray3=array();
$myArray4=array();

$sql= "SELECT * from records";
$result= mysqli_query($conn,$sql);
while($row = mysqli_fetch_array($result))
{
    array_push($myArray1,$row["id"]);
    array_push($myArray2,$row["name"]);
    array_push($myArray3,$row["class"]);
    array_push($myArray4,$row["roll"]);

}
//print_r($myArray1[]);die;
//for($i=0;$i<2;$i++){
$data = [
    'id' => $myArray1,
   'name' => $myArray2,
    'class' => $myArray3,
    'roll' => $myArray4
];
    
header('Content-Type: application/json');
$value1 =json_encode($data);
echo $value1;
//}
//    echo $val;echo "<br>"; 
//    echo $row["name"];
//    echo $row["class"];
//    echo $row["roll"];
//        echo "Name  = ".$val." ";
//echo $val;
//$data = [
//    'id'  =>  $row["id"],    
//    'name'  =>  $row["name"],
//    'class'  =>  $row["class"],
//    'roll'  =>  $row["roll"]
//];
//header('Content-Type: application/json');
//$value1 =json_encode($data);
//echo $value1;
?>