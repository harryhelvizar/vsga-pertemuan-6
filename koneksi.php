<?php

    
    // inisialisasi parameter koneksi

    $nama_server = 'localhost';
    $user_mysql = 'root';
    $pass_mysql = '';
    $db_mysql = 'test';

    // koneksikan database
    // buka koneksi
    $db = mysqli_connect($nama_server, $user_mysql, $pass_mysql, $db_mysql);

    // var_dump($db);

    // cek berhasil / error koneksi

    if (!$db) {
        echo "ada yang error" . mysqli_connect_error();
    }else{
        echo "Selamat Kamu Berhasil Konek dengan Database";
    }

    // apa saja yang bisa dilakukan dengan database

    // 1. insert data dulu ke tabel siswa

    $nis = null;
    $nama = null;
    $tl = null;
    $alamat = null;

    if (isset($_GET['nis']))
        $nis = $_GET['nis'];
    if (isset($_GET['nama']))
        $alamat = $_GET['nama'];
    if (isset($_GET['tl']))
        $tl = $_GET['tl'];
    if (isset($_GET['alamat']))
        $alamat = $_GET['alamat'];            

    // $nis    = $_GET['nis'];
    // $nama   = $_GET['nama'];
    // $tl     = $_GET['tl'];
    // $alamat = $_GET['alamat'];

    $query = 'INSERT INTO siswa (nis, nama, tanggal_lahir, alamat) 
    VALUES (11111, "Obito", "1998-02-23", "Sunagakure Japan" )';

    // membuat query atau eksekusi koneksi

    mysqli_query($db,$query);

    // menutup koneksi
    mysqli_close($db);

