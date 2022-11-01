<?php

class book_model{
    private $books = [
        //array asosiatif
        [
            "judul" => "hujan",
            "penulis" => "tere liye",
            "tanggal_selesai" => "2022-06-22",
        ],


    ];

    public function getbooks(){
        $conn = mysqli_connect("localhost", "root", "", "rak_buku");
        // parameter 1 : nama server, parameter 2 : username, parameter 3 : password, parameter 4 : nama database 
        $query = "SELECT * FROM buku";
        $result = mysqli_query($conn, $query);
        return $result;
    }
}