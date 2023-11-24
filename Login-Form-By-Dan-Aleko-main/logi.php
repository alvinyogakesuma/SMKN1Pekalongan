<!DOCTYPE html>
<?php include('path.php'); ?>
<?php include(ROOT_PATH . "/app/controllers/users.php"); 
guestsOnly();
?>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form | Dan Aleko</title>
  <link rel="stylesheet" href="font.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
<?php include(ROOT_PATH . "/app/includes/header.php"); ?>
  <div class="wrapper">
    <form action="">
      <h1>Login</h1>
      <?php include(ROOT_PATH . "/app/helpers/formErrors.php"); ?>
      <div class="input-box">
        <input type="text" name="username" value="<?php echo $username; ?>" class="text-input">
        <i class='bx bxs-user'></i>
      </div>
      <div class="input-box">
        <input type="password" name="password" value="<?php echo $password; ?>" class="text-input">
        <i class='bx bxs-lock-alt' ></i>
      </div>
      <button type="submit" name="login-btn" class="btn btn-big">Login</button>
      <div class="register-link">
        <p>Or <a href="<?php echo BASE_URL . '/register.php' ?>">Sign Up</a></p>
      </div>
    </form>
  </div>
</body>
</html>