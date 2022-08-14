<?php
include '../konfigurasi/config.php';
include '../fragment/header.php';
include '../konfigurasi/function.php';
include '../fragment/menu.php'; 
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12 col-sm-12">
            <h1>Hapus Data</h1>
            <h3></h3>
            <?php
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $query = "DELETE FROM pengarang WHERE id='$id'";
                $con = connect_db();
                execute_query($con, $query);
                if(mysqli_affected_rows($con) != 0) {
                    echo "Data berhasiil dihapus";
                }
                else {
                    echo "Data tidak berhasil dihapus";
                }
            } ?>
        </div>
    </div>
</div>
<?php include '../fragment/footer.php'; ?>