<?php 

include "conn.php";
include 'Login-Back.php';

// session_start();


$subject=isset($_POST["subjectstu"]) ? $_POST["subjectstu"] : "";//
$message=isset($_POST['messagestu']) ? $_POST['messagestu'] : "" ; //
$submit=isset($_POST["substudent"]) ? $_POST["substudent"] : "";//

// لعدم إظهار رسالة الخطأ للمستخدم عند النقر على البوتون
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

if(isset($_POST["substudent"])){
    if(empty($subject)||empty($message)){
        $error='Please fill in all required fields';
        $check=false; }
       
        //validation for object
        if(empty($subject)){
            $Error_array['subject']='Please enter a Subject';
            $Error_Flag_object=true;
        }
        elseif(!preg_match('/^[_\s[:alnum:]]+$/',$subject)&&(!preg_match("/\p{Arabic}/u",$subject)))
        {
            $Error_array['subject']='Please enter a subject';
            $Error_Flag_object=true;
        }
        //validation for message
        if(empty($message)){
            $Error_array['message']='Please enter your message';
            $Error_Flag_text=true;
        }
    }
        if($check&&$Error_Flag_text==false&&$Error_Flag_object==false){
              
            if(isset($_POST["substudent"])){

                $namestu=$_SESSION['Name'];
                $emailstu=$_SESSION['email'];
                $query="INSERT INTO contact VALUES (default,'$namestu','$emailstu','$subject','$message')";
                $result=mysqli_query($conn,$query); 
                mysqli_close($conn);

            }
}
       
?>
        
