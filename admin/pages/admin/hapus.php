<?php
include '../../model/conn.php';

$datajson = file_get_contents("php://input");
$data = json_decode($datajson, true);
$data['idhapus'];


$hapus = $koneksi->query("DELETE FROM tbl_admin WHERE admin_id = '$data[idhapus]'");


if ($hapus == TRUE) {
    echo json_encode('SUCCESS');
} else {
    echo json_encode('ERROR');
}
