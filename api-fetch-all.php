<?php
header('Content-Type:application/json');
header('Acess-Control-Allow-Orgin: *');
include "config.php";
$sql = "SELECT * FROM articles";
$result = mysqli_query($conn, $sql) or die("SQL Query Failed");
if(mysqli_num_rows($result)>0){
    $output = mysqli_fetch_all($result, MYSQLI_ASSOC);
    echo json_encode($output);

}else{
    echo json_encode(array('message'=>'no Record Found','status'=>false));
}

?>