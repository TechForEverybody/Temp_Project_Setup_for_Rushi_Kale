
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="login.css">
</head>

<div class="main">
  <form action="login.php" method="post" class="form">

    <h1 class="form-head">Log In</h1>
    	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
    <div class="input-box">
      <input class="form-input" type="text" name="uname" placeholder="" required>
      <label for="" class="form-label">Username</label>
    </div>

    <div class="input-box">
      <input class="form-input" type="password" name="password" placeholder="" required>
      <label for="" class="form-label">Password</label>
    </div>

    <Button class="form-btn" type="submit">Log In</Button>
    <a href="signup.php" class="ca">Create an account</a>

  </form>
</div>