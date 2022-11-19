<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./main.css">
</head>
<body>
<section class="vh-100">
  <div class="container py-5 h-100">
    <div class="row d-flex align-items-center justify-content-center h-100">
      <div class="col-md-8 col-lg-7 col-xl-6">
        <img src="./img/login.svg"
          class="img-fluid" alt="Phone image">
      </div>
      <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
      <?php if (isset($_GET['error'])) { ?>
                    <p class="text-danger"> <?php echo $_GET['error']; ?> </p>
                <?php }?>
        <form action="login_processing.php" method="post">
          <!-- Email input -->
          <div class="form-outline mb-4">
            <input name="uname" id="uname" class="form-control form-control-lg" />
            <label class="form-label" for="uname">User Name</label>
          </div>

          <!-- Password input -->
          <div class="form-outline mb-4">
            <input name="password" type="password" id="password" class="form-control form-control-lg" />
            <label class="form-label" for="password">Password</label>
          </div>

          <div class="d-flex justify-content-around align-items-center mb-4">
            <a href="#!">Forgot password?</a>
          </div>

          <!-- Submit button -->
          <div class="d-grid gap-2 col-6 mx-auto">
              <button type="submit" class="btn btn-primary btn-lg btn-block">Sign in</button> 
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
   
</body>
</html>