<?php

include 'koneksi.php';
$db = new database();
?> 

<html lang="en" dir="ltr">
    <head>
        <title align="center">CRUD OOP</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <h3 align="center"> Data mahasiswa</h3>
            <table border="1">
                <tr id="tabel">
                    <td width="50px" align="center">No</td>
                    <!-- <td width="200px" align="center">Id Mahasiswa</td> -->
                    <td width="200px" align="center">NIM</td>
                    <td width="200px" align="center">Nama</td>
                    <td width="300px" align="center">Alamat</td>
                    <td width="200px" align="center">Telepon</td>
                    <td width="200px" align="center">Aksi</td>
                </tr>
                <?php
                $no = 1;
                foreach ($db->tampil_data() as $data) { ?>
                <tr>
                    <td align = "center"><?php echo $no++; ?></td>
                    <!-- <td align = "center"><?php echo $data['id']; ?> </td> -->
                    <td align = "center"><?php echo $data['nim']; ?></td>
                    <td align = "center"><?php echo $data['nama']; ?></td>
                    <td align = "center"><?php echo $data['alamat']; ?></td>
                    <td align = "center"><?php echo $data['telepon']; ?></td>
                    <td align = "center">
                        <a href="edit.php?nim=<?php echo $data['nim']; ?> &aksi=edit">
                            <button type="button" class="btn btn-primary">Edit</button>
                    </a>
                    <a href="proses.php?nim=<?php echo $data['nim']; ?> &aksi=hapus">
                        <button type="button" class="btn btn-danger">Delete</button>
                    </a>
                    </td>
                </tr>    

                <?php } ?>
            </table>
            <br>
            <form action="proses.php?aksi=tambah" method="post">
                <table>
                    <div class="form-group">
                        <label for="nim">NIM</label>
                        <input type="number" class="form-control" name="nim" id="nim" style="width:500px;">
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" name="nama" id="nama" style="width:500px;">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control" name="alamat" id="alamat" style="width:500px;">
                    </div>
                    <div class="form-group">
                        <label for="telepon">Telepon</label>
                        <input type="number" class="form-control" name="telepon" id="telepon" style="width:500px;">
                    </div>
                </table>
                <button type="submit" value="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </body>
</html>