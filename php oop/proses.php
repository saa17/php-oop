<?php
include 'koneksi.php';
$db = new database();

$aksi = $_GET['aksi'];
$id = $_POST['id'];
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$tele = $_POST['telepon'];
var_dump('ini id',$id, 'ini nim',$nim, 'ini nama',$nama, 'ini alamat',$alamat, $tele);
if ($aksi == "tambah")
{
    $db->input($_POST['nim'],$_POST['nama'],$_POST['alamat'],$_POST['telepon']);
    header("location:tampil.php");
}
elseif ($aksi == "hapus")
{
    $db->delete ($_GET['nim']);
    header("location:tampil.php");
}
elseif ($aksi == "edit")
{
    $db->edit($_POST['nim'],$_POST['nama'],$_POST['alamat'],$_POST['telepon']);
    header("location:tampil.php");
}
elseif ($aksi == "update")
{
    // return var_dump('sasas');
    $db->update($_POST['id'],$_POST['nim'],$_POST['nama'],$_POST['alamat'],$_POST['telepon']);
    header("location:tampil.php");    
}
?>