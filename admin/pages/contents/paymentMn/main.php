
<?php
    $sql = 'SELECT * FROM customer';
    $query = mysqli_query($mysqli, $sql);

    function handle_status($status_id){
        $status = 'Chưa thanh toán';
        if ($status_id == 1){
            $status = 'Đã thanh toán';
        }
        return $status;
    }
?>


<h3>Customer list</h3>
<table>
    <tr>
        <th>No</th>
        <th style="width: 150px;">Name</th>             
        <th>Gender</th>             
        <th>Phone</th>
        <th>Address</th>
        <th style="width: 164px;">Order date</th>
        <th style="width: 135px;">Status</th>
        <th style="width: 100px;">Action</th>
    </tr>
    <?php
        $i = 1;
        while ($customers = mysqli_fetch_array($query)) {
    ?>
        <tr>
            <td><?php echo $i ?></td>
            <td><?php echo $customers['name'] ?></td>
            <td><?php echo $customers['gender'] ?></td>
            <td><?php echo $customers['phone'] ?></td>
            <td><?php echo $customers['address'] ?></td>
            <td><?php echo $customers['createdAt'] ?></td>
            <td><?php echo handle_status($customers['status']) ?></td>
            <td><a href="?management&payment&detail&id=<?php echo $customers['id'] ?>">View detail</a></td>
        </tr>
    <?php
            $i+=1;
        }
    ?>
                
</table>