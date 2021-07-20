<?php


include('connect.php');
if(isset($_POST['Transfer']))
{

$sname=$_POST['sendName'];
$sacc=$_POST['sendAcc'];
$rname=$_POST['recName'];
$racc=$_POST['recAcc'];
$amt=$_POST['amount'];
$msg=$_POST['message'];


include('connect.php');
$sql= 'select * from banktb where acc ="'.$sacc.'"';
echo $conn->error;
$query= mysqli_query($conn,$sql);
$sql1=mysqli_fetch_array($query);
echo $conn->error;
$sql= 'select * from banktb where acc="'.$racc.'"';
$query= mysqli_query($conn,$sql);
$sql2=mysqli_fetch_array($query);
echo $conn->error;
echo $amt;
echo $conn->error;
echo $sql1['balance'];
echo $conn->error;
if(($amt) < 0)
{

        echo '<script type="text/javascript">';
        echo 'alert("negative value cannot be entered")';
        echo '</script>';
}
else if(($amt) > $sql1['balance'])
{
        echo '<script type="text/javascript">';
        echo 'alert("Insufficient Balance")';
        echo '</script>';
}
else{

        $new= $sql1['balance'] - $amt;
        echo $conn->error;
        $sql= 'UPDATE banktb set balance= "'.$new.'" where acc="'.$sacc.'"';
        mysqli_query($conn,$sql);
        $new= $sql2['balance'] + $amt;
        $sql= 'UPDATE banktb set balance= "'.$new.'" where acc="'.$racc.'"';
        mysqli_query($conn,$sql);


        $sql=mysqli_query($conn,"insert into `transfer`(`sendName`,`sendAcc`,`recName`,`recAcc`,`amount`,`message`)values('".$sname."','".$sacc."','".$rname."','".$racc."','".$amt."','".$msg."') ")or die (mysqli_error($conn));

mysqli_error($conn,$sql);
        if($sql)
        {

               
                header('location:success.php');

        }

        $new=0;
        $amt=0;
}
}
?>


