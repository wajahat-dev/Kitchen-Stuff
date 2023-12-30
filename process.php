<?php 
    if(isset($_POST['btn-send']))
    {
       $UserName = $_POST['UName'];
       $Email = $_POST['Email'];
       $Phone = $_POST['Phone'];
       $Subject = $_POST['Subject'];
       $Msg = $_POST['msg'];
       if(empty($UserName) || empty($Email) || empty($Phone) || empty($Subject) || empty($Msg))
       {
           header('location:index.php?error');
       }
       else
       {
           $to = "adsolnet8@gmail.com";
           if(mail($to,$Subject,$Msg,$Email))
           {
               header("location:index.php?success");
           }
       }
    }
    else
    {
        header("location:index.php");
    }
?>