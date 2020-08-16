<?php
include '../../model/conn.php';

// var_dump($_POST);
// var_dump($_FILES);


$nama           = $_POST['namaBarang'];
$harga          =  $_POST['hargaPesan'];
$stok           = $_POST['stokBarang'];
$berat          = $_POST['beratBarang'];
$ket            = $_POST['ket'];

$foto   = $_FILES['foto']['name'];
$size   = $_FILES['foto']['size'];
$lokasi = $_FILES['foto']['tmp_name'];

if ($size > 1000000) {


    echo json_encode("Gambar Terlalu Besar Max 1 MB");
} else {


    $path = "../../images/fotobarangaxios/" . $foto;

    move_uploaded_file($lokasi, $path);




    $datasimpan = $koneksi->query("INSERT INTO tbl_barang (barang_nama,barang_harga,barang_stok,barang_berat,barang_deskripsi,barang_gambar) VALUES ('$nama','$harga','$stok','$berat','$ket','$foto')");



    if ($datasimpan == TRUE) {
        echo json_encode('BERHASIL');
    } else {
        echo json_encode('ERRORR');
    }
}
