<?php
include '../konfigurasi/config.php';
include '../fragment/header.php';
include '../konfigurasi/function.php';
include '../fragment/menu.php'; 
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12 col-sm-12">
            <h1>Detail User</h1>
            <h3></h3>
            <?php
            if (isset($_GET['id'])) {
                $con = connect_db();
                $id = $_GET['id'];
                $query = "SELECT * FROM pengarang WHERE id='$id'";
                $result = execute_query($con, $query);
                $data = mysqli_fetch_array($result);
            ?>
            <table>
                <tr>
                    <th>Nama : </th>
                    <td><?= $data['nama'] ?></td>
                </tr>
                <tr>
                    <th>Username : </th>
                    <td><?= $data['email'] ?></td>
                </tr>
            </table>
            <?php }
            else {
                header("location:index.php");
            } ?>
        </div>
    </div>
</div>
<?php include '../fragment/footer.php'; ?>