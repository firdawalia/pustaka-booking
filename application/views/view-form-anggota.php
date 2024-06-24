<html>
<head>
    <title>Form Pendaftaran Anggota</title>
</head>
<body>
    <center>
    <?php echo validation_errors();?>
    
    <?php echo form_open('anggota');?>
    <table>
        <tr>
            <th colspan="11">
            Form Pendaftaran Anggota Member Organisasi Mahasiswa
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
                <input type="text" name="nim" id="nim">
            </td>
        </tr>
        <tr>
            <th>Nama</th>
            <td>:</td>
            <td>
                <input type="text" name="nama" id="nama">
            </td>
        </tr>
        <tr>
            <th>Tanggal Lahir</th>
            <td>:</td>
            <td>
                <input type="date" name="tanggal" id="tanggal">
            </td>
        </tr>
        <tr>
            <th>Tempat Lahir</th>
            <td>:</td>
            <td>
                <input type="text" name="tempat" id="tempat">
            </td>
        </tr>
        <tr>
            <th>Jenis Kelamin</th>
            <td>:</td>
            <td>
                <input type="radio" name="jeniskel"value="Laki-Laki">Laki-Laki
                <input type="radio" name="jeniskel"value="Perempuan">Perempuan
            </td>
        </tr>
        <tr>
            <th>Program Studi</th>
            <td>:</td>
            <td>
                <input type="text" name="prodi" id="prodi">
            </td>
        </tr>
        <tr>
            <th>Angkatan</th>
            <td>:</td>
            <td>
                <input type="text" name="angkatan" id="Angkatan">
            </td>
        </tr>
        <tr>
            <th>Kampus</th>
            <td>:</td>
            <td>
                <input type="text" name="kampus" id="kampus">
            </td>
        </tr>
        <tr>
            <th>Email</th>
            <td>:</td>
            <td>
                <input type="email" name="email" id="email">
            </td>
        </tr>
        <tr>
            <th>Alamat</th>
            <td>:</td>
            <td>
                <input type="text" name="alamat" id="alamat">
            </td>
        </tr>
        <tr>
            <th>Hobi</th>
            <td>:</td>
            <td>
                <input type="text" name="hobi" id="hobi">
            </td>
        </tr>
        <tr>
            <td colspan="11" align="center">
                <input type="submit" value="Submit">
            </td>
        </tr>
    </table>
        </form>
    </center>
</body>
</html>
