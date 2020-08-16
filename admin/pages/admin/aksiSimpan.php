<?php
include '../../model/conn.php';

$datajson = file_get_contents('php://input');

$data = json_decode($datajson, true);
// var_dump($data);

$datasimpan = $koneksi->query("INSERT INTO tbl_admin (admin_nama,admin_username,admin_password,admin_level) VALUES ('$data[nama]','$data[username]','$data[password]','$data[level]')");

if ($datasimpan == TRUE) {
    echo json_encode('SUKSES');
} else {
    echo json_encode('GAGAL');
}
