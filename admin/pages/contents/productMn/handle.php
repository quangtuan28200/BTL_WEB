
<?php
    include('../../../../config/connectDB.php');

    $object = json_decode($_COOKIE["a"]) ;

    $thumbnail = time().'_'.$_FILES['imgProduct']['name'];
    $thumbnail_tmp = $_FILES['imgProduct']['tmp_name'];
    move_uploaded_file($thumbnail_tmp, '../../../../assets/imgs/admin/upload_img_product/'.$thumbnail);
    
    $category = $object->category;
    $brand = $object->brand;
    $name = $object->nameProduct;
    $price = $object->priceProduct;
    $short_desc = $object->despProduct;
    $gift = $object->giftProduct;
    $quantity = $object->quantityProduct;
    $titleNews = $object->titleDsp;
    $contentNews = $object->contentDsp;
    $titleConfig = $object->titleConfig;
    $contentConfig = $mysqli -> real_escape_string($object->contentConfig);

    if(isset($_GET['create'])){
        //get DATE_TIME
        date_default_timezone_set("Asia/Ho_Chi_Minh");
        $createdAt = date("d-m-Y H:i:s");
        $updatedAt = date("d-m-Y H:i:s");

        $sql_create = 'INSERT INTO product(category_id,brand_id,thumbnail,name_prod,price,description_prod,gift,quantity,news_title,news_content,config_title,config_content,createdAt,updatedAt,status_prod) 
        VALUE ("'.$category.'","'.$brand.'","'.$thumbnail.'","'.$name.'","'.$price.'","'.$short_desc.'","'.$gift.'",
        "'.$quantity.'","'.$titleNews.'","'.$contentNews.'","'.$titleConfig.'","'.$contentConfig.'","'.$createdAt.'","'.$updatedAt.'","1")';
        mysqli_query($mysqli, $sql_create);

        header('Location:../../../index.php?management&product');
    }
?>