<?php
include 'konfigurasi/config.php';
include 'fragment/header.php';
include 'konfigurasi/function.php';
include 'fragment/menu.php'; 
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12 col-sm-12">
            <h1>Sistem Informasi Perpustakaan</h1>
            <h3>Cari Buku :</h3>
            <!-- basepath/index.php -->
            <form method="post">
                Judul : 
                <input type="text" name="judul" placeholder="ketik judul">
                <input type="submit" name="submit" value="cari">
            </form>
            <?php
            if (isset($_POST['submit'])) {
                $judul = $_POST['judul'];
                $con = connect_db();
                //$query = "SELECT * FROM buku WHERE judul='$judul'";
                //$query = "SELECT * FROM buku WHERE judul LIKE '$judul%'";
                //$query = "SELECT * FROM buku WHERE judul LIKE '%$judul'";
                $query = "SELECT buku.*,pengarang.nama FROM buku INNER JOIN pengarang ON pengarang.id=buku.idpengarang "
                        . "WHERE judul LIKE '%$judul%'";
                $result = execute_query($con, $query);
                echo "<h3>Hasil pencarian : </h3>";
                while ($data = mysqli_fetch_array($result)) {
                    echo $data['judul'] . ' (pengarang : '.$data['nama'].')' . "<hr>";
                }
            }
            ?>
        </div>
    </div>
</div>
<?php include './fragment/footer.php'; ?>