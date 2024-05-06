<?php

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');
header("Access-Control-Allow-Headers: X-Requested-With");
include ("config.php");


$request = file_get_contents("php://input");
$output = explode("#", $request);

$username = $output[0];
$password = $output[1];
$Datalist = array();
// $query = mysqli_query($con, "SELECT * FROM ka_member WHERE membercode='$membercode' and password='$password' and isactive='1'");
// echo "SELECT * FROM member WHERE password='$Password' AND email='$Username'";
// while ($row = mysqli_fetch_assoc($query)) {
//     array_push($Datalist, $row);
// }
// if (count($Datalist) > 0) {
//     echo json_encode($Datalist[0]);
// } else {
//     echo json_encode(array("alert" => "Failed"));
// }

if ($username == 'varma' && $password == 'varma') {
    echo ('login completed');
} else {
    echo ('login failed');


}
?>