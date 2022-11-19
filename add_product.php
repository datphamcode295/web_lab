<?php
if (isset($_GET['message'])){
  echo "<p class=\"alert-success\">".$_GET['message']."</p>";
}
?>

<div class="admin-form">
  <form action="add_product_process.php" method="post" class="form-group">
    <div class="form-group">
      <label for="name">Product's Name</label>
      <input type="text" class="form-control" id="name" name="name" placeholder="Product's Name">
    </div>
    <div class="form-group">
      <label for="description" class="admin-form">Description</label>
      <input type="textarea" class="form-control" id="description" name="description" placeholder="Description">
    </div>  <div class="form-group">
      <label for="price">Price</label>
      <input type="text" class="form-control" id="price" name="price" placeholder="Price">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

