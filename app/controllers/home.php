<?php

// class home{
//     public function index($nama = 'Jojo', $pekerjaan = 'Pelajar'){
//         echo "Halo, nama saya $nama dan saya merupakan seorang $pekerjaan"; 
//     }
// }

class home extends controller {
    public function index(){
        $data['judul'] = 'Home';
        $this->view('templates/header', $data);
        $this->view('home/index');
        $this->view('templates/footer');

    }

    public function page(){
        $data['judul'] = 'Page';
        $data['gambar'] = 'haikal.jpeg';
        $data['nama'] = 'Haikal';
        $data['pekerjaan'] = 'Pelajar';
        $this->view('templates/header', $data);
        $this->view('home/page', $data);
        $this->view('templates/footer');

    }
}