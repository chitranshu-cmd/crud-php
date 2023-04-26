<?php include_once("dbn.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
.m{border:1px solid;
}
</style>    
<body>
<?php
$query="select * from newtbl";
$queryrun=mysqli_query($conn,$query);
?>
<div style="height:500px; width:550px; border:5px solid; margin:50px 0 0 470px;">
<table class="m" ">
<tr class=""> 
<th class="m" style="margin:10px 0 0 10px;"> ID </th>
<th class="m">NAME</th>
<th class="m">SURNAME</th>
<th class="m"> CITY </th>
</tr>
<?php
if($queryrun){
    while($row=mysqli_fetch_array($queryrun)){
  ?>
 <table> 
    <tr> 
        <td class="m" ><?php echo $row['id'];?></td>   
        <td class="m"><?php echo $row['name'];?></td>  
        <td class="m"><?php echo $row['surname'];?></td>      
        <td class="m"><?php echo $row['city'];?></td>  
        <td class="m"><a href="edit.php? updat=<?php echo $row['id']; ?>"<button>edit</button></a></td>  
        <td class="m"><a href="delete.php?delet=<?php echo $row['id'];?>"<button>delete</button></a></td>  
    </tr>
</table>
<?php
    }
}
?>
</div>
</body>
</html>