<?php include_once('dbn.php');   ?>

<?php
if(isset($_GET['delet'])){
$sid=$_GET['delet'];

$sql="delete from newtbl where id=$sid";
$result=mysqli_query($conn,$sql);
if($result){
header('location:disp.php');
}
else{
    die('error');
}
}
?>