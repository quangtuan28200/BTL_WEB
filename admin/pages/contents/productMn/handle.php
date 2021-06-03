
<?php
    $object = json_decode($_COOKIE["a"]) ;
    echo $object->nameProduct;

    // header('Location:../../../index.php?management&product');
?>