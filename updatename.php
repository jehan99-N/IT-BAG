<?php 

include 'conn.php';
// include 'Login-Back.php';

$display_name= isset($_POST['displayname']) ? $_POST['displayname'] : '';


$error = null;
$check = true;
$check1 = true;
$Error_flag_DName=false;
$Error_flag_File=false;
$Error_array=array(
    'DName'>='');

    //Display Name>>>>>
$Bio= isset($_POST['textarea']) ? $_POST['textarea'] : '';
$Intersted= isset($_POST['intersted']) ? $_POST['intersted'] : '';
$check2= true;
$Error_flag_textarea= false;
$Error_flag_intersted= false;

    if(isset($_POST['changename'])) {
        if(empty($display_name)) {
            $error="Please Enter Display Name";
            $check = false;
        }
    
        //Validation For Name.. 
    if(empty($display_name)){
        $Error_array['DName']="The name cannot be empty";
        $Error_flag_DName=true;
    }
    elseif(strlen($display_name)<3){
        $Error_array['DName']="The name must contain at least three characters";
        $Error_flag_DName=true;
    }
    elseif(!preg_match('/^[_\s[:alpha:]]+$/',$display_name)&&(!preg_match("/\p{Arabic}/u",$display_name))){
        $Error_array['DName']="Only letters should be used";
        $Error_flag_DName=true;
    }
}

    if($check && $Error_flag_DName==false) {
        if(isset($_POST['changename'])) {
            $Id_User=(isset($_SESSION['ID']) ? $_SESSION['ID'] : "");
            $query="UPDATE users SET display_name = '{$display_name}' WHERE ID = '{$Id_User}'";
            $result=mysqli_query($conn,$query);
            $_SESSION['display'] = $display_name;
        }
    }



    // Insert Image.... 
    if(isset($_POST['changeimage'])) {
        $filename = $_FILES["fileimg"]["name"];
        if(empty($filename)) {
            $check1= false;
        }

    
    if($check1 && $Error_flag_File==false) {
        if(isset($_POST['changeimage'])) {
            $Id_User=(isset($_SESSION['ID']) ? $_SESSION['ID'] : "");
            $query1="UPDATE users SET Image_User = '{$filename}' WHERE ID = '{$Id_User}'";
            $result1=mysqli_query($conn,$query1);
            $_SESSION['image'] = $filename;
        }
    }
}


////////////////////////////////Bio And Intersted.... 


if(isset($_POST['subbio'])) {
    if(empty($Bio) || empty($Intersted)) {
        $check2=false;
        
    }
}
    if($check2 && $Error_flag_textarea==false && $Error_flag_intersted==false) {
        if(isset($_POST['subbio'])) {
            $Id_User=(isset($_SESSION['ID']) ? $_SESSION['ID'] : "");
            $query3="UPDATE users SET Bio = '{$Bio}' , Intersted = '{$Intersted}' WHERE ID = '{$Id_User}'";
            $result3=mysqli_query($conn,$query3);
            $_SESSION['intersted'] = $Intersted;
            $_SESSION['BIO'] = $Bio;
        }
    }




?>