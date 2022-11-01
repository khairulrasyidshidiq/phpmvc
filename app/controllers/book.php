<?php

class book extends controller{
    public function index($pengguna = 'Anda'){
        $data['judul'] = 'Daftar buku';
        $data['buku'] = $this->model('book_model')->getbooks();
        $data['nama'] = $pengguna;
        $this->view('templates/header', $data);
        $this->view('book/index', $data);
        $this->view('templates/footer');
    }

    public function tambah(){
        $data['judul'] = 'Daftar buku';
        $this->view('templates/header', $data);
        $this->view('book/tambah', $data);
        $this->view('templates/footer');

        if(isset($_POST['kirim'])){
            $judul = $_POST['judul'];
            $penulis = $_POST['penulis'];
            $tanggal = $_POST['tanggal'];
            $conn = mysqli_connect("localhost", "root", "", "rak_buku");
            // parameter 1 : nama server, parameter 2 : username, parameter 3 : password, parameter 4 : nama database 
            $query = "INSERT INTO buku VALUES ('', '$judul', '$penulis', '$tanggal')";
            $result = mysqli_query($conn, $query);
        }

    }

    public function hapus($id){
        $conn = mysqli_connect("localhost", "root", "", "rak_buku");
            // parameter 1 : nama server, parameter 2 : username, parameter 3 : password, parameter 4 : nama database 
            $query = "DELETE FROM buku WHERE id = $id";
            $result = mysqli_query($conn, $query);
            $berhasil = mysqli_affected_rows($conn);

            if($berhasil > 0){
                header("Location: /PHP/PHPMVC/public/book/index/Anda");
            }
    }
}