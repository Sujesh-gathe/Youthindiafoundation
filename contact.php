<?php
  
  if(isset($_POST['btn-send']))
  {
        $Username = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $message = $_POST['message'];

        if(empty($Username)||empty($email)||empty($phone)||empty($message))
        {
            header('location:index.php?error');
        }

        else{
            $to = 'Sujeshgathe54@outlook.com';

            if(mail($to,$phone,$message,$email))
            {
                header('location:index.php?Success');
            }
        }
  }
  else{
      header('location:contact.html');
  }

?>