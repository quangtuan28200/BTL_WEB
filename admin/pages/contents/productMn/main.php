
<?php
    //GET product list
    if(isset($_GET['category_id'])){
        $sql = 'SELECT category.name as categoryName, brand.name as brandName, name_prod, product.createdAt, product.updatedAt, product.id, thumbnail, price 
        FROM product, category, brand WHERE product.category_id = "'.$_GET['category_id'].'" AND product.category_id = category.id AND product.brand_id = brand.id ORDER BY product.category_id ASC';
        if(isset($_GET['brand_id'])){
            $sql = 'SELECT category.name as categoryName, brand.name as brandName, name_prod, product.createdAt, product.updatedAt, product.id, thumbnail, price 
            FROM product, category, brand WHERE product.category_id = "'.$_GET['category_id'].'" AND product.brand_id = "'.$_GET['brand_id'].'" AND product.category_id = category.id AND product.brand_id = brand.id ORDER BY product.category_id ASC';
        }
    }else {
        $sql = 'SELECT category.name as categoryName, brand.name as brandName, name_prod, product.createdAt, product.updatedAt, product.id, thumbnail, price 
        FROM product, category, brand WHERE product.category_id = category.id AND product.brand_id = brand.id ORDER BY product.category_id ASC';
    }
    //Thuc hien truy van den DB
    $query = mysqli_query($mysqli, $sql);

    //category
    $sql_category = 'SELECT * FROM category';
    $query_category = mysqli_query($mysqli, $sql_category);
    //brand
    $sql_brand = 'SELECT * FROM brand ORDER BY `category_id` ASC';
    $query_brand = mysqli_query($mysqli, $sql_brand);
?>

<div class="content grid">
    <div class="Container wide">
        <div class="wrapper">
            <!-- LOADER -->
            <div class="loader_container">
                <div class="loader_wr">
                    <span>LOADING</span>
                    <div class="loader"></div>      
                </div>
            </div>

            <div class="content_loaded" style="display: none">
                <h3>Product list</h3>
                <table>
                    <tr>
                        <th>No</th>
                        <th>Thumbnail</th>
                        <th>
                            <select name="" id="category_select" class="selectCSS">
                                <option style="background-color: #ccc" value="#">Category</option>
                                <?php
                                    while ($categories = mysqli_fetch_array($query_category)) {
                                ?>  
                                        <option value="<?php echo $categories['id'] ?>"><?php echo $categories['name'] ?></option>
                                <?php
                                    }
                                ?>
                            </select>
                        </th>
                        <th>
                            <select name="" id="brand_select" class="selectCSS">
                                <option style="background-color: #ccc" value="#">Brand</option>
                                <?php
                                    while ($brands = mysqli_fetch_array($query_brand)) {
                                ?>
                                    <option style="display: none;" categoryID="<?php echo $brands['category_id'] ?>" value="<?php echo $brands['id'] ?>"><?php echo $brands['name'] ?></option>
                                <?php
                                    }
                                ?>
                            </select>
                        </th>
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
                                <a class="img_productLink" href="?management&product&modify&id=<?php echo $products['id'] ?>">
                                    <img class="img_product" src="../assets/imgs/admin/upload_img_product/<?php echo $products['thumbnail'] ?>" alt="img">
                                    <div class="show_detail">
                                        View detail
                                    </div>
                                </a>
                            </td>
                            <td><?php echo $products['categoryName'] ?></td>
                            <td><?php echo $products['brandName'] ?></td>
                            <td><?php echo $products['name_prod'] ?></td>
                            <td><?php echo $products['price'] ?></td>
                            <td><?php echo $products['createdAt'] ?></td>
                            <td><?php echo $products['updatedAt'] ?></td>
                            <td style="width: 98px">
                                <a class="MODIFY_BTN btn_action" href="?management&product&modify&id=<?php echo $products['id'] ?>">Modify</a>
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