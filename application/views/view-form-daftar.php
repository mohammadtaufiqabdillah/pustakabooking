<html>

<head>
    <title>Form Input Daftar Riwayat Hidup</title>
</head>

<body>
    <center>
        <form action="<?= base_url('daftar/cetak'); ?>" method="post">
            <table>
                <tr>
                    <th colspan="3">
                        Form Input Daftar Riwayat Hidup
                    </th>
                </tr>
                <tr>
                    <td colspan="3">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <th>NIM</th>
                    <th>:</th>
                    <th>
                        <input type="number" name="kode" id="kode" placeholder="Required">
                        <div class="col-sm-6 col-danger">
                            <?= form_error('kode'); ?>
                        </div>
                    </th>
                </tr>
                <tr>
                    <th>Nama</th>
                    <th>:</th>
                    <th>
                        <input type="text" name="nama" id="nama" placeholder="Required">
                        <div class="col-sm-6 col-danger">
                            <?= form_error('nama'); ?>
                        </div>
                    </th>
                </tr>
                <tr>
                    <th>Tanggal Lahir</th>
                    <th>:</th>
                    <th>
                        <input type="date" name="tanggal" id="tanggal" placeholder="Required">
                        <div class="col-sm-6 col-danger">
                            <?= form_error('tanggal'); ?>
                        </div>
                    </th>
                </tr>
                <tr>
                    <th>Tempat Lahir</th>
                    <th>:</th>
                    <th>
                        <input type="text" name="tempat" id="tempat" placeholder="Required">
                        <div class="col-sm-6 col-danger">
                            <?= form_error('tempat'); ?>
                        </div>
                    </th>
                </tr>
                <tr>
                    <th>Alamat</th>
                    <th>:</th>
                    <th>
                        <input type="text" name="alamat" id="alamat" placeholder="Required">
                        <div class="col-sm-6 col-danger">
                            <?= form_error('alamat'); ?>
                        </div>
                    </th>
                </tr>
                <tr>
                    <th colspan="3" align="center">
                        <input type="submit" value="Submit">
                    </th>
                </tr>
            </table>
        </form>
    </center>
</body>

</html>