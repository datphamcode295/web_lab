<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Lab 1</title>
  </head>
  <body>
    
    <?php $page = 'home';
     include 'header.php'; 
    ?>
    <?php if ($_GET['page'] == 'home'){
      echo '<h1>Home</h1>';
      include 'home.php'; 

    }else if ($_GET['page'] == 'product'){
      echo '<h1>Product</h1>';
    }else if ($_GET['page'] == 'login'){
      include 'login.php'; 
    }else if ($_GET['page'] == 'register'){
      include 'register.php';
    }else if ($_GET['page'] == 'action1'){
      echo '<h1>Action1</h1>';
    }else if ($_GET['page'] == 'action2'){
      echo '<h1>Action2</h1>';
    }else if ($_GET['page'] == 'action3'){
      echo '<h1>Action3</h1>';
    }  ?>   
    <?php include 'footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>