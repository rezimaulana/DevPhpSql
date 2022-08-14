<?php
include '../konfigurasi/config.php';
include '../fragment/header.php';
include '../konfigurasi/function.php';
include '../fragment/menu.php'; 
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12 col-sm-12">
            <h1>Tambah Pengarang</h1>
            <h3></h3>
            <?php
            if (isset($_POST['submit'])) {
                $nama = $_POST['nama'];
                $email = $_POST['email'];
                if (empty($nama)) {
                    echo "nama harus diisi";
                }
                elseif (empty($email)) {
                    echo "email harus diisi";
                }
                else {
                    $con = connect_db();
                    $query = "INSERT INTO pengarang (nama,email) "
                            . "VALUES ('$nama','$email')";
                    $result = execute_query($con, $query);
                    if (mysqli_affected_rows($con) != 0) {
                        header("location:index.php");
                    }
                }
            } ?>
            <form name="formtambah" method="post" id="formtambah">
                <div>
                    <label for="nama">Nama:</label> <input type="text" name="nama" id="nama" size="50" required="required">
                </div>
                <div>
                    <label for="telpon">Email:</label> <input type="text" name="email" id="email" required="required" size="30">
                </div>
                <div>
                    <input type="submit" value="Simpan" id="submit" name="submit">
                </div>
            </form>
        </div>
    </div>
</div>
<?php include '../fragment/footer.php'; ?>