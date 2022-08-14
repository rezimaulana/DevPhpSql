<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12 col-sm-12">
            <h3>Daftar Buku</h3>
            <h3><a class="btn btn-success pull-right" style="margin-bottom: 20px" href="<?= base_url('buku/post'); ?>">Tambah Data</a></h3>
            <?= $this->session->flashdata("success"); ?>
            <?= $this->session->flashdata("error"); ?>
            <table id="table1" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>ISBN</th>
                        <th>Judul</th>
                        <th>Pengarang</th>
                        <th>Stok</th>
                        <th>Gambar</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($result as $res) {?>
                        <tr>
                            <td><?= $res['isbn'] ?></td>
                            <td><?= $res['judul'] ?></td>
                            <td><?= $res['nama'] ?></td>
                            <td><?= $res['stok'] ?></td>
                            <td>
                                <img src='<?= base_url('assets/upload/').$res['gambar'] ?>' width="100" height="100">
                            </td>
                            <td>
                                <a class="btn btn-default btn-sm" href="<?= base_url('buku/get/').$res['buku_id'] ?>">Detail</a>
                                <a class="btn btn-warning btn-sm" href="<?= base_url('buku/put/').$res['buku_id'] ?>">Edit</a>
                                <a class="btn btn-danger btn-sm" onclick="return confirm('Akan menghapus data?')" href="<?= base_url('buku/delete/').$res['buku_id'] ?>">Hapus</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
                <tfoot>
                    <tr>
                        <th>ISBN</th>
                        <th>Judul</th>
                        <th>Pengarang</th>
                        <th>Stok</th>
                        <th>Gambar</th>
                        <th>Aksi</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>