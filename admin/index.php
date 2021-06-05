<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <!-- Icons -->
    <link rel="stylesheet" href="../assets/icons/fontawesome-free-5.15.1-web/css/all.min.css">
    <!-- CSS -->
    <link rel="stylesheet" href="../assets/css/common/base.css">
    <link rel="stylesheet" href="../assets/css/common/grid.css">
    <link rel="stylesheet" href="../assets/css/admin/admin_login.css">
    <link rel="stylesheet" href="../assets/css/admin/admin.css">
    <?php
        // ../admin/management
        if(isset($_GET['management'])){
            echo'<link rel="stylesheet" href="../assets/css/admin/common.css?v='.time().'">';
            // ../admin/management/product/create
            if(isset($_GET['product']) && isset($_GET['create'])){
                echo'<link rel="stylesheet" href="../assets/css/admin/product.css?v='.time().'">';
            }
        }

    ?>

    <title>ADMIN</title>
</head>
<body>
    <?php
        //importDB
        include('../config/connectDB.php');
        //redirect
        include('./pages/header.php');
        include('./pages/content.php');
        include('./pages/footer.php');

        // JS
    
        echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js?v='.time().'"></script>';
        if(isset($_GET['management'])){
            if(isset($_GET['brand'])){
                // ../admin/management/brand
                echo'<script src="../assets/JS/admin/brandMn/brand.js?v='.time().'"></script>';
            }elseif (isset($_GET['category'])) {
                // ../admin/management/category
                echo'<script src="../assets/JS/admin/categoryMn/category.js?v='.time().'"></script>';
            }elseif (isset($_GET['product'])) {
                if(isset($_GET['create'])){
                    // ../admin/management/product/create
                    echo'<script src="../assets/JS/admin/productMn/create.js ?v='.time().'"></script>';
                }
            }
        }
    ?>
</body>
</html>