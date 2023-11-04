<html>
    <head>
        <title>Form Input D-Lemas</title>
    </head>
    <body>
        <center>
        <form   action="<?=   base_url('DLemas/cetak');   ?>" method="post">
        <?php echo validation_errors() ?>
            <table>
                <tr>
                    <th colspan="5">Form Input Data Siswa</th>
                </tr>
                <tr>
                    <td colspan="5">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <th>Nama Siswa</th>
                    <th>:</th>
                    <td>
                        <input type="text" name="nama" id="nama">
                    </td>
                </tr>
                <tr>
                    <th>NIS</th>
                    <th>:</th>
                    <td>
                        <input type="text" name="nis" id="nis">
                    </td>
                </tr>
                <tr>
                    <th>Kelas</th>
                    <th>:</th>
                    <td>
                        <input type="text" name="kelas" id="kelas">
                    </td>
                </tr>
                <tr>
                    <th>Tanggal Lahir</th>
                    <th>:</th>
                    <td>
                        <input type="text" name="tanggal" id="tanggal">
                    </td>
                </tr>
                <tr>
                    <th>Tempat Lahir</th>
                    <th>:</th>
                    <td>
                        <input type="text" name="tempat" id="tempat">
                    </td>
                </tr>
                <tr>
                    <th>Alamat</th>
                    <th>:</th>
                    <td>
                        <input type="text" name="alamat" id="alamat">
                    </td>
                </tr>
                <tr>
                    <th>Jenis Kelamin</th>
                    <th>:</th>
                    <td>
                        <input type="radio" name="jeniskel" value="Pria">Pria
                        <input type="radio" name="jeniskel" value="Wanita">Wanita
                    </td>
                </tr>
                <tr>
                    <th>Agama</th>
                    <th>:</th>
                    <td>
                        <select name="agama" id="agama">
                            <option value=""> </option>
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Katolik">Katolik</option>
                            <option value="Budha">Budha</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Protestan">Protestan</option>
                            <option value="Khonghucu">Khonghucu</option>
                    </td>
                </tr>
                <tr>
                    <td colspan="5" align="center">
                        <input type="submit" value="Submit">
                    </td>
                </tr>
            </table>
        </form>
</center>
    </body>
</html>