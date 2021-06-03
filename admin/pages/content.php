<!-- admin_content -->
<div class="main">
    <?php
        if(isset($_GET['category'])){
            if(isset($_GET['delete'])&&isset($_GET['true'])){ 
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
            if(isset($_GET['create'])){ 
                include('contents/productMn/create.php'); // ../admin/management/product/create
            }else{
                include('contents/productMn/main.php');  // ../admin/management/product
            }
        }else {
            include('contents/home.php'); // ../admin/home
        }
    ?>
</div>