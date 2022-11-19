<?php
include "config.php";

$result = 5;

if (isset($_GET['search'])){
  $sql2 = "SELECT * FROM products WHERE name LIKE '%".$_GET['search']."%'";
  $result = mysqli_query($conn, $sql2);
}else{
  $sql2 = "SELECT * FROM products";
  $result = mysqli_query($conn, $sql2);
}
?>

<div class="row justify-content-center">
<?php
if ($result->num_rows > 0) { 
  // output data of each row
  while($row = $result->fetch_assoc()) {?>
    <div class="card m-2" style="width: 28rem;" id="<?php echo $row['product_id']?>">
    <img src="./img/card.jpg" class="card-img-top" alt="card">
    <div class="card-body">
      <h5 class="card-title"><?php echo $row['name']?> - <?php echo $row['price']?> đồng</h5>
      <p class="card-text">"<?php echo $row['description']?>"</p>
      <a href="#" class="btn btn-primary">Go somewhere</a>
      <?php
      if(isset($_COOKIE["role"]) && $_COOKIE['role'] == 1){?>
      <a href="?page=edit&&id=<?php echo $row['product_id']?>&&name=<?php echo $row['name']?>&&price=<?php echo $row['price']?>&&description=<?php echo $row['description']?>" class="btn btn-primary">Edit</a>
      <?php } ?>
      <?php
      if(isset($_COOKIE["role"]) && $_COOKIE['role'] == 1){?>
      <a href="delete_product_process.php?id=<?php echo $row['product_id']?>" class="btn btn-primary">Delete</a>
      <?php } ?>
  </div></div>
 <?php }
}
?>
</div>

<script type="text/javascript">
  let id = 0
  function edit(e){
    console.log(e.target.id)
  }
  function sendEdit(){
    window.location.href = "/linkto/product.php?"+id;
  }
  let buts = document.getElementsByClassName("edit-button")
  for (e of buts) {
      e.addEventListener("click", edit)
  }

  $('#exampleModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var recipient = button.data('whatever') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  modal.find('.modal-title').text('New message to ' + recipient)
  modal.find('.modal-body input').val(recipient)
})

</script>