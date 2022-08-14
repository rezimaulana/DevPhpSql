<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12 col-sm-12">
            <h1>Update Buku</h1>
            <h3></h3>
            <form name="formtambah" id="formtambah" method="post" enctype="multipart/form-data" action="<?=base_url("buku/putData")?>">
                <?php
                foreach ($result as $res); 
                ?>
                <input type="hidden" name="id" id="id" value="<?= $res['buku_id'] ?>">
                <input type="hidden" name="gambar_lama" id="gambar_lama" value="<?= $res['gambar'] ?>">
                <div>
                    <label for="isbn">ISBN:</label> <input type="text" name="isbn" id="isbn" value="<?= $res['isbn'] ?>" required="required">
                </div>
                <div>
                    <label for="judul">Judul:</label> 
                    <input type="text" name="judul" id="judul" value="<?= $res['judul'] ?>" required="required" size="30">
                </div>
                <div>
                    <label for="gambar">Foto</label> <input type="file" name="gambar" id="gambar"> <img src="<?= base_url('assets/upload/').$res['gambar'] ?>" height="100" width="100">
                </div>
                <div>
                    <label for="role">Pengarang:</label> 
                    <select name="idpengarang" id="idpengarang" required>
                    <?php
                    foreach ($pengarang as $nama){ ?>
                        <option <?php if($nama['id'] == $res['idpengarang']){ echo "selected"; } ?> value="<?= $nama['id'] ?>"><?= $nama['nama'] ?></option>      
                    <?php } ?>
                    
                    </select>
                </div>
                <div>
                    <label for="stok">Stok:</label> <input type="text" name="stok" id="stok" value="<?= $res['stok'] ?>" required="required" size="10">
                </div>
                <div>
                    <input type="submit" value="Simpan" id="submit" name="submit">
                </div>
            </form>
        </div>
    </div>
</div>    