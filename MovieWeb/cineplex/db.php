<?php
$servername="localhost";
$username="root";
$password="";
$dbname="cineplex_db";

try
{
$conn=new mysqli($servername,$username,$password,$dbname);

    if($conn->connect_error){
        die("connection faild ".$conn->connect_error);
    }
    else{
      //  echo "connected";
    }
} catch(Exception $e)
{
    echo"Message:".$e->getMessage();
}
?>

