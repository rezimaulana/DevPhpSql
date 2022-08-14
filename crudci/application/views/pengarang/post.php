<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12 col-sm-12">
            <h1>Tambah Pengarang</h1>
            <h3></h3>
            <form name="formtambah" id="formtambah" method="post" action="<?=base_url("pengarang/postData")?>">
                <div>
                    <label for="nama">Nama:</label> <input type="text" name="nama" id="nama" size="50" required="required">
                </div>
                <div>
                    <label for="email">Email:</label> <input type="email" name="email" id="email" required="required" size="30">
                </div>
                <div>
                    <input type="submit" value="Simpan" id="submit" name="submit">
                </div>
            </form>
        </div>
    </div>
</div>