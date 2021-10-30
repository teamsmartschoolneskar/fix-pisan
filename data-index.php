<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    <h1>Data Siswa</h1>
    <br><br>
    <a href="tambah.php">Tambah Data Siswa</a>
    <br>
    <div class="table_index">
        <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th>No.</th>
                <th>Nama</th>
                <th>NIS</th>
                <th>Kelas</th>
                <th>Opsi</th>
            </tr>
            <?php
            include 'koneksi.php';
            $no = 1;
            $data = mysqli_query($conn, "SELECT * FROM data_siswa");
            while ($ds = mysqli_fetch_array($data)) {
                ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $ds['nama']; ?></td>
                    <td><?php echo $ds['nis']; ?></td>
                    <td><?php echo $ds['kelas']; ?></td>
                    <td>
                        <a href="ubah.php?id=<?php echo $ds['id']; ?>">Ubah</a> ||
                        <a href="hapus.php?id=<?php echo $ds['id']; ?>">Hapus</a> ||
                        <a href="detail.php?id=<?php echo $ds['id']; ?>">Detail</a>
                    </td>
                </tr>
            <?php
            }
            ?>
        </table>
    </div>
</body>
</html>
