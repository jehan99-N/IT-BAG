<?php

include "conn.php";

$name=isset($_POST["name"]) ? $_POST["name"] : "";//
$email=isset($_POST["email"]) ? $_POST["email"] : "";//
$subject=isset($_POST["subject"]) ? $_POST["subject"] : "";//
$message=isset($_POST['message']) ? $_POST['message'] : "" ; //
$submit=isset($_POST["sub-contact"]) ? $_POST["sub-contact"] : "";

$error=null;
$check=true;
$Error_array=array(
    'name'=>'',
    'email'=>'',
    'subject'=>'',
    'message'=>'' );
$Error_Flag_N=false;
$Error_Flag_P=false;
$Error_Flag_text=false;
$Error_Flag_object=false;

if(isset($_POST["sub-contact"])){
    if(empty($name)||empty($email)||empty($subject)){
        $error='Please fill in all required fields';
        $check=false; }
        //validation for name
        if(empty($name)){
            $Error_array['name']='Please enter your name';
            $Error_Flag_N=true;
        }
        elseif(strlen($name)<3){
            $Error_array['name']='The name must contain at least three characters';
            $Error_Flag_N=true;
        }
        elseif(!preg_match('/^[_\s[:alpha:]]+$/',$name)&&(!preg_match("/\p{Arabic}/u",$name))){
            $Error_array['name']='The name must only contain letters';
            $Error_Flag_N=true;
        }
        //validation for email
        if(empty($email)){
            $Error_array['email']='You can use letters,number & periods';
            $Error_Flag_P=true;
        }
        elseif(!preg_match('/^[-_[:alnum:]]+(\.[-_[:alnum:]]+)*@[[:alnum:]]+(\.[[:alnum:]]+)*(\.[[:alpha:]]{2,})$/',$email))
        {
            $Error_array['email']='Please enter your email';
            $Error_Flag_P=true;
        }
        //validation for subject
        if(empty($subject)){
            $Error_array['subject']='Please enter a subject';
            $Error_Flag_object=true;
        }
        elseif(!preg_match('/^[_\s[:alpha:]]+$/',$subject)&&(!preg_match("/\p{Arabic}/u",$subject)))
        {
            $Error_array['subject']='Please enter a correct subject';
            $Error_Flag_object=true;
        }
        //validation for message
        if(empty($message)){
            $Error_array['message']='Please enter your message';
            $Error_Flag_text=true;
        }
        if($check&&$Error_Flag_N==false&&$Error_Flag_P==false&&$Error_Flag_object==false&&$Error_Flag_text==false){
            if('$submit'){
            $query="INSERT INTO contact VALUES (default,'$name','$email','$subject','$message')";
            $result=mysqli_query($conn,$query);
            mysqli_close($conn);
            }}}       

?>