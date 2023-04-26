<?php include_once('dbn.php');  ?>

<?php
$eid=$_GET['updat'];

 $edt="select * from newtbl where id=$eid";
 $data=mysqli_query($conn,$edt);
 $rm=mysqli_fetch_array($data);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form  action="#" method="post">
        id <input value="<?php echo $rm['id'] ?>" type="text" name="id"/> <br><br>
        name <input value="<?php echo $rm['name'] ?>" type="text" name="name"/> <br><br>
        surname <input value="<?php echo $rm['surname'] ?>" type="text" name="surname"/> <br><br>
        city <input value="<?php echo $rm['city'] ?>" type="text" name="city"/> <br><br>
        <input type="submit" name="update"/>

    </from>
</body>
</html>

<?php
if(isset($_POST['update'])){
$id=$_POST['id'];
$name=$_POST['name'];
$surname=$_POST['surname'];
$city=$_POST['city'];

$update="update newtbl set id='$id',name='$name',surname='$surname',city='$city'where id=$eid";
$result=mysqli_query($conn,$update);

if($result){

    header('location:disp.php');
}
else{
    echo"error";
}

}
?>
  



















