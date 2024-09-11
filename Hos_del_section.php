<?php
include('connect.php');
//Code for deletion
if(isset($_GET['V_id']))
{
$id=intval($_GET['V_id']);
$sql=mysqli_query($conn,"delete from vaccination_status where V_id =$id");
echo "<script>alert('Data deleted');</script>"; 
echo "<script>window.location.href = 'hos_vaccine-update.php'</script>";     
} ;

?>

<?php
include('connect.php');
//Code for deletion
if(isset($_GET['Id']))
{
$id=intval($_GET['Id']);
$sql=mysqli_query($conn,"delete from vaccine_updates where Id =$id");
echo "<script>alert('Data deleted');</script>"; 
echo "<script>window.location.href = 'hos_vaccine-update.php'</script>";     
} ;




?>