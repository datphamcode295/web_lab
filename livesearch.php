<?php
include "config.php";
if (isset($_POST['search'])) {
   $name = $_POST['search'];
   $Query = "SELECT * FROM products WHERE name LIKE '%".$name."%' LIMIT 5";
   $ExecQuery = mysqli_query($conn, $Query); ?>

   <?php if ($ExecQuery->num_rows > 0) { 
      while($row = $ExecQuery->fetch_assoc()) {
         ?>
         <div class="list border-bottom" onClick= call(<?php echo $row['product_id'] ?>)>
            <i class="fa fa-fire"></i>
            <div class="d-flex flex-column ml-3">
               <span><?php echo $row['name']?> -       
               <?php echo number_format($row['price'])?> đồng</span> 
               <small><?php echo $row['description']?></small>
            </div>                   
         </div>
<?php }}} ?>                
                    