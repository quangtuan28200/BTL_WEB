<!-- admin_content -->
<div class="main">
    <?php
        if(isset($_GET['category'])){
            if(isset($_GET['create'])){ 
                include('contents/categoryMn/create.php'); // ../admin/management/category/create
            }else {
                include('contents/categoryMn/main.php');  // ../admin/management/category
            }
        }elseif (isset($_GET['product'])) {
            include('contents/productMn/productMn.php');  // ../admin/management/product
        }else {
            include('contents/home.php'); // ../admin/home
        }
    ?>
</div>