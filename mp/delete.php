<?php
$con=mysqli_connect('localhost','root','','test');
include 'mpadmin.php';
if(isset($_GET['deleteid']))
 {
     $del=$_GET['deleteid'];
     $sqlrun="delete from companyuserdata where Comp_id='$del'";
     $delete=mysqli_query($con,$sqlrun);
if($delete)
{

    echo "updated";
    header("location:mpadmin.php");
}
       


 }


 ?>