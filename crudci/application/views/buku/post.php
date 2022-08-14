<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12 col-sm-12">
            <h1>Tambah Buku</h1>
            <h3></h3>
            <form name="formtambah" id="formtambah" method="post" enctype="multipart/form-data" action="<?=base_url("buku/postData")?>">
                <div>
                    <label for="nama">ISBN:</label> <input type="text" name="isbn" id="isbn" required="required">
                </div>
                <div>
                    <label for="judul">Judul:</label> <input type="text" name="judul" id="judul" required="required" size="30">
                </div>
                <div>
                    <label for="gambar">Foto:</label> <input type="file" name="gambar" id="gambar" required>
                </div>
                <div>
                    <label for="role">Pengarang:</label> 
                    <select name="idpengarang" id="idpengarang" required>
                            <option value="" selected="selected">--Nama Pengarang--</option>
                            <?php foreach($dataPengarang as $pengarang){ ?>
                            <option value="<?= $pengarang['id'] ?>"><?= $pengarang['nama'] ?></option>
                            <?php } ?>
                    </select>
                </div>
                <div>
                    <label for="stok">Stok:</label> <input type="text" name="stok" id="stok" required="required" size="10">
                </div>
                <div>
                    <input type="submit" value="Simpan" id="submit" name="submit">
                </div>
            </form>
        </div>
    </div>
</div>