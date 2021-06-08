<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- CSS -->
    <link rel="stylesheet" href="./assets/css/common/base.css?v=<?php echo time() ?>">
    <link rel="stylesheet" href="./assets/css/common/grid.css">
    <link rel="stylesheet" href="./assets/css/main/common.css?v=<?php echo time() ?>">
    
    
    <?php
        if(isset($_GET['product'])){
            echo '<link rel="stylesheet" href="./assets/css/main/content.css?v='.time().'">';
        }elseif (isset($_GET['product-detail'])) {
            echo '<link rel="stylesheet" href="./assets/css/main/product_detail.css?v='.time().'">';
        }elseif (isset($_GET['pay'])) {
            echo '<link rel="stylesheet" href="./assets/css/main/cart.css?v='.time().'">';
        }
    ?>
    
    <title>KMA_TECH</title>
</head>
<body>
    <div id="main">
        <?php
            // import DB
            include('config/connectDB.php');

            include('./pages/header.php');
            include('./pages/content.php');
            include('./pages/footer.php');
        ?>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js?v=<?php echo time() ?>"></script>
    <script src="./assets/JS/base.js?v=<?php echo time() ?>"></script>
    <script src="./assets/JS/main/common.js?v=<?php echo time() ?>"></script>

    <?php
        if(isset($_GET['product'])){
            echo '<script src="./assets/JS/main/product.js?v='.time().'"></script>';
        }elseif (isset($_GET['product-detail'])) {
            echo '<script src="./assets/JS/main/product_detail.js?v='.time().'"></script>';
        }elseif (isset($_GET['pay'])) {
            echo '<script src="./assets/JS/main/pay.js?v='.time().'"></script>';
        }else{
            echo '<script src="./assets/JS/main/home.js?v='.time().'"></script>';
        }
    ?>
    <!-- <script src="./assets/JS/main/main.js?v=<?php echo time() ?>"></script> -->
    <script src="./assets/JS/validator.js"></script>
    <script>
        validator({
            form: '#cart__payForm',
            errorSelector: '.form_message',
            formGroupSelector: '.form_group',
            rules: [
            //gender
                validator.isRequire('input[name="gender"]', 'Vui lòng chọn giới tính'), 
            //name
                validator.isRequire('#fill_inforName'),
                validator.isString('#fill_inforName', 'Tên phải là những chữ cái'),
            //sdt
                validator.isRequire('#fill_inforSDT'),
                validator.isNumber('#fill_inforSDT', 'SĐT phải là những chữ sô'),
                validator.minLength('#fill_inforSDT', 10),
            //address
                validator.isRequire('#address_input'),
            //deli_unit
                validator.select('#deli_unit_sl', 'Vui lòng chọn đơn vị vận chuyển')
            ],
            onSubmit: function (data) {  
                return data;
            },
            tag_not_input:{
                name_value: ['money_provisional', 'money_discount', 'money_deliver', 'money_lastPay'],
                tag_selector: ['.price_provisional_money', '.money_dis', '.fee_deli span', '.last_pay span'],
                tag_attribute: ["provisional_money", "money_dis", "fee_deli", "last_money"]
            }
        });
    </script>
</body>
</html>