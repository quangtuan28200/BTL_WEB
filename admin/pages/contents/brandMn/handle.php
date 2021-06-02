<?php
    //! add product category

    if(isset($_POST['add'])){
        //! import DB
        include('../../../../config/connectDB.php');
        //get name category value from FORM
        $name = $_POST['name'];
        //get category_id
        $category = $_POST['product_type'];
        //get DATE_TIME
        date_default_timezone_set("Asia/Ho_Chi_Minh");
        $createdAt = date("Y-m-d H:i:s");

        $sql_add = 'INSERT INTO brand(category_id, name, createdAt) VALUE("'.$category.'","'.$name.'","'.$createdAt.'")';
        //thuc hien tuy van
        mysqli_query($mysqli, $sql_add);
        //quay ve trang main
        header('Location:../../../index.php?management&brand');
    }

    //! delete product category

    if(isset($_GET['delete'])){ 
        //import DB
        include('../config/connectDB.php');

        $sql_delete = 'DELETE FROM brand WHERE id='.$_GET["id"];
        //thuc hien tuy van
        mysqli_query($mysqli, $sql_delete);
        //quay ve trang main
        header('Location:?management&brand');
    }
?>