<?php
include '../../model/conn.php';
$json = file_get_contents('php://input');
$dataarray = json_decode($json, true);

$gambar = $koneksi->query("SELECT barang_gambar FROM tbl_barang WHERE barang_id = '$dataarray[idhapus]'")->fetch_assoc();

unlink('../../images/fotobarangaxios/' .   $gambar['barang_gambar']);


$data = $koneksi->query("DELETE FROM tbl_barang WHERE barang_id = '$dataarray[idhapus]'");

if ($data == true) {
    echo json_encode('Berhasil Dihapus');
} else {
    echo json_encode('Gagal Om');
}
