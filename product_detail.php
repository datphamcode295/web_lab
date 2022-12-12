<?php 
include 'config.php'; 
if (isset($_GET['id'])){
    $sql = "SELECT * FROM products WHERE product_id =".$_GET['id'];
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_row($result);
}
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <style>
        .product-image img{
            width: 400px;
            height: 400px;
        }
    </style>
</head>
<body>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" />
<div class="container">
    <div class="product-content product-wrap clearfix product-deatil">
        <div class="row">
            <div class="col-md-5 col-sm-12 col-xs-12">
                <div class="product-image">
                    <img src="./img/card.jpg" class="img-responsive" alt="" />
                </div>
            </div>

            <div class="col-md-6 col-md-offset-1 col-sm-12 col-xs-12">
                <h2 class="name">
                    <?php echo $row[1]; ?>
                </h2>
                <hr />
                <h3 class="price-container">
                <?php echo number_format($row[3]); ?> đồng
                </h3>
                <hr />
                <div class="description">
        
                            <strong>Description Title</strong>
                            <p>
                                <?php echo $row[2] ?>
                            </p>
                        </div>
                       
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <a href="javascript:void(0);" class="btn btn-success btn-lg">Add to cart</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


</body>
</html>

