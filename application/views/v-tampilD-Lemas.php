<html>
    <head>
        <title>Tampil Data Siswa</title>
    </head>

    <body>
        <center>
        <table>
            <tr>
                <th colspan="5">Tampil Data Siswa</th>
            </tr>
            <tr>
                <td colspan="5"><th>
            </tr>
            <tr>
                <th>Nama Siswa</th>
                <th>:</th>
                <td>
                    <?= $nama; ?>
                </td>
            </tr>
            <tr>
                <th>NIS</th>
                <th>:</th>
                <td>
                    <?= $nis; ?>
                </td>
            </tr>
            <tr>
                <th>Kelas</th>
                <th>:</th>
                <td>
                    <?= $kelas; ?>
                </td>
            </tr>
            <tr>
                <th>Tanggal Lahir</th>
                <th>:</th>
                <td>
                    <?= $tanggal; ?>
                </td>
            </tr>
            <tr>
                <th>Tempat Lahir</th>
                <th>:</th>
                <td>
                    <?= $tempat; ?>
                </td>
            </tr>
            <tr>
                <th>Alamat</th>
                <th>:</th>
                <td>
                    <?= $alamat; ?>
                </td>
            </tr>
            <tr>
                <th>Jenis Kelamin</th>
                <th>:</th>
                <td>
                    <?= $jeniskel; ?>
                </td>
            </tr>
            <tr>
                <th>Agama</th>
                <th>:</th>
                <td>
                    <?= $agama; ?>
                </td>
            </tr>
            <tr>
                <td colspan="5" align="center">
                    <a href="<?= base_url('DLemas');?>">Kembali</a>
                </td>
            </tr>
        </table>
</center>
    </body>
</html>