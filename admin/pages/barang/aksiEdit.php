<?php
include '../../model/conn.php';


$id             = $_POST['id'];
$nama           = $_POST['namaBarang'];
$harga          =  $_POST['hargaPesan'];
$stok           = $_POST['stokBarang'];
$berat          = $_POST['beratBarang'];
$ket            = $_POST['ket'];
$fotolama       = $_POST['fotolama'];


@$foto   = $_FILES['foto']['name'];
@$size   = $_FILES['foto']['size'];
@$lokasi = $_FILES['foto']['tmp_name'];
$path = "../../images/fotobarangaxios/" . $foto;


if (!empty($lokasi)) {
    if ($size > 1000000) {
        echo json_encode("Gambar Terlalu Besar Max 1 MB");
    } else {
        unlink('../../images/fotobarangaxios/' . $fotolama);
        move_uploaded_file($lokasi, $path);
        $update = $koneksi->query("UPDATE tbl_barang SET barang_nama = '$nama', barang_harga = '$harga', barang_stok = '$stok',
        barang_berat = '$berat', barang_deskripsi = '$ket', barang_gambar = '$foto' WHERE barang_id = '$id'");

        if ($update == TRUE) {
            echo json_encode('Berhasil');
        } else {
            echo json_encode('GAGAL OM');
        }
    }
} else {
    $update = $koneksi->query("UPDATE tbl_barang SET barang_nama = '$nama', barang_harga = '$harga', barang_stok = '$stok',
    barang_berat = '$berat', barang_deskripsi = '$ket' WHERE barang_id = '$id'");

    if ($update == TRUE) {
        echo json_encode('Berhasil');
    } else {
        echo json_encode('GAGAL OM');
    }
}
