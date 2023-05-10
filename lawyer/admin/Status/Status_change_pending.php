<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	
<?php

include_once('../include/db.php');
 
$id = $_GET['id'];


$query="UPDATE `orders` SET `order_status`='Pending' WHERE `id`='$id'";
$result=mysqli_query($con,$query);

if($result)
{
    echo "<script type='text/javascript'> alert('Status Change Sucessfully!');window.location='../orders.php' </script>";


}else
{
    header('location:../orders.php');
}
?>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>