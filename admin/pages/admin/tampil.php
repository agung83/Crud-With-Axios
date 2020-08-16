<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Admin</h1>
                    <!-- <div id="pesan_kirim" style="display: none;" class="alert alert-info mt-2"></div> -->
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item "><a href="#">Home</a></li>
                        <li class="breadcrumb-item "><a href="#">Admin</a></li>

                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>



    <section class="content">

        <div class="card">
            <div class="card-header">
                <h3>Data Admin</h3>
            </div>
            <div class="card-body">
                <button type="button" class="btn btn-success mb-2" data-toggle="modal" data-target="#tambah"><i class="fa fa-plus mr-2"></i>Tambah Data</button>
                <div class="table-responsive">

                    <div id="isi"></div>



                </div>
            </div>


        </div>

    </section>

    <!------------------------------------ Modal simpan----------------------------------------------------- -->
    <div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-success">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data Admin</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form action="" method="POST">
                        <div class="form-group">

                            <label for="">Admin Nama</label>
                            <input type="text" class="form-control" autocomplete id="namaAdmin">
                        </div>

                        <div class="form-group">
                            <label for="">Admin username</label>
                            <input type="text" class="form-control" autocomplete id="username">

                        </div>

                        <div class="form-group">
                            <label for="">Admin Password</label>
                            <input type="text" class="form-control" autocomplete id="password">

                        </div>

                        <div class="form-group">
                            <label for="">Admin Level</label>
                            <input type="text" class="form-control" autocomplete id="level">

                        </div>


                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" onclick="simpan()" class="btn btn-success">Simpan</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">close</button>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal Edit -->
    <div class="modal fade" id="editadmin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-warning">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Data Admin</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" method="POST">
                        <div class="form-group">
                            <input type="hidden" id="id">
                            <label for="">Admin Nama</label>
                            <input type="text" class="form-control" id="namaAdmin1">
                        </div>

                        <div class="form-group">
                            <label for="">Admin username</label>
                            <input type="text" class="form-control" id="username1">

                        </div>

                        <div class="form-group">
                            <label for="">Admin Password</label>
                            <input type="text" class="form-control" id="password1">

                        </div>

                        <div class="form-group">
                            <label for="">Admin Level</label>
                            <input type="text" class="form-control" id="level1">

                        </div>


                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" onclick="edit()" class="btn btn-warning">Edit</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">close</button>
                </div>
            </div>
        </div>
    </div>




</div>

<script>
    // var json_data = '{"user" : "agusph", "display_name" : "Agus Prawoto Hadi", "website" : "Jagowebdev.com"}';
    // obj = JSON.parse(json_data);

    // // Objek hanya bisa di buka melalui console
    // // console.log(obj);
    // console.log(obj.display_name);
</script>