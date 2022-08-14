<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12 col-sm-12">
            <h1>Detail User</h1>
            <h3></h3>
            <table>
                <?php foreach($result as $res){ ?>
                <tr>
                    <th>Nama : </th>
                    <td><?= $res->nama ?></td>
                </tr>
                <tr>
                    <th>Username : </th>
                    <td><?= $res->email ?></td>
                </tr>
                <?php } ?>
            </table>
        </div>
    </div>
</div>