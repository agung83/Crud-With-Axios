<?php
include '../../model/conn.php';


$data = $koneksi->query("SELECT * FROM tbl_admin"); ?>


<!-- script ini untuk meload datatable, jika script ini dihilangkan maka datatable tidak muncul -->
<script>
    $(function() {
        $("#example1").DataTable();
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
        });
    });
</script>

<table class="table table-bordered" id="example1">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Admin</th>
            <th>Username</th>
            <th>Password</th>
            <th>Level</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($data as $no => $pecah) : ?>
            <tr>
                <td><?php echo ++$no  ?></td>
                <td><?php echo $pecah['admin_nama']  ?></td>
                <td><?php echo $pecah['admin_username']  ?></td>
                <td><?php echo $pecah['admin_password']  ?></td>
                <td><?php echo $pecah['admin_level']  ?></td>
                <td>
                    <button type="button" onclick="tampilmodal('<?= $pecah['admin_id'] ?>')" class="btn btn-warning">
                        <i class="fa fa-edit"></i>
                    </button>

                    <button type="button" onclick="hapus('<?= $pecah['admin_id'] ?>')" class="btn btn-danger"> <i class="fa fa-trash"></i></button>

                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>