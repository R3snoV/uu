<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
$host="sql7.freesqldatabase.com";
$user="sql7594632";
$pass="dn7fF8z8mh";
$db="sql7594632";

$con= new mysqli($host,$user,$pass,$db);
if(!$con){
    echo"There are some problem while connecting the database";
}

$name= $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];


$qry="INSERT INTO `contact`( `name`, `email`, `message`) VALUES ('$name','$email','$message')";

$insert=mysqli_query($con,$qry);
if(!$insert){
    echo"There are some problem while inserting data";

}
else{
    echo"Data Inserted";
}
}
?>
