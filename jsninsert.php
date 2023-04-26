<?php
header('Content-Type:application/json');
header('Access-Control-Allow-Origin:*');
header('Access-Control_Allow-Headers:Access-Control')

include 'dbn.php';
$sql="select *from newtbl";
$res=mysqli_query($conn,$sql);

if(mysqli_num_rows($res)>0){

    $output=mysqli_fetch_all($res,MYSQLI_ASSOC);
    echo json_encode($output);
}

?>