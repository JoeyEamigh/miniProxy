<?php
echo $_SESSION['is_auth'];
if (isset($_SESSION['is_auth']) && $_SESSION['is_auth'] == "true") {
  header("location:index.php");
}
if($_SERVER["REQUEST_METHOD"] == "POST"){
  if(empty(trim($_POST["password"]))){
         echo "<h1 style='color:red;text-align:center;'>Please enter your password.</h1>";
    } else{
        $password = trim($_POST["password"]);
        if ($password == "bypass") {
          session_start();
          $_SESSION['is_auth'] = 'true';
          header("location:index.php");
        }else {
          echo "error";
        }
    }
}
?>
<!DOCTYPE html>
<body style="text-align:center;">
  <form style="width:80%;" action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
    <label>Password?</label><br>
    <input style="text-align:center; width:80%;" type="password" autocomplete="password" name="password"><br>
    <input type="submit" value="Login">
  </form>
</body>
