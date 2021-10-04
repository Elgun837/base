<?php require "config.php";

$total_price = 0;
$shop_cart = $dbh->query("SELECT * FROM `basket`")->fetchAll(PDO::FETCH_ASSOC);
foreach ($shop_cart as $key => $order) {
    $id = $order['pr_id'];
    $products = $dbh->prepare("SELECT * FROM `products` WHERE `pr_id` = ('$id')");
    $products->execute();
    foreach ($products as $key => $value) {
        if ($order['pr_id'] === $value['pr_id']) {
?>
            <div class="shop-cart">
                <div class="left"><img style="max-width: 50px;" src="<?php echo $value['img']; ?>" alt=""></div>
                <div class="right">
                    <h5 class="card-title">Model:<?php echo $value['pr_name'] ?></h5>
                    <p class="card-text"> Price:<?php echo $value['price'] ?> AZN</p>

                </div>
                <div id="remove" class="remove-class"><a product-id="<?php echo $value['pr_id'] ?>" class="remove" href="javascript:;">X</a> </div>
            </div>
            <script>
                $('.remove').click(function() {
                    let product_id = $('.remove').attr('product-id');
                    $.post("remove-basket.php", {
                        p_id: product_id
                    }).done(function(data) {
                        $("#counter").html(data);
                        $("#shopping-cart").html('Your shopping cart is empty.')
                    })
                })
            </script>
<?php    }
    }
}
?>