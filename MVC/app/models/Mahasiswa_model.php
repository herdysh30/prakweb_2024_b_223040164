<?php

class Mahasiswa_model{
    // private $mhs = [
    //     [   "nama" => "Herdy Sya'banul Hakim",
    //         "nrp" => "223040164",
    //         "email" => "herdy.223040164@mail.unpas.ac.id",
    //         "jurusan" => "Teknik Informatika"
    //     ],
    //     [   "nama" => "Miftahul Huda",
    //         "nrp" => "223040145",
    //         "email" => "miftahul.223040145@mail.unpas.ac.id",
    //         "jurusan" => "Teknik Informatika"
    //     ],
    //     [   "nama" => "Muhamad Rizki Maulana",
    //         "nrp" => "223040167",
    //         "email" => "rizki.223040167@mail.unpas.ac.id",
    //         "jurusan" => "Teknik Informatika"
    //     ],
    // ];

    private $dbh; //database handler
    private $stmt;
    public function __construct() {
        //data source name
        $dsn = 'mysql:host=localhost;dbname=phpmvc';
        try {
            $this->dbh = new PDO($dsn, 'root', '');
        }catch(PDOException $e) {
            die($e->getMessage());
        }
    }
    
    public function getAllMahasiswa() {
        $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }

}