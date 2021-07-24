<?php
include "conn.php";
session_start();

////////// Fetch Data From Session
$nameSE=  $_SESSION['Name'];
$emailSE=  $_SESSION['email'];
$phoneSE=  $_SESSION['phone'];
///////////////////////////////////////////////////////////
$name=isset($_POST["namestu"]) ? $_POST["namestu"] : "";//
$email=isset($_POST["emailstu"]) ? $_POST["emailstu"] : "";//
$phone=isset($_POST["phonestu"]) ? $_POST["phonestu"] : "" ;//
$old_pass=isset($_POST["old-passstu"]) ? $_POST["old-passstu"] : "";//
$new_pass=isset($_POST["new-passstu"]) ? $_POST["new-passstu"] : "" ;//
$re_pass=isset($_POST["rnew-passstu"]) ? $_POST["rnew-passstu"] : "" ;//
$button=isset($_POST["sub-edit-stu"]) ? $_POST["sub-edit-stu"] : "" ; //

$erorr=null;
$check=true;
$Erorr_array=array(

    "name"=>"",
    "email"=>"",
    "old_pass"=>"",
    "new_pass"=>"",
    "re_pass"=>"",
    "phone"=>""  
);
$Erorr_Flag_name=false;
$Erorr_Flag_email=false;
$Erorr_Flag_old_pass=false;
$Erorr_Flag_new_pass=false;
$Erorr_Flag_re_pass=false;
$Erorr_Flag_phone=false;


if(isset($_POST["sub-edit-stu"])){
    if(empty($old_pass)) {
        $erorr="Required values must be entered";
        $check=false;
    }
    //validation name
    if($name != null){
    if(empty($name)){
        $Erorr_array['name']="The name cannot be empty";
        $Erorr_Flag_name=true;
    }
    if(!strlen($name)>3){
        $Erorr_array['name']="The name must contain at least three characters";
        $Erorr_Flag_name=true;
    }
    elseif(!preg_match('/^[_\s[:alpha:]]+$/',$name)&&(!preg_match("/\p{Arabic}/u",$name))){
        $Erorr_array['name']='Only letters should be used';
        $Erorr_Flag_name=true;
    }}else{ $name = $nameSE;}
    
    //validation email
    if($email != null){
    if(empty($email)){
        $Erorr_array['email']="The email cannot be empty";
        $Erorr_Flag_email=true;
    }
    if(!preg_match('/^[-_[:alnum:]]+(\.[-_[:alnum:]]+)*@[[:alnum:]]+(\.[[:alnum:]]+)*(\.[[:alpha:]]{2,})$/',$email))
    {
        $Erorr_array['email']='A valid email is required';
        $Erorr_Flag_email=true;
    }}else { $email = $emailSE;}
    //validation old_pass
    if(empty($old_pass)){
        $Erorr_array['old_pass']="The password cannot be empty";
        $Erorr_Flag_old_pass=true;
    }
    elseif(!empty($old_pass)) {
        $id_user= $_SESSION['ID'];
        $query100="SELECT * FROM users WHERE ID = '$id_user' ";
        $result100=mysqli_query($conn,$query100);
        while($row100=mysqli_fetch_assoc($result100)){
            $dbpass=$row100['password'];
            if($old_pass != $dbpass){
                $Erorr_array['old_pass']="Not Match Password";
                $Erorr_Flag_old_pass=true;
            }
        }
    }
    
    elseif(!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@@#\$%\^&\*])(?=.{8,})/', $old_pass)){
        $Erorr_array['old_pass']="Use 8 or more characters with a mix of letters, numbers & symbols";
        $Erorr_Flag_old_pass=true;
    }
    //validation new_pass
    if($new_pass != null || $re_pass != null){
        if(empty($new_pass)){
            $Erorr_array['new_pass']="The password cannot be empty";
            $Erorr_Flag_new_pass=true;
        }
        elseif(empty($re_pass)){
            $Erorr_array['re_pass']="The password cannot be empty";
            $Erorr_Flag_re_pass=true;
        }
        elseif(!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@@#\$%\^&\*])(?=.{8,})/', $new_pass) && (!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@@#\$%\^&\*])(?=.{8,})/',$re_pass))){
            $Erorr_array['new_pass']="Use 8 or more characters with a mix of letters, numbers & symbols";
            $Erorr_Flag_new_pass=true;
            $Erorr_array['re_pass']="Use 8 or more characters with a mix of letters, numbers & symbols";
            $Erorr_Flag_re_pass=true;
        }
        elseif($re_pass != $new_pass){
            $Erorr_array['re_pass']="Repeat Password Not Match With A New Password";
            $Erorr_Flag_re_pass=true;
        }
    } //Closed To Main If
    else{
        $new_pass=$old_pass;
    }
   
    //validation phone
    if($phone != null){
    if(empty($phone)){
        $Erorr_array['phone']="The phone number cannot be empty";
        $Erorr_Flag_phone=true;
    }
    if(!preg_match('/^[0-9]{10}$/',$phone))
    {
        $Erorr_array['phone']="The phone number must consist of numbers only";
        $Erorr_Flag_phone=true;
    }}else {$phone = $phoneSE;}


}

    //////////////////////////////////////////////////////////////////////////////////////



    $id_per=isset( $_SESSION['ID']) ?  $_SESSION['ID'] : "";
    
    if ($check&&$Erorr_Flag_name==false&&$Erorr_Flag_email==false&&$Erorr_Flag_old_pass==false&&$Erorr_Flag_new_pass==false&&$Erorr_Flag_re_pass==false&&$Erorr_Flag_phone==false){
        if(isset($_POST['sub-edit-stu'])){
            
            $query1= "UPDATE users SET username='$name',email='$email',Phone='$phone',password='$new_pass' where ID='$id_per'";
            $Result=mysqli_query($conn,$query1);

        }
    }







?> 