<?php
include "conn.php";
session_start();
// Get UserName And Password
$SUBMIT=$PASSWORD=isset($_POST["Submit"]) ? $_POST["Submit"] : "";
$USERNAEM=isset($_POST["UserName"]) ? $_POST["UserName"] : "";
$PASSWORD=isset($_POST["Password"]) ? $_POST["Password"] : "";
// Variable For Errors

$error = null;
$check_log = true;
$Error_flag_ERROR=false;
$Error_flag_passlog=false;
$Error_array=array(
// register errors
    'ERRORlog'>='',
    'passlog'>='');

// If User Click On Submit Button
if($SUBMIT){ 
    if(empty($USERNAEM) || empty($PASSWORD)){
        $error="Please Enter Username & Password";
        $check_log = false;
    }
    else{
        //Select From Admin Table.....
        $query1="SELECT * FROM admin WHERE Admin_Name='$USERNAEM'";
        $result1=mysqli_query($conn,$query1);
        if($row1=mysqli_fetch_assoc($result1)){
            $_SESSION['Name']=$row1['Admin_Name'];
            $Admin_password = $row1['Password'];
            if($PASSWORD == $Admin_password){
                header('Location: Admin_Profile.php');
            }
            else{
                $Error_array['ERRORlog']="incorrect password";
                $Error_flag_ERROR=true;
            }
        }
        //Select From User Table.....
        $query="SELECT * FROM users WHERE username='$USERNAEM'";
        $result=mysqli_query($conn,$query);
        if($row=mysqli_fetch_assoc($result)){
            $db_password = $row['password'];
            $_SESSION['Name']=$row['username'];
            $_SESSION['email']=$row['email'];
            $_SESSION['phone']=$row['phone'];
            $_SESSION['question']=$row['question'];
            $_SESSION['ID']=$row['ID'];
            $_SESSION['display']= $row['display_name'];
            $_SESSION['image']= $row['Image_User'];
            $_SESSION['BIO']= $row['Bio'];
            $_SESSION['intersted']= $row['Intersted'];
            if($PASSWORD == $db_password){
                $query1="INSERT INTO favUsers values ('1','1')";
                $result1=mysqli_query($conn,$query1);
                if($_SESSION['question'] == 'yes') {

                    header('Location: profile.php');
                } else {
                    header('Location: pprofile.php');
                }
               
            }
            else{
                $_SESSION["block"] += 1;
                $Error_array['passlog']="incorrect password";
                $Error_flag_passlog=true;
            }
        }
        else{
            
            $Error_array['ERRORlog']="Please Ckeck Your Email And PassWord";
            $Error_flag_ERROR=true;
        }
    }
}

if(isset($_SESSION["locked"])){
    $diff = time() - $_SESSION["locked"];
    if($diff > 15){
    unset($_SESSION["locked"]);
    unset($_SESSION["block"]);
    }
}
//To Chek Session If Empty
if(!isset($_SESSION["block"])){
    $_SESSION["block"] = 0;
}
?>