<?php include "header.php" ?>
<body>

<form action="" method="POST">
<label>Name</label>
<input type="text" name="name">
<br>
<label>Email</label>
<input type="email" name="email">
<br>
<label>Password</label>
<input type="password" name="password">
<br>
<button type="submit" name="subBtn" value="submit">Submit</button>
</form>

<?php
if(isset($_POST['subBtn'])){

$name = mysqli_real_escape_string($con, $_POST['name']);
$email = mysqli_real_escape_string($con, $_POST['email']);
$password = mysqli_real_escape_string($con, $_POST['password']);

$sql = "SELECT email FROM user WHERE email='$email'";
$result = mysqli_query($con, $sql);

if(strlen($password) >= 8){

  if(mysqli_num_rows($result) == 1){
    echo "This email is taken";
  }else {
    $query = mysqli_query($con, "INSERT INTO user (name,email,password) VALUES ('$name','$email','$password')");
    if($query){
      echo "Registerd";
    }else {
      echo "Could not regiser";
    }
  }
}else {
  echo "To short password";
}

}


?>

</body>
<?php include "footer.php" ?>
