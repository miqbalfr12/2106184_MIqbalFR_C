<?php
// Ganti nilai-nilai berikut sesuai dengan pengaturan MySQL Anda
$host = "localhost";
$username = "root";
$password = "";
$database = "2106184_muhammad";

// Membuat koneksi ke MySQL
$conn = new mysqli($host, $username, $password, $database);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Memeriksa apakah ada data yang dikirimkan melalui formulir
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ambil data dari formulir menggunakan $_POST
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

    echo "Nama: " . $user_name . "<br>";
    echo "Jenis Kelamin: " . $jenis_kelamin . "<br>";
    echo "Tanggal: " . $tanggal . "<br>";
    echo "Perkawinan: " . $perkawinan . "<br>";
    echo "Hubungan: " . $hubungan . "<br>";
    echo "Provinsi: " . $provinsi . "<br>";
    echo "Kota: " . $kota . "<br>";
    echo "Kecamatan: " . $kecamatan . "<br>";
    echo "Desa: " . $desa . "<br>";
    echo "RT: " . $rt . "<br>";
    echo "RW: " . $rw . "<br>";
    echo "Jalan: " . $jalan . "<br>";
    echo "Status Kepemilikan: " . $status_kepemilikan . "<br>";
    echo "Listrik: " . $listrik . "<br>";
    echo "Air Minum: " . $air_minum . "<br>";
    echo "Aktivitas: " . $aktivitas . "<br>";

    if ($perkawinan == "true") {
        $kawin = TRUE;
    } else {
        $kawin = FALSE;
    }

    // Menyimpan data ke dalam database
    $sql = "INSERT INTO sensus_penduduk (nama,jk,tgl,kwn,hbgn,prv,kota,kcmtn,desa,rt,rw,jln,stskep,lstk,airm,akti)	
  VALUES ('".$user_name."', '".$jenis_kelamin."', '".$tanggal."', '".$kawin."', '".$hubungan."', '".$provinsi."', '".$kota."', '".$kecamatan."', '".$desa."', '".$rt."', '".$rw."', '".$jalan."', '".$status_kepemilikan."', '".$listrik."', '".$air_minum."', '".$aktivitas."')";

    if ($conn->query($sql) === TRUE) {
        include './berhasil.html';
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}


// Menutup koneksi
$conn->close();
?>