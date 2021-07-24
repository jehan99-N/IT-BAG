
<?php
// Connection To The DataBase
$host="localhost";
$user="root";
$password="";
$dbName="graduation_db";
$conn=mysqli_connect($host,$user,$password,$dbName);

session_start();

if(isset($_GET["confirm"]))
{
    $ID = $_GET["ID"];
    $Id_User=(isset($_SESSION['ID']) ? $_SESSION['ID'] : "");
    $query="INSERT INTO favUsers values (default,'$ID','$Id_User')";
    $result=mysqli_query($conn,$query);
}

?>

