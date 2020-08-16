<?php
include '../../model/conn.php';

$datajson = file_get_contents('php://input');
$data = json_decode($datajson, true);

$id = $data['idedit'];


$data = $koneksi->query("SELECT * FROM tbl_admin WHERE admin_id = '$id'")->fetch_assoc();

echo json_encode($data);
