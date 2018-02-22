<?php
function createUser($fname, $username, $password, $email, $userlvl){
  include('connect.php'); //the second NULL is for time, the third NULL is for ip address
  $userString = "INSERT INTO tbl_user VALUES(NULL, '{$fname}', '{$username}', '{$password}', '{$email}', NULL, '{$userlvl}', 'no')";
  //echo $userString;
  $userQuery = mysqli_query($link, $userString);
  if($userQuery){ //if successful
    redirect_to("admin_index.php");
  }else{ //if fails
    $message = "There was a problem setting up this user.";
    return $message;
  }
//Encryption of the user password
  $userPass = 'hiddenvalue';  //password plain
  $choices = ['cost' => 11]; //hash speed
  echo password_hash($userPass, PASSWORD_DEFAULT, $choices);

//and veryifying it
  $passHash = 'HcJjiP73M8B2p90cha4Tc%940$6h79$m6%'; //long number/character mix to make difficult to guess
  if (password_verify('hiddenvalue', $passhash)) { //if the passHash is correct
    echo 'This Password is Correct'; //show message telling password is correct
  }else{ //else if password is wrong
    echo 'This Password is Not Correct'; //show message telling password is wrong
  }

  mysqli_close($link);
}

 ?>
