<?php
include '../../model/conn.php';
$json = file_get_contents('php://input');
$data  = json_decode($json, true);
$id = $data['id'];


$dataEdit = $koneksi->query("SELECT * FROM tbl_barang WHERE barang_id = '$id'")->fetch_assoc();

echo json_encode($dataEdit);
