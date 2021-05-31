<!-- content -->
<div id="content" class="grid">
    <?php
        if(isset($_GET['product'])){
            include('contents/product.php');
        }elseif (isset($_GET['product-detail'])) {
            include('contents/product_detail.php');
        }elseif (isset($_GET['pay'])) {
            include('contents/pay.php');
        }else {
            include('contents/home.php');
        }
    ?>
</div>