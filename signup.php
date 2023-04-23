<!DOCTYPE html>
<html>
<head>
	<title>SignUp</title>
	<link rel="stylesheet" type="text/css" href="signup.css">
</head>
<body>
    <div class="main">
  <form action="signup-check.php" method="post" class="form">
     	<h1 class="form-head">Sign Up</h1>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>
<div class="input-box">
          <?php if (isset($_GET['name'])) { ?>
               <input 
                      class="form-input"
                      type="text" 
                      name="name" 
                      placeholder="Name"
                      value="<?php echo $_GET['name']; ?>"><br>
          <?php }else{ ?>
               <input class="form-input"
                      type="text" 
                      name="name" 
                      placeholder="Name"><br>
          <?php }?>
          </div>
          <div class="input-box">
          <?php if (isset($_GET['uname'])) { ?>
               
               <input class="form-input"
                      type="text" 
                      name="uname" 
                      placeholder="User Name"
                      value="<?php echo $_GET['uname']; ?>"><br>
          <?php }else{ ?>
               <input class="form-input"
                      type="text" 
                      name="uname" 
                      placeholder="User Name"><br>
          <?php }?>

          </div>
          <div class="input-box">
     	<input class="form-input"
                 type="password" 
                 name="password" 
                 placeholder="Password"><br>
          </div>
    <Button class="form-btn" type="submit">Sign Up</Button>
          <a href="login1.php" class="ca">Already have an account?</a>
     </form>
          </div>
</body>
</html>


















