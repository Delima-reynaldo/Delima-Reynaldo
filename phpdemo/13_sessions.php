<?php
session_start();

if(isset($_POST['submit'])){


$Username = filter_input(INPUT_POST, 'Username', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$password =  $_POST['password'];
echo $name;
// $age = filter_input(INPUT_POST, 'age', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

if ($username =='ryan' && $password == 'password') {
    //Set Session variable
$_SESSION['username'] = $username;

//Redirect user to another page
header('Location: /SP404/phpdemo/extras/dashboard.php');
} else {
  echo 'Incorrect username or password';
 }
}

?>


<form action="<?php echo ($_SERVER['PHP_SELF']); ?>" method="POST">
<div>
    <label for="Username">  Username:</label>
    <input type="text" name="Username">
</div>
<br>
<div>
<label for="password">password:</label>
    <input type="password" name="password">
</div>
<br><br>
<input type="submit" name="submit" value="Submit">

</form>