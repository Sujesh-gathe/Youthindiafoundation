<?php
  
  $Msg='';

  if(isset($_GET['error'])
  {
      $Msg='please enter the valid information';
      echo = '<div class="alert alert-danger">'.$Msg.'</div>';

  }

  if(isset($_GET['Success'])){
      $Msg='your message has been send';
      echo = '<div class="alert alert-Success">'.$Msg.'</div>';
  }

?>