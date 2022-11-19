<?php
if (isset($_GET['message'])){
  echo $_GET['message'];
}
?>

<div class="admin-form">
  <form action="edit_product_process.php" method="put" class="form-group">
    <div class="form-group">
      <label for="name">Product's Name</label>
      <input type="text" class="form-control" id="name" name="name" placeholder="Product's Name" 
        value="<?php
            if (isset($_GET['name'])){
            echo $_GET['name'];
            }
        ?>">
    </div>
    <div class="form-group">
      <label for="description" class="admin-form">Description</label>
      <input type="textarea" class="form-control" id="description" name="description"
        value="<?php
            if (isset($_GET['description'])){
            echo $_GET['description'];
            }
        ?>"
        placeholder="Description">
    </div>  <div class="form-group">
      <label for="price">Price</label>
      <input type="text" class="form-control" id="price" name="price"
            value="<?php
                if (isset($_GET['price'])){
                echo $_GET['price'];
                }
            ?>"
      placeholder="Price">
      <input type="text" name="id"
      value="<?php
                if (isset($_GET['id'])){
                echo $_GET['id'];
                }
            ?>" hidden=true>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

