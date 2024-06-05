<?php
include 'config.php';

$nama = $_POST['nama'];
$email = $_POST['email'];
$nomor = $_POST['nomor'];
$alamat = $_POST['alamat'];
$kodepos = $_POST['kode_pos'];
$ongkir = $_POST['ongkir'];
$barangData = json_decode($_POST['barang_data'], true);
$totalHarga = $_POST['total_harga'];

$namaBarang = '';
$jumlahBarang = 0;

foreach ($barangData as $barang) {
    $namaBarang .= $barang['nama_barang'] . ',';
    $jumlahBarang += $barang['jumlah_barang'];
}

$namaBarang = rtrim($namaBarang, ',');

$sql = "INSERT INTO daftar_pemesan (nama, email, nomor, alamat, kode_pos, ongkir, total_harga, nama_barang, jumlah_barang)
VALUES ('$nama', '$email', '$nomor', '$alamat', '$kodepos', '$ongkir', '$totalHarga', '$namaBarang', '$jumlahBarang')";

if (mysqli_query($db, $sql)) {
    echo "Data saved successfully.";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($db);
}

mysqli_close($db);
?>