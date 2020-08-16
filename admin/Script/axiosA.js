    function simpan() {


        var namaAdmin = $('#namaAdmin').val()
        var username = $('#username').val()
        var password = $('#password').val()
        var level = $('#level').val()

        axios.post('pages/admin/aksiSimpan.php', {

                'nama': namaAdmin,
                'username': username,
                'password': password,
                'level': level,
            })
            .then(function (response) {
                $('#tambah').modal('hide')
                kosong()
                $('#isi').load('pages/admin/dataadmin.php');


            })
            .catch(function (error) {
                console.log(error);

            });
    }

    function tampilmodal(id) {
        axios.post('pages/admin/tampilEdit.php', {

                'idedit': id,
            })
            .then(function (res) {

                console.log(res)
                //res kita simpan dalam var data terlebih dahulu, jika tidak kitaa simpan maka data di edit tidak akan tampil , tidak sama dengan ajax
                var data = res.data
                $('#id').val(data.admin_id);
                $('#namaAdmin1').val(data.admin_nama);
                $('#username1').val(data.admin_username);
                $('#password1').val(data.admin_password);
                $('#level1').val(data.admin_level);
                $('#editadmin').modal()

            })
            .catch(function (error) {
                console.log(error);

            });


    }

    function edit() {


        var id = $('#id').val()
        var namaAdmin = $('#namaAdmin1').val()
        var username = $('#username1').val()
        var password = $('#password1').val()
        var level = $('#level1').val()

        axios.post('pages/admin/aksiEdit.php', {
                'id': id,
                'nama': namaAdmin,
                'username': username,
                'password': password,
                'level': level
            })
            .then(function (response) {
                $('#editadmin').modal('hide')
                kosong()
                $('#isi').load('pages/admin/dataadmin.php');

            })
            .catch(function (error) {
                console.log(error);

            });

    }


    function hapus(id) {
        Swal.fire({
            title: 'Kamu Yakin?',
            text: "data ini akan hilang!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, Hapus!',

        }).then((result) => {
            if (result.value) {


                axios.post('pages/admin/hapus.php', {
                        'idhapus': id,
                    })
                    .then(function (res) {
                        var data = res.data
                        $('#isi').load('pages/admin/dataadmin.php');
                    })
                    .catch(function (error) {
                        console.log(error);

                    });


            }
        })





    }



    function kosong() {
        $('#namaAdmin').val("")
        $('#username').val("")
        $('#password').val("")
        $('#level').val("")
    }

    $('#isi').load('pages/admin/dataadmin.php');