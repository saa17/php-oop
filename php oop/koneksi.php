<?php
class database
{
    public $host = "localhost",
    $uname = "root",
    $pass = "",
    $db = "politeknik",
    $connect;
    
    function __construct()
    {
        $this->connect = new mysqli($this->host, $this->uname, $this->pass, $this->db);
        if ($this->connect->connect_errno){
            echo "Database tidak ada..!";
            exit; }
        }   

        function tampil_data()
        {
            $data = "select * from mahasiswa ";
            $hasil = $this->connect->query($data);
            while ($d = mysqli_fetch_array($hasil))
            {
                $result[] = $d;
            }
            return $result;
        }

        function input ($nim,$nama,$alamat,$telepon)
        {
            $simpan = "insert into mahasiswa values ('', '$nim','$nama','$alamat','$telepon')";
            $hasil = $this->connect->query($simpan);
            header("location:pesan.php?pesan=input");
        }

        function delete($nim)
        {
            $simpan = "delete from mahasiswa where nim = '$nim'";
            $hasil = $this->connect->query($simpan);
            header("location:pesan.php?pesan=delete");
        }

        function edit ($id)
        {
            $data = "select * from mahasiswa where nim='$id'";
            $hasil = $this->connect->query($data);
            while ($d = mysqli_fetch_array($hasil))
            {
                $result[] = $d;
            }
            return $result;
        }

        function update ($id, $nim,$nama,$alamat,$telepon)
        {
            $simpan = "update mahasiswa set nim='$nim', nama='$nama',
            alamat='$alamat', telepon='$telepon' where id='$id'";
            $hasil = $this->connect->query($simpan);
            return var_dump('sas', $hasil);
            header("location:pesan.php?pesan=update");
            //  return 
        }

    }
?>