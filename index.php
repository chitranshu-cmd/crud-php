<?php include_once("dbn.php");  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div style="height:500px; width:500px;margin:auto; border:3px solid;">
    <form action="" method="post">
 <div style="height:200px; width:430px;margin:20px 0 0 50px;">
<label>name</label>
<input type="text" name="name"/><br></br>

<label>surname</label>
<input type="text" name="surname"/><br></br>

<label>city</label>
<input type="text" name="city"/><br></br>

<input type="submit" name="submit" value="submit"/>
</div>
    </form>
   <button> <a href="disp.php" style="text-decoration:none;">disp</a></button>
<button><a href="api.php"style="text-decoration:none;" >dispapi</a></button>
</div>
</body>
</html>
<?php
if(isset($_POST['submit'])){
$name=$_POST['name'];
$surname=$_POST['surname'];
$city=$_POST['city'];

$req="INSERT INTO newtbl(name,surname,city)VALUES('$name','$surname','$city')";
$resu=mysqli_query($conn,$req);

}

?>
