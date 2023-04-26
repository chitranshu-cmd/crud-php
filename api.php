<?php
header('Content-Type:application/json');
header('Acess-Control-Allow-Origin:*');

include "dbn.php";
$sql="select *from newtbl";
$res=mysqli_query($conn,$sql);

if(mysqli_num_rows($res)>0){

    $output=mysqli_fetch_all($res,MYSQLI_ASSOC);
    $json=json_encode($output,JSON_PRETTY_PRINT);
    echo($json);
}

?>