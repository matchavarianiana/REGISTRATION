<?php

if ($_POST['password'] == $_POST['re-password']) {

  echo "Congratulations $_POST[username] Registartion Successful";

} elseif ($_POST['password'] != $_POST['re-password']) {

  echo "Sorry $_POST[username] Your Password Dosn't Match";
  
}

  

?>