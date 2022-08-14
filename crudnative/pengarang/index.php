<?php
include '../konfigurasi/config.php';
include '../fragment/header.php';
include '../konfigurasi/function.php';
include '../fragment/menu.php'; 
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12 col-sm-12">
            <h3>Daftar Pengarang</h3>
            <h3><a class="btn btn-success pull-right" style="margin-bottom: 20px" href="tambah.php">Tambah Data</a></h3>
            <table id="table1" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                $con = connect_db();
                $query = "SELECT * FROM pengarang";
                $result = execute_query($con, $query);
                while ($data = mysqli_fetch_array($result)) {
                ?>
                    <tr>
                        <td><?= $data['nama'] ?></td>
                        <td><?= $data['email'] ?></td>
                        <td>
                            <a class="btn btn-default btn-sm" href="detail.php?id=<?= $data['id'] ?>">Detail</a>
                            <a class="btn btn-warning btn-sm" href="edit.php?id=<?= $data['id'] ?>">Edit</a>
                            <a class="btn btn-danger btn-sm" onclick="return confirm('akan menghapus data?')" href="hapus.php?id=<?= $data['id'] ?>">Hapus</a>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
                <tfoot>
                    <tr>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Aksi</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>
<?php include '../fragment/footerTable1.php'; ?>