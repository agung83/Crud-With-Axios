<?php
include '../../model/conn.php';

$databarang =  $koneksi->query("SELECT * FROM tbl_barang") ?>


<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Barang</th>
            <th>Harga Pesan</th>
            <th>Stok Barang</th>
            <th>Berat Barang</th>
            <th>Keterangan</th>
            <th>Foto</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($databarang as $no => $pecah) :
            # code...
        ?>

            <tr>
                <td><?= ++$no ?></td>
                <td><?= $pecah['barang_nama'] ?></td>
                <td><?= $pecah['barang_harga'] ?></td>
                <td><?= $pecah['barang_stok'] ?></td>
                <td><?= $pecah['barang_berat'] ?></td>
                <td><?= $pecah['barang_deskripsi'] ?></td>
                <td><img width="200" src="././images/fotobarangaxios/<?= $pecah['barang_gambar'] ?>" alt=""></td>
                <td>
                    <button type="button" onclick="tampilEdit('<?= $pecah['barang_id'] ?>')" class="btn btn-warning btn-block">
                        <i class="fa fa-edit"></i>
                    </button>

                    <button type="button" onclick="hapusBarang('<?= $pecah['barang_id'] ?>')" class="btn btn-danger btn-block"><i class="fa fa-trash"></i></button>


                </td>

            </tr>
        <?php endforeach ?>
    </tbody>
</table>