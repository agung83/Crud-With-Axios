$('#databarang').load('pages/barang/databarang.php');

function tampilEdit(id) {

    console.log(id);
    axios.post('pages/barang/tampilEdit.php', {
            'id': id
        })
        .then(function (res) {
            const data = res.data
            $('#id').val(data.barang_id)
            $('#nmBrg').val(data.barang_nama)
            $('#harga').val(data.barang_harga)
            $('#stok').val(data.barang_stok)
            $('#berat').val(data.barang_berat)
            $('#kete').val(data.barang_deskripsi)
            $('#fotolama').val(data.barang_gambar)

            document.getElementById('gmbr').src = 'images/fotobarangaxios/' + data.barang_gambar
            $('#editbarang').modal()
        })
}

function simpanBarang() {
    const foto = document.getElementById('foto').files[0];
    var namabarang = $('#namaBarang').val();
    var hargapesan = $('#hargaPesan').val();
    var stok = $('#stokBarang').val();
    var berat = $('#beratBarang').val();
    var ket = $('#ket').val();
    console.log(stok);

    let form_data = new FormData();
    form_data.append('namaBarang', namabarang);
    form_data.append('hargaPesan', hargapesan);
    form_data.append('stokBarang', stok);
    form_data.append('foto', foto);
    form_data.append('beratBarang', berat);
    form_data.append('ket', ket);



    axios.post('pages/barang/aksiSimpan.php', form_data)
        .then(function (res) {
            console.log(res)
            $('#pesan').html('<p>' + res.data + '</p>')
            $('#pesan').slideDown('slow')
            $('#databarang').load('pages/barang/databarang.php');
            $('#tambah').modal('hide')

        }).catch(function (err) {
            console.log(err)

        })


}

function updateBarang() {
    const foto = document.getElementById('foto1').files[0];
    var namabarang = $('#nmBrg').val();
    var hargapesan = $('#harga').val();
    var stok = $('#stok').val();
    var berat = $('#berat').val();
    var ket = $('#kete').val();
    var id = $('#id').val();
    var fotolama = $('#fotolama').val();




    let formData = new FormData();
    formData.append('id', id);
    formData.append('namaBarang', namabarang);
    formData.append('hargaPesan', hargapesan);
    formData.append('stokBarang', stok);
    formData.append('foto', foto);
    formData.append('beratBarang', berat);
    formData.append('ket', ket);
    formData.append('fotolama', fotolama);

    axios.post('pages/barang/aksiEdit.php', formData)
        .then(function (res) {
            console.log(res)
            $('#pesan').html('<p>' + res.data + '</p>')
            $('#pesan').slideDown('slow')
            $('#databarang').load('pages/barang/databarang.php');
            $('#editbarang').modal('hide')
        }).catch(function (err) {
            console.log(err)

        })

}

function hapusBarang(id) {
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


            axios.post('pages/barang/aksiHapus.php', {
                    'idhapus': id,
                })
                .then(function (res) {
                    var data = res.data
                    $('#pesan').html('<p>' + res.data + '</p>')
                    $('#pesan').slideDown('slow')
                    $('#databarang').load('pages/barang/databarang.php');
                })
                .catch(function (error) {
                    console.log(error);

                });


        }
    })

}