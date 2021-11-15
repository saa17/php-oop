<?php
    include 'koneksi.php';
    $db = new database();
?>

<?php
foreach ($db->edit($_GET['nim']) as $data) {
 ?>
    <html lang="en" dir="ltr">
        <head>
            <title align="center">CRUD OOP</title>
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        </head>
        <body>
            <div class="container">
                <h3 align="center">Edit Data mahasiswa</h3>
                <form action="proses.php?aksi=update" method="post">
                    <table>
                        <div class="form-group">
                            <input type="hidden" class="form-control" name="id" id="id"  style="width:500px;" 
                            value="<?php echo $data['id'] ?> ">
                        </div>
                        <div class="form-group">
                            <label for="nim">NIM</label>
                            <input type="text" class="form-control" name="nim" id="nim"  style="width:500px;" 
                            value="<?php echo $data['nim'] ?> ">
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" name="nama" id="nama" style="width:500px;" 
                            value="<?php echo $data['nama'] ?> ">
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" class="form-control" name="alamat" id="alamat" style="width:500px;" 
                            value="<?php echo $data['alamat'] ?> ">
                        </div>
                        <div class="form-group">
                            <label for="telepon">Telepon</label>
                            <input type="text" class="form-control" name="telepon" id="telepon" style="width:500px;" 
                            value="<?php echo $data['telepon'] ?> ">
                        </div>
                    </table> 
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </body>
    </html>
                <?php } 
                ?>