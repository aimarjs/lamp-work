<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Welcome to DevOps to AWS!</title>
  </head>
  <body>
    <?php
      require 'Welcome.php';
      $welcome = new Welcome();
    ?>
    <h1><?php echo $welcome->greet() ?></h1>
    <h2>Countinues integration and deployment<h2>
  </body>
</html>
