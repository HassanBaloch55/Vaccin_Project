<?php
include('connect.php');
//Code for deletion
if(isset($_GET['id']))
{
$id=intval($_GET['id']);
$sql=mysqli_query($conn,"delete from hospital_bookings where id =$id");
echo "<script>alert('Your Hospital Booking Has Been Cancled ! ');</script>"; 
echo "<script>window.location.href = 'parent_booking.php'</script>";     
} ;




?>