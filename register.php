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
        <form action="register_processing.php" method="post">
        <?php if (isset($_GET['error'])) { ?>
                    <p class="text-danger"> <?php echo $_GET['error']; ?> </p>
                <?php }?>
            <!-- Name input -->
          <div class="form-outline mb-4">
            <input name="name" id="name" class="form-control form-control-lg" />
            <label class="form-label" for="name">Full Name</label>
          </div>
          <!-- Email input -->
          <div class="form-outline mb-4">
            <input name="uname" id="uname" class="form-control form-control-lg" />
            <label class="form-label" for="uname">User Name</label>
          </div>

          <!-- Password input -->
          <div class="form-outline mb-4">
            <input name="pass" type="password" id="pass" class="form-control form-control-lg" />
            <label class="form-label" for="pass">Password</label>
          </div>

           <!-- Password input -->
           <div class="form-outline mb-4">
            <input name="rpass" type="password" id="rpass" class="form-control form-control-lg" />
            <label class="form-label" for="rpass">Comfirm Password</label>
          </div>

          <!-- Submit button -->
          <div class="d-grid gap-2 col-6 mx-auto">
              <button type="submit" class="btn btn-primary btn-lg btn-block">Register</button> 
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
   
</body>
</html>