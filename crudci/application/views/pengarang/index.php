<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12 col-sm-12">
            <h3>Daftar Pengarang</h3>
            <h3><a class="btn btn-success pull-right" style="margin-bottom: 20px" href="<?= base_url("pengarang/post") ?>">Tambah Data</a></h3>
            <table id="table1" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach($result as $res) {?>
                    <tr>
                        <td><?= $res->nama ?></td>
                        <td><?= $res->email ?></td>
                        <td>
                            <a class="btn btn-default btn-sm" href="<?= base_url('pengarang/get/').$res->id ?>">Detail</a>
                            <a class="btn btn-warning btn-sm" href="<?= base_url('pengarang/put/').$res->id ?>">Edit</a>
                            <a class="btn btn-danger btn-sm" onclick="return confirm('akan menghapus data?')" href="<?= base_url('pengarang/delete/').$res->id ?>">Hapus</a>
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