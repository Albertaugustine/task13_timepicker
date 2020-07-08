
<?php
$conn=new mysqli("localhost","root","","intern");

$put=file_get_contents('php://input');
$data=(array)json_decode($put, true);

//print_r($data);
if(count($data) > 0)
{
    
    $squery="INSERT INTO `taketime` (`time`) VALUES ('".$data[0]['time']."')";  
    if(mysqli_query($conn,$squery))
    {
        echo "success";
    }



}




?>