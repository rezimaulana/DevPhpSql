<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12 col-sm-12">
            <h1>Detail Buku</h1>
            <h3></h3>
            <?php foreach($result as $res) {?>
            <table>
                <tr>
                    <th>ISBN</th>
                    <td><?= $res['isbn'] ?></td>
                </tr>
                <tr>
                    <th>Judul</th>
                    <td><?= $res['judul'] ?></td>
                </tr>
                <tr>
                    <th>Gambar</th>
                    <td><img src='<?= base_url('assets/upload/').$res['gambar'] ?>' width="100" height="100"></td>
                </tr>
                <tr>
                    <th>Pengarang</th>
                    <td><?= $res['nama'] ?></td>
                </tr>
                <tr>
                    <th>Stok</th>
                    <td><?= $res['stok'] ?></td>
                </tr>
            </table>
            <?php } ?>
        </div>
    </div>
</div>