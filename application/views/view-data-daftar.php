<html>

<head>
    <title>Tampil Daftar Riwayat Hidup</title>
</head>

<body>
    <center>
        <table>
            <tr>
                <td colspan="3">
                    Tampil Data Daftar Riwayat Hidup
                </td>
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
                    <?= $kode; ?>
                </th>
            </tr>
            <tr>
                <th>Nama</th>
                <th>:</th>
                <th>
                    <?= $nama; ?>
                </th>
            </tr>
            <tr>
                <th>Tanggal Lahir</th>
                <th>:</th>
                <th>
                    <?= $tanggal; ?>
                </th>
            </tr>
            <tr>
                <th>Tempat Lahir</th>
                <th>:</th>
                <th>
                    <?= $tempat; ?>
                </th>
            </tr>
            <tr>
                <th>Alamat</th>
                <th>:</th>
                <th>
                    <?= $alamat; ?>
                </th>
            </tr>
            <tr>
                <th colspan="3" align="center">
                    <a href="<?= base_url('daftar');
                    ?>">Kembali</a>
                </th>
            </tr>
        </table>
    </center>
</body>

</html>