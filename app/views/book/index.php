<div class="container">
    
    <div class="header d-flex justify-content-between align-items-center pb-4">
        <h3 class="mb-3 text-capitalize">Daftar buku <?= $data['nama'] ?></h3>
        <a href="<?= BASE_URL;?>/book/tambah" class="btn btn-danger">Tambah Buku</a>
    </div>
    <table class="table table-success table-striped table-bordered">
    <thead>
        <tr>
        <th scope="col" class="text-center">#</th>
        <th scope="col" class="text-center">Judul</th>
        <th scope="col" class="text-center">Penulis</th>
        <th scope="col" class="text-center">Tanggal Selesai</th>
        <th scope="col" class="text-center">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        foreach($data['buku'] as $buku) {
        ?>
        <tr>
        <th scope="row" class="text-center"><?php echo $no++ ?></th>
        <td><?= $buku['judul'] ?></td>
        <td><?= $buku['penulis'] ?></td>
        <td><?= $buku['tanggal_selesai'] ?></td>
        <td> 
            <form action="<?= BASE_URL ;?>/book/hapus/<?= $buku['id'] ;?>" method="POST">
                <center>
                    <button class= "btn btn-danger">Hapus</button>
                </center>
            </form>
        </td>
        </tr>
        <?php } ?>
        
    </tbody>   
    </table> 
</div>
