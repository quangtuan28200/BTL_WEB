
<?php
    //GET product list
    // $sql = 'SELECT * FROM product';
    $sql = 'SELECT category.name as categoryName, brand.name as brandName, name_prod, product.createdAt, product.updatedAt, product.id, thumbnail, price 
    FROM product, category, brand WHERE product.category_id = category.id AND product.brand_id = brand.id ORDER BY product.category_id ASC';
    //Thuc hien truy van den DB
    $query = mysqli_query($mysqli, $sql);
?>

<div class="content grid">
    <div class="Container wide">
        <div class="wrapper">
            <h3>Product list</h3>
            <table>
                <tr>
                    <th>No</th>
                    <th>Thumbnail</th>
                    <th>Category</th>
                    <th>Brand</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>CreatedAt</th>
                    <th>UpdatedAt</th>
                    <th>Action</th>
                </tr>
                <?php
                    $no = 1;
                    while ($products = mysqli_fetch_array($query)) {
                ?>
                    <tr>
                        <td><?php echo $no ?></td>
                        <td>
                            <a class="img_productLink" href="#">
                                <img class="img_product" src="../assets/imgs/admin/upload_img_product/<?php echo $products['thumbnail'] ?>" alt="img">
                                <div class="show_detail">
                                    Show detail
                                </div>
                            </a>
                        </td>
                        <td><?php echo $products['categoryName'] ?></td>
                        <td><?php echo $products['brandName'] ?></td>
                        <td><?php echo $products['name_prod'] ?></td>
                        <td><?php echo $products['price'] ?></td>
                        <td><?php echo $products['createdAt'] ?></td>
                        <td><?php echo $products['updatedAt'] ?></td>
                        <td>
                            <a class="MODIFY_BTN btn_action" href="?management&product&modify">Modify</a>
                            <a style="margin-top: 10px" class="delete btn_action" href="?management&product&delete&id=<?php echo $products['id'] ?>">Delete</a>
                        </td>
                        
                    </tr>
                <?php
                    $no += 1;
                    }
                ?>
            </table>
            <div class="add_btn_wr">
                <a  class="ADD_BTN btn_action" href="?management&product&create">ADD</a>
            </div>
        </div>
    </div>
</div>
<div class="modal">
    <div class="modal_Wr">
        <h3>Are you sure ?</h3>
        <div class="btn_modal">
            <div class="modal_close">Close</div>
            <a class="modal_delete" href="">Delete</a>
        </div>
    </div>
</div>