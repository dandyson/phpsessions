<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
</head>
<body>
  
  <div class="container mt-5">
    <div class="row">
      <div class="col-lg-6 m-auto">
        <div class="card bg-dark">
          <div class="card-title bg-primary text-white p-2 text-center">
            <h3>Login form in PHP</h3>
          </div>

          <?php 
            if (@$_GET['Empty']) :
          ?>
            <div class="alert-light text-danger text-center py-3"><?php echo $_GET['Empty'];?></div>
          <?php 
            endif;
          ?>

<?php 
            if (@$_GET['Invalid']) :
          ?>
            <div class="alert-light text-danger text-center py-3"><?php echo $_GET['Invalid'];?></div>
          <?php 
            endif;
          ?>

          <div class="card-body">
            
            <form action="process.php" method="post">
            
              <input type="text" name="username" placeholder="Username" class="form-control mb-4">
              <input type="password" name="password" placeholder="Password" class="form-control">
              <button class="btn btn-success text-center mt-4" name="login">Login</button>
            </form>

          </div>

        </div>
      </div>
    </div>
  </div>
</body>
</html>