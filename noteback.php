<?php 

include 'conn.php';
include 'Login-Back.php';
// include 'note.php';
// session_start();

$subject=$PASSWORD=isset($_POST["subject"]) ? $_POST["subject"] : "";
$desc=isset($_POST["dec_note"]) ? $_POST["dec_note"] : "";
$button=isset($_POST["AddNote"]) ? $_POST["AddNote"] : "";


$erorr=null;
$check=true;

$Erorr_Flag_name=false;
$Erorr_Flag_email=false;

if(isset($_POST['AddNote'])) {
    if(empty($subject) || empty($desc)) {
        $check=false;
        $erorr='Subject And Description Can`t Empty';
    }elseif ($check){
        if(isset($_POST['AddNote'])) {

            $query="insert into notes values(default,'$subject','$desc')";
            $result=mysqli_query($conn,$query);

            $Id_User=(isset($_SESSION['ID']) ? $_SESSION['ID'] : "");

            $query1="select ID from notes ORDER BY ID DESC LIMIT 1";
            $result1=mysqli_query($conn,$query1);

            $row = mysqli_fetch_assoc($result1);
            $ID=$row["ID"];

            $query2="insert into noteuser values(default,$Id_User,$ID)";
            $result2=mysqli_query($conn,$query2);

        }

    }
}

if(isset($_GET['ID'])&&isset($_GET['ID2'])){

    $ID = $_GET["ID"];
    $ID2 = $_GET["ID2"];
    $Id_User_user=(isset($_SESSION['ID']) ? $_SESSION['ID'] : "");

   //  if (isset($_GET['Submit'])){
       $query11="DELETE FROM notes WHERE ID = '{$ID}'";
       $result11=mysqli_query($conn,$query11);
       
       $query10="DELETE FROM noteuser WHERE id_user = '{$Id_User_user}' && id_note = '{$ID2}' ";
       $result10=mysqli_query($conn,$query10);
       
       }
?>