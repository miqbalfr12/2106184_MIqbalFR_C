<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "2106184_muhammad";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user_name = $_POST['user_name'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $tanggal = $_POST['tanggal'];
    $perkawinan = $_POST['perkawinan'];
    $hubungan = $_POST['hubungan'];
    $provinsi = $_POST['provinsi'];
    $kota = $_POST['kota'];
    $kecamatan = $_POST['kecamatan'];
    $desa = $_POST['desa'];
    $rt = $_POST['rt'];
    $rw = $_POST['rw'];
    $jalan = $_POST['jalan'];
    $status_kepemilikan = $_POST['status_kepemilikan'];
    $listrik = $_POST['listrik'];
    $air_minum = $_POST['air_minum'];
    $aktivitas = $_POST['aktivitas'];

    if ($perkawinan == "true") {
        $kawin = TRUE;
    } else {
        $kawin = FALSE;
    }

    $sql = "INSERT INTO sensus_penduduk (nama,jk,tgl,kwn,hbgn,prv,kota,kcmtn,desa,rt,rw,jln,stskep,lstk,airm,akti)	
  VALUES ('$user_name', '$jenis_kelamin', '$tanggal', '$kawin', '$hubungan', '$provinsi', '$kota', '$kecamatan', '$desa', '$rt', '$rw', '$jalan', '$status_kepemilikan', '$listrik', '$air_minum', '$aktivitas')";

    if ($conn->query($sql) === TRUE) {
        include './berhasil.html';
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>