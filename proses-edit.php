<?php
include("config.php");

// cek apakah tombol simpan sudah diklik atau blum?
if (isset($_POST['simpan'])){
$id = $_POST['id'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$nomor = $_POST['nomor'];
$alamat = $_POST['alamat'];
$kode_pos = $_POST['kode_pos'];
$ongkir = $_POST['ongkir'];

    // buat query update
    $sql = "UPDATE daftar_pemesan SET nama='$nama', email='$email', nomor='$nomor', alamat='$alamat', kode_pos='$kode_pos', ongkir='$ongkir' WHERE id=$id";
    $query = mysqli_query($db, $sql);

    // apakah query update berhasil?
    if($query) {
        header('Location: detail.php');
    } else {
        // handle query failure
        die("Gagal menyimpan perubahan...");
    }
} else {
    // handle form submission failure
    die("Akses dilarang...");
}
?>