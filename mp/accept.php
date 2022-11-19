<?php
$con=mysqli_connect('localhost','root','','test');
include 'mpadmin.php';
 if(isset($_GET['acceptid']))
 {
     $acc=$_GET['acceptid'];
     $mainid=$acc;
     $sqlrun="select * from companyuserdata where Comp_id = '$acc'";
     $acc=mysqli_query($con,$sqlrun);
     while($row=mysqli_fetch_assoc($acc))
     {
        $compid=  $row['Comp_id'];
        $compname=  $row['Comp_name'];
        $comprole= $row['Role'];
        $comp10qual=  $row['10thqual'];
        $comp12=  $row['12qual'];
        $compug=    $row['UGqual'];
        $comppg=  $row['PGqual'];
        $compdate=  $row['Applydate'];
        $compoffer=  $row['Offers'];
        $comphistory=  $row['Historyofarrears'];
        $compstand=  $row['Standingarrears'];
        $location=  $row['Location'];
        $Salary=$row['Salary'];

}
$insert="INSERT INTO ACCEPTCOMPANIES VALUES
('$compid','$compname','$comprole','$comp10qual','$comp12','$compug',
'$comppg','$compdate','$compoffer','$comphistory','$compstand','$location','$Salary')";
$querysuccess=mysqli_query($con,$insert);
 }
if($querysuccess)
{
     $del="DELETE FROM COMPANYUSERDATA where Comp_id='$mainid'";
     mysqli_query($con,$del);
     header("location:mpadmin.php");

}
       


 


 ?>