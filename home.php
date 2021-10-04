<?php 
    require "config.php";
    require "header.php";

?>
    <div class="main">

    <?php 
    $product_select = $dbh->query("SELECT * FROM products")->fetchAll(PDO::FETCH_ASSOC);
    foreach($product_select as $key => $row): 
    ?>
    <div class="card-group">
  <div class="card">
    <img src="<?php echo $row['img'] ?>" class="card-img-top" alt="">
    <div class="card-body">
      <h5 class="card-title"><?php  echo $row['pr_name'] ?></h5>
      <p class="card-text"><?php  echo $row['price'] ?></p>
      <p class="card-text"><small class="text-muted"><a product-id="<?php echo $row['pr_id'] ?>" class="add" href="javascript:;">Add to cart</a></small></p>
    </div>
  </div>
  <?php endforeach; ?>
  
    <script>
  $(".add").click(function(){
			let product_id = $(this).attr('product-id');
			$.post("addbasket.php", {
				id : product_id
			}).done(function(data){
				$("#counter").html(data);
			})
		}); 

    $("#basket").hover(function(){
      let product_id = $(this).attr('product-id');
			$.post("shopping-cart.php", {
				id : product_id
			}).done(function(data){
				$("#shopping-cart").html(data);
        if(data<1){
          $("#shopping-cart").html("Your shopping cart is empty.")
        }
			}) 
    });
   
    </script>
</div>

       
    </div>

  