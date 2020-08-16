<?php
include '../../model/conn.php';

$datajson = file_get_contents('php://input');
$data = json_decode($datajson, true);


$edit = $koneksi->query("UPDATE tbl_admin SET admin_nama = '$data[nama]', 
                                                admin_username ='$data[username]',
                                                admin_password = '$data[password]',
                                                admin_level='$data[level]' WHERE 
                                                admin_id = '$data[id]'");
if ($data == true) {
    echo json_encode('success');
} else {
    echo json_encode('erorr');
}
