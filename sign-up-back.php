<?php 

include 'conn.php';


$name=isset($_POST['Uname']) ? $_POST['Uname'] : "" ;//
$email=isset($_POST['email-Up']) ? $_POST['email-Up'] : "";//
$phone=isset($_POST['phone-Num']) ? $_POST['phone-Num'] : "";//
$password=isset($_POST['Pass-Up']) ? $_POST['Pass-Up'] : "";//
$repassword=isset($_POST['Rpass-Up']) ? $_POST['Rpass-Up'] : "";//
$select=isset($_POST['flexRadioDefault']) ? $_POST['flexRadioDefault'] : "";//
$submit=isset($_POST['sub-up']) ? $_POST['sub-up'] : "";//

//////////////////////////////////////////////////////////

$error=null;
$check=true;

$Error_array=array(
    'name'=>'',
    'email'=>'',
    'phone'=>'',
    'pass'=>'',
    're_pass'=>''
);

$Error_Flag_name=false;
$Error_Flag_email=false;
$Error_Flag_phone=false;
$Error_Flag_pass=false;
$Error_Flag_repass=false;

if(isset($_POST['sub-up'])){
    if( empty($name) || empty($email) || empty($phone) || empty($password) || empty($repassword) ){
        $error='Please fill in all required fields';
        $check=false;
    }
   
    //Validation For Name.. 
    if(empty($name)){
        $Error_array['name']="Please enter a username.";
        $Error_Flag_name=true;
    }
    elseif(strlen($name)<3){
        $Error_array['name']="Please the lengthen this text to three characters or more";
        $Error_Flag_name=true;
    }
    elseif(!preg_match('/^[[:alpha:]]+$/',$name)&&(!preg_match("/\p{Arabic}/u",$name))){
        $Error_array['name']="Only letters should be used";
        $Error_Flag_name=true;
    }

    //Validation For Email.. 
    if(empty( $email)){
        $Error_array['email']="Please enter your email";
        $Error_Flag_email=true;
    }

    elseif (!preg_match('/^[-_[:alnum:]]+(\.[-_[:alnum:]]+)*@[[:alnum:]]+(\.[[:alnum:]]+)*(\.[[:alpha:]]{2,})$/',$email)){
        $Error_array['email']="Please enter a valid email";
        $Error_Flag_email=true;
    }

    //Validation For Phone.. 
    if(empty($phone)){
        $Error_array['phone']="Please enter a valid phone number";
        $Error_Flag_phone=true;
     }
     elseif (strlen($phone)< 10 ){
      $Error_array['phone']="The phone number must be ten characters";
      $Error_Flag_phone=true;
     }
     elseif(!preg_match('/^([0-9]{10})$/',$phone)){
      $Error_array['phone']="Make sure you have entered 10 numbers";
      $Error_Flag_phone=true;
     }

     //Validation For Password.. 
     if(empty($password)){
        $Error_array['pass']="Please enter a valid password";
       $Error_Flag_pass=true;
      
    }
    elseif(!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@@#\$%\^&\*])(?=.{8,})/',$password)){
        $Error_array['pass']="Password must contain at least 8 characters";
        $Error_Flag_pass=true;
    }

    //validation re_password
    if(empty ($repassword)){
        $Error_array['re_pass']="The password cannot be empty";
        $Error_Flag_repass=true;
    }


    elseif($repassword!=$password){
        $Error_array['re_pass']="Password does not match";
        $Error_Flag_repass=true;
    }

    //Validation For Select.. 
     //validation for money
    //  if($select=='yes'){
    //     if (empty($uninum)){
    //         $Error_array['unino']='Please enter your phone number';
    //         $Error_Flag_uni=true;
    //     }
    //     elseif(!preg_match('/^([0-9]{10})$/',$uninum)){
    //         $Error_array['unino']='The number must be numbers only';
    //         $Error_Flag_uni=true;
    //     }
    // }

   
   //////////////////////////////////////////////////////// End validation
   // 2- 3-NAME 
  
    if($check&&$Error_Flag_name==false&&$Error_Flag_email==false&&$Error_Flag_phone==false &&$Error_Flag_pass==false &&$Error_Flag_repass==false){
    
        if(isset($_POST['sub-up'])){
            
            $query1000="INSERT INTO users VALUES (default,'$name','$email','$phone','$password','$select','','','','')";
            $result1000=mysqli_query($conn,$query1000);
            }
        }
    }
    



?>