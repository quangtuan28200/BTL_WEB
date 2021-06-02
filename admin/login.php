<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" href="../assets/css/common/base.css">
    <link rel="stylesheet" href="../assets/css/admin/admin_login.css?v=<?php echo time() ?>">

    <title>ADMINSTRATOR_LOGIN</title>
</head>
<body>
    <!-- admin_login -->
    <form action="" id="form_admin" style="display: block;">
        <div class="form_groupWrap">
            <div class="form_group">
                <input id="user_name" class="form_control" name="user_name" type="text" placeholder="UserName">
                <span class="form_message"></span>
            </div>
            <div class="form_group">
                <input id="password" class="form_control" name="password" type="password" placeholder="PassWord">
                <span class="form_message"></span>
            </div>
            <button class="btn_submit">ĐĂNG NHẬP</button>
        </div>
    </form>

    <!-- JS -->
    <script src="../assets/JS/validator.js"></script>
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