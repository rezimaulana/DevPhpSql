<?php
include '../konfigurasi/config.php';
include '../fragment/header.php';
include '../konfigurasi/function.php';
include '../fragment/menu.php';
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12 col-sm-12">
            <h1>Detail Buku</h1>
            <h3></h3>
            <?php
            if (isset($_GET['id'])) {
                $con = connect_db();
                $id = $_GET['id'];
                $query = "SELECT * FROM buku INNER JOIN pengarang ON pengarang.id=buku.idpengarang WHERE buku.id='$id'";
                $result = execute_query($con, $query);
                $data = mysqli_fetch_array($result);
            ?>
            <table>
                <tr>
                    <th>ISBN</th>
                    <td><?= $data['isbn'] ?></td>
                </tr>
                <tr>
                    <th>Judul</th>
                    <td><?= $data['judul'] ?></td>
                </tr>
                <tr>
                    <th>Gambar</th>
                    <td><img src='../assets/upload/<?= $data['gambar'] ?>' width="100" height="100"></td>
                </tr>
                <tr>
                    <th>Pengarang</th>
                    <td><?= $data['nama'] ?></td>
                </tr>
                <tr>
                    <th>Stok</th>
                    <td><?= $data['stok'] ?></td>
                </tr>
            </table>
            <?php
            }
            else {
                header("location:index.php");
            }
            ?>
        </div>
    </div>
</div>
<?php include '../fragment/footer.php'; ?>