<?php

$con = mysqli_connect('localhost', 'root', '', 'projectuser');

if(!$con){
  die('Could not connect' . mysqli_error());
}else{
  echo "Connected";
}


?>
