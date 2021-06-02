<!-- admin_content -->
<div class="main">
    <?php
        if(isset($_GET['category'])){
            if(isset($_GET['delete'])){ 
                include('contents/categoryMn/handle.php'); // ../admin/management/category/delete
            }else {
                include('contents/categoryMn/main.php');  // ../admin/management/category
            }
        }elseif(isset($_GET['brand'])){
            if(isset($_GET['delete'])){ 
                include('contents/brandMn/handle.php'); // ../admin/management/brand/delete
            }else {
                include('contents/brandMn/main.php');  // ../admin/management/brand
            }
        }elseif (isset($_GET['product'])) {
            include('contents/productMn/productMn.php');  // ../admin/management/product
        }else {
            include('contents/home.php'); // ../admin/home
        }
    ?>
</div>