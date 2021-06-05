
<?php
    //GET product list
    $sql = 'SELECT * FROM product';
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
                    <th>Name</th>
                    <th>Price</th>
                    <th>Description</th>
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
                        <td><img style="height: 80px" src="../assets/imgs/admin/upload_img_product/<?php echo $products['thumbnail'] ?>" alt="img"></td>
                        <td><?php echo $products['name_prod'] ?></td>
                        <td><?php echo $products['price'] ?></td>
                        <td><?php echo $products['description_prod'] ?></td>
                        <td><?php echo $products['createdAt'] ?></td>
                        <td><?php echo $products['updatedAt'] ?></td>
                        <td>
                            <a class="MODIFY_BTN btn_action" href="?management&product&modify">Modify</a>
                            <a class="DELETE_BTN btn_action" href="?management&product&delete">Delete</a>
                        </td>
                    </tr>
                <?php
                    $no += 1;
                    }
                ?>
            </table>
            <a  class="ADD_BTN btn_action" href="?management&product&create">ADD</a>
        </div>
    </div>
</div>