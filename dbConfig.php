<?php
class DbConfig 
//class berfungsi untuk menampung isi dari program yang akan dijalankan didalamnya berisi atribut / type data dan method untuk menjalankan suatu program.
{
    //private yaitu menyembunyikan/menjaga property dan method agar tidak bisa diakses diluar class

    //sebagai isi dari koneksi
    private $_host = 'localhost';
    private $_username = 'mutiarrhy';
    private $_password = '';
    private $_database = 'dbdatasiswa';

    protected $connection; //proteced yaitu property ataupun method tersebut tidak bisa diakses dari luar class. namun bisa diakses oleh class itu sendiri atau turunan


    //fungsinya untuk digunakan sebagai koneksi ke database
    public function __construct(){

        //mengacu pada line 9
        if (!isset($this->connection)) {
            $this->connection = new mysqli($this->host, $this->_username, $this->password, $this->_database);
             //jika koneksi gagal tampilkan pesan bahwa koneksi tidak bisa terhubung ke server database
            if (!$this->connection) {
                echo 'cannot connect to database server';
                exit;
        }

    }
    //mengembalikan nilai dari koneksi
    return $this->connection;
}
}
//rows(variable)untuk menampung data ke database
//query untuk menampilkan ke database
//result(hasil)
//return (kembali)
//foreach pengulaian untuk array
$conn = mysqli_connect("localhost","mutiarrhy","","dbdatasiswa");

function query ($query){
    global $conn;
    $result = mysqli_query($conn,$query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}
?>