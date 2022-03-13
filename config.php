<?php
    $host = 'localhost';
    $user = 'root';
    $pass = 'alfarabi123';
    $dbname = 'tugas_akhir';

    $conn = mysqli_connect($host,$user,$pass,$dbname);

    function buat_jadwal($jadwal){
        global $conn;
        $nama = $jadwal["nama"];
        $no_hp = $jadwal["no_hp"];
        $bengkel = $jadwal["id_bengkel"];
        $tanggal = $jadwal["tanggal"];
        $jam =$jadwal["jam"];
        
        $query ="INSERT into jadwal values
        ('','$nama','$no_hp','$bengkel','$tanggal','$jam')";

        mysqli_query($conn,$query);  
    }

    function tampil($query){
        global $conn;
        $tampil = mysqli_query($conn,$query);
        $rows = [];
        while ($data = mysqli_fetch_assoc($tampil)){
            $rows[] =  $data;
        }
        return $rows;
    }

 ?>