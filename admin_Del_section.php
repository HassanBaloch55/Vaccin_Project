<?php
// Deleting  from   Child vaccine status
include('connect.php');
//Code for deletion
if(isset($_GET['V_id']))
{
$id=intval($_GET['V_id']);
$sql=mysqli_query($conn,"delete from vaccination_status where V_id =$id");
echo "<script>alert('Data deleted');</script>"; 
echo "<script>window.location.href = 'admin.child_details.php'</script>";     
} ;

?>
  <!-- Deleting from HospitalsList -->
<?php
include('connect.php');
//Code for deletion
if(isset($_GET['id']))
{
$id=intval($_GET['id']);
$sql=mysqli_query($conn,"delete from hospital_register where id =$id");
echo "<script>alert('Data deleted');</script>"; 
echo "<script>window.location.href = 'admin_Hos_list.php'</script>";     
} ;

?>
   <!-- delete Hospital notications  -->
<?php
include('connect.php');
//Code for deletion
if(isset($_GET['N_id']))
{
$id=intval($_GET['N_id']);
$sql=mysqli_query($conn,"delete from vaccinations_notification where N_id =$id");
echo "<script>alert('Data deleted');</script>"; 
echo "<script>window.location.href = 'admin_par_notify.php'</script>";     
} ;

?>
<?php
include('connect.php');
//Code for deletion
if(isset($_GET['Id']))
{
$id=intval($_GET['Id']);
$sql=mysqli_query($conn,"delete from contact_us where Id =$id");
echo "<script>alert('Data deleted');</script>"; 
echo "<script>window.location.href = 'admin_panel.php'</script>";     
} ;

?>