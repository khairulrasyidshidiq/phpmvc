
<form action="" method="POST">
    <div class="container col-lg-6">
        <div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1">Judul buku</span>
          <input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1" name="judul">
        </div>
        <div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1">Penulis buku</span>
          <input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1" name="penulis">
        </div>
        <div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1">Tanggal selesai</span>
          <input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1" name="tanggal">
        </div>
        <button type="submit" name="kirim" class="btn btn-success">Tambah</button>
    </div>
</form>


<?php if(isset($_POST['kirim'])) :?>
<script>
    Swal.fire({
        title: 'Success',
        text: 'Data berhasil ditambah!',
        icon: 'success',
        confirmButtonText: 'OK'
    })
    .then(function() {
        window.location.href = 'index'
    })
</script>
<?php endif;?>
        
