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

create post
read get
update put
put kabeh
patch sebagian
delete delete

