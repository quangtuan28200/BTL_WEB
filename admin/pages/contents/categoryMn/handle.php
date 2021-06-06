<?php
    //! add product category

    if(isset($_POST['add'])){
        //! import DB
        include('../../../../config/connectDB.php');
        //get name category value from FORM
        $name = $_POST['name'];
        //get DATE_TIME
        date_default_timezone_set("Asia/Ho_Chi_Minh");
        $createdAt = date("d-m-Y H:i:s");

        $sql_add = 'INSERT INTO category(name, createdAt) VALUE("'.$name.'","'.$createdAt.'")';
        //thuc hien tuy van
        $query = mysqli_query($mysqli, $sql_add);

        // if(!$query)
        // {   
        //     setcookie('checkSuccess', 0, 0 ,'/');
        //     setcookie('errorMess', mysqli_error($mysqli), 0 ,'/');
        // }
        // else
        // {
        //     setcookie('checkSuccess', 1, 0 ,'/');
        // } 
    
        //quay ve trang main
        header('Location:../../../index.php?management&category');
    }

    //! delete product category

    if(isset($_GET['delete'])){ 
        //import DB
        include('../config/connectDB.php');

        $sql_delete = 'DELETE FROM category WHERE id='.$_GET["id"];
        //thuc hien tuy van
        mysqli_query($mysqli, $sql_delete);
        //quay ve trang main
        header('Location:?management&category');
    }
?>