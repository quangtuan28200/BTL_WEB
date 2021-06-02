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

    <link rel="stylesheet" href="../assets/css/common/base.css">
    <link rel="stylesheet" href="../assets/css/common/grid.css">
    <link rel="stylesheet" href="../assets/css/admin/admin_login.css">
    <link rel="stylesheet" href="../assets/css/admin/admin_interface.css?v=<?php echo time(); ?>">
    <?php
        if(isset($_GET['management'])){
            echo'<link rel="stylesheet" href="../assets/css/admin/admin_header.css?v=<?php echo time(); ?>">';
            if(isset($_GET['category'])){
                echo'<link rel="stylesheet" href="../assets/css/admin/category/main.css?v=<?php echo time(); ?>">';
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
    ?>

    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
    <script src="../assets/JS/admin/admin.js?v=<?php echo time(); ?>"></script>
    <script src="../assets/JS/validator.js"></script>
    <script class="jsbin" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script>
        validator({
            form: '#form_admin',
            errorSelector: '.form_message',
            formGroupSelector: '.form_group',
            rules: [
            //username
                validator.isRequire('#user_name'), 
            //pass
                validator.isRequire('#password')
            ],
            onSubmit: function (data) {  
                return data;
            },
            tag_not_input:{
                name_value: [],
                tag_selector: [],
                tag_attribute: []
            }
        });
    </script>
</body>
</html>