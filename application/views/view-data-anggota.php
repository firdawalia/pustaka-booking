<html>
<head>
    <title>Tampil Data Anggota</title>
</head>
<body>
    <center>
        <table>
            <tr>
                <th colspan="11">
                    Tampil Data Anggota
                </th>
            </tr>
            <tr>
                <td colspan="11">
                    <hr>
                </td>
            </tr>
            <tr>
                <th>NIM</th>
                <th>:</th>
                <td>
                    <?= $nim; ?>
                </td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td>
                    <?= $nama; ?>
                </td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td>:</td>
                <td>
                    <?= $tanggal; ?>
                </td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td>:</td>
                <td>
                    <?= $tempat; ?>
                </td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td>
                    <?= $jeniskel; ?>
                </td>
            </tr>
            <tr>
                <td>Program Studi</td>
                <td>:</td>
                <td>
                    <?= $prodi; ?>
                </td>
            </tr>
            <tr>
                <td>Angkatan</td>
                <td>:</td>
                <td>
                    <?= $angkatan; ?>
                </td>
            </tr>
            <tr>
                <td>Kampus</td>
                <td>:</td>
                <td>
                    <?= $kampus; ?>
                </td>
            </tr>
            <tr>
                <td>Email</td>
                <td>:</td>
                <td>
                    <?= $email; ?>
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td>
                    <?= $alamat; ?>
                </td>
            </tr>
            <tr>
                <td>Hobi</td>
                <td>:</td>
                <td>
                    <?= $hobi; ?>
                </td>
            </tr>
            <tr>
                <td colspan="11" align="center">
                <a href="<?= base_url('anggota'); ?>">Kembali</a>
                </td>
            </tr>
        </table>
    </center>
</body>
</html>