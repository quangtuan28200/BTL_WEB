<?php
    //! import DB
    include('../../../../config/connectDB.php');

    //! add product category

    //get name category value from FORM
    $name = $_POST['name'];
    echo $name;
    // if click button ADD
    if(isset($_POST['add'])){
        $sql = 'INSERT INTO type(name) VALUE("'.$name.'")';
        //thuc hien tuy van
        mysqli_query($mysqli, $sql);
        //quay ve trang main
        header('Location:../../../index.php?management&category');
    }

    //! delete product category


?>