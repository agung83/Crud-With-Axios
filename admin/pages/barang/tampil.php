<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Barang</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item "><a href="#">Home</a></li>
                        <li class="breadcrumb-item "><a href="#">Barang</a></li>

                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>




    <section class="content">

        <div class="card">
            <div class="card-header">
                <h3>Data Barang</h3>
            </div>
            <div class="card-body">
                <button type="button" class="btn btn-success  mb-2" data-toggle="modal" data-target="#tambah"><i class="fa fa-plus"></i></button>

                <div class="table-responsive">
                    <div id="pesan" style="display: none;" class="alert alert-info">

                    </div>
                    <div id="databarang"></div>


                </div>
            </div>


        </div>

    </section>


    <!------------------------------------ Modal simpan----------------------------------------------------- -->
    <div class="modal fade" id="tambah" tabindex="-10" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-success">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data Admin</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="formSimpan" action="" method="POST" enctype="multipart/form-data">
                        <div class="form-group">

                            <label for="">Nama Barang</label>
                            <input type="text" class="form-control" id="namaBarang" name="namaBarang">
                        </div>

                        <div class="form-group">
                            <label for="">Harga Pesan</label>
                            <input type="number" class="form-control" id="hargaPesan" name="hargaPesan">

                        </div>

                        <div class="form-group">
                            <label for="">Stok Barang</label>
                            <input type="text" class="form-control" id="stokBarang" name="stokBarang">
                        </div>

                        <div class="form-group">
                            <label for="">Berat Barang</label>
                            <input type="text" class="form-control" id="beratBarang" name="beratBarang">
                        </div>

                        <div class="form-group">
                            <label for="">Keterangan</label>
                            <textarea name="ket" class="form-control" id="ket" cols="30" rows="5">

                         </textarea>
                        </div>

                        <div class="form-group">
                            <label for="">Foto Barang</label>
                            <br>
                            <b>Max Foto* 1 Mb</b>
                            <input type="file" name="foto" class="form-control" id="foto">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" onclick="simpanBarang()" class="btn btn-success">Simpan</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">close</button>
                </div>
            </div>
        </div>
    </div>





    <div class="modal fade" id="editbarang" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-warning">
                    <h5 class="modal-title bg-warning" id="exampleModalLabel">Edit Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="form" action="" method="POST" enctype="multipart/form-data">

                        <div class="form-row">
                            <div class="col form-group">
                                <input type="hidden" id="id" name="id">
                                <label for="">Nama Barang</label>
                                <input type="text" class="form-control" autocomplete id="nmBrg" name="nmBrg">
                            </div>

                            <div class="col form-group">
                                <label for="">Harga Pesan</label>
                                <input type="number" class="form-control" autocomplete id="harga" name="harga">
                            </div>
                        </div>

                        <div class="col form-group">
                            <label for="">Stok Barang</label>
                            <input type="text" class="form-control" autocomplete id="stok" name="stok">
                        </div>



                        <div class="col form-group">
                            <label for="">Berat Barang</label>
                            <input type="text" class="form-control" autocomplete id="berat" name="berat">
                        </div>



                        <div class="form-group">
                            <label for="">Keterangan</label>
                            <textarea name="kete" class="form-control" id="kete" cols="30" rows="5">

                         </textarea>
                        </div>

                        <div class="form-group">
                            <img id="gmbr" width="200" src="" alt="haaa Kosong??">
                            <input type="text" class="form-control" readonly id="fotolama">
                        </div>

                        <div class="form-group">
                            <label for="">Foto Barang</label>
                            <br>
                            <b>Max Foto* 1 Mb</b>
                            <input type="file" id="foto1" name="foto" class="col form-control" autocomplete name="foto">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" onclick="updateBarang()" class="btn btn-warning">Edit</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">close</button>
                </div>
            </div>
        </div>
    </div>

</div>