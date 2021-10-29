<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
</head>
<body>
    <h1>Detail Data Siswa</h1>
    <br><br>
    <a href="index.php">Kembali</a>
    <br><br>
    <h3>Data Siswa</h3>
        <?php
            include 'koneksi.php';
            $id = $_GET['id'];
            $data = mysqli_query($conn, "SELECT * FROM data_siswa WHERE id='$id'");
            while($ds = mysqli_fetch_array($data)) {
        ?>
    <div class="table_a">
        <table border="1">
            <tr>
                <td>Nama Lengkap</td>
                <td><?php echo $ds['nama']; ?></td>
            </tr>
            <tr>
                <td>NIS</td>
                <td><?php echo $ds['nis']; ?></td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td><?php echo $ds['kelas']; ?></td>
            </tr>
            <tr>
                <td>NISN</td>
                <td><?php echo $ds['nisn']; ?></td>
            </tr>
            <tr>
                <td>NIK</td>
                <td><?php echo $ds['nik']; ?></td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td><?php echo $ds['tempat_lahir']; ?></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td><?php echo $ds['tanggal_lahir']; ?></td>
            </tr>
            <tr>
                <td>Agama</td>
                <td><?php echo $ds['agama']; ?></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td><?php echo $ds['jenis_kelamin']; ?></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><?php echo $ds['alamat']; ?></td>
            </tr>
            <tr>
                <td>No. Akta Lahir</td>
                <td><?php echo $ds['no_akta_lahir']; ?></td>
            </tr>
            <tr>
                <td>No. Kartu Keluarga</td>
                <td><?php echo $ds['no_kartu_keluarga']; ?></td>
            </tr>
            <tr>
                <td>No. KIP</td>
                <td><?php echo $ds['no_kip']; ?></td>
            </tr>
            <tr>
                <td>No. Seri Ijazah</td>
                <td><?php echo $ds['no_seri_ijazah_smp']; ?></td>
            </tr>
            <tr>
                <td>SMP Asal</td>
                <td><?php echo $ds['smp_asal']; ?></td>
            </tr>
            <tr>
                <td>SD Asal</td>
                <td><?php echo $ds['sd_asal']; ?></td>
            </tr>
            <tr>
                <td>Koordinat Rumah</td>
                <td><?php echo $ds['koordinat_rumah']; ?></td>
            </tr>
            <tr>
                <td>Jarak Rumah ke Sekolah</td>
                <td><?php echo $ds['jarak_rumah_ke_sekolah']; ?></td>
            </tr>
        </table>
        <br><br>
    </div>

    <h3>Data Orang Tua</h3>
    <h5>Data Ayah</h5>
    <div class="table_b">
        <table border="1">
            <tr>
                <td>Nama Ayah</td>
                <td><?php echo $ds['nama_ayah']; ?></td>
            </tr>
            <tr>
                <td>Tempat Lahir Ayah</td>
                <td><?php echo $ds['tempat_lahir_ayah']; ?></td>
            </tr>
            <tr>
                <td>Tanggal Lahir Ayah</td>
                <td><?php echo $ds['tanggal_lahir_ayah']; ?></td>
            </tr>
            <tr>
                <td>Agama Ayah</td>
                <td><?php echo $ds['agama_ayah']; ?></td>
            </tr>
            <tr>
                <td>NIK Ayah</td>
                <td><?php echo $ds['nik_ayah']; ?></td>
            </tr>
            <tr>
                <td>No. KTP Ayah</td>
                <td><?php echo $ds['no_ktp_ayah']; ?></td>
            </tr>
            <tr>
                <td>Pendidikan Terakhir Ayah</td>
                <td><?php echo $ds['pendidikan_terakhir_ayah']; ?></td>
            </tr>
            <tr>
                <td>Pekerjaan Ayah</td>
                <td><?php echo $ds['pekerjaan_ayah']; ?></td>
            </tr>
            <tr>
                <td>Gaji Ayah</td>
                <td><?php echo $ds['gaji_ayah']; ?></td>
            </tr>
        </table>
        <br>
    </div>

    <h5>Data Ibu</h5>
    <div class="table_c">
        <table border="1">
            <tr>
                <td>Nama Ibu</td>
                <td><?php echo $ds['nama_ibu']; ?></td>
            </tr>
            <tr>
                <td>Tempat Lahir Ibu</td>
                <td><?php echo $ds['tempat_lahir_ibu']; ?></td>
            </tr>
            <tr>
                <td>Tanggal Lahir Ibu</td>
                <td><?php echo $ds['tanggal_lahir_ibu']; ?></td>
            </tr>
            <tr>
                <td>Agama Ibu</td>
                <td><?php echo $ds['agama_ibu']; ?></td>
            </tr>
            <tr>
                <td>NIK Ayah</td>
                <td><?php echo $ds['nik_ibu']; ?></td>
            </tr>
            <tr>
                <td>No. KTP Ibu</td>
                <td><?php echo $ds['no_ktp_ayah']; ?></td>
            </tr>
            <tr>
                <td>Pendidikan Terakhir Ibu</td>
                <td><?php echo $ds['pendidikan_terakhir_ibu']; ?></td>
            </tr>
            <tr>
                <td>Pekerjaan Ibu</td>
                <td><?php echo $ds['pekerjaan_ibu']; ?></td>
            </tr>
            <tr>
                <td>Gaji Ibu</td>
                <td><?php echo $ds['gaji_ibu']; ?></td>
            </tr>
        </table>
    </div>
        <?php
            }
        ?>
</body>
</html>
