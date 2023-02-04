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
}
?>
<!DOCTYPE html>
<html lang="en">
<style>
 button{
   
    width: 150px;
    height: 50px;
    border-radius: 30PX;
    margin-top: 70px;
    font-weight: bold;
    font-size: 15px;
    cursor: pointer;
    background-color: #059f64;
    color: white;
    border: none;
    transition: 0.4s;
    letter-spacing: 1px;
    position: absolute;
    top:60px;
}
button:hover {
    background-color: transparent;
    border: 1px solid #059f64;

}
 
</style>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color:rgb(21, 20, 20);font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
<h1 style="color: #059f64;">The message have been send successfully !</h1>
<a href="index.html#section4"><button>Go Back</button></a>
</body>
</html>
