<?php
class Transportasi {
    public $nama;
    public $kapasitas;

    public function __construct($nama, $kapasitas) {
        $this->nama = $nama;
        $this->kapasitas = $kapasitas;
    }

    public function deskripsi() {
        return "Transportasi ini bernama $this->nama dan memiliki kapasitas $this->kapasitas penumpang.";
    }
}

class Pesawat extends Transportasi {
    public $maskapai;

    public function __construct($nama, $kapasitas, $maskapai) {
        parent::__construct($nama, $kapasitas);
        $this->maskapai = $maskapai;
    }

    public function deskripsiLengkap() {
        return "Pesawat ini bernama $this->nama, memiliki kapasitas $this->kapasitas penumpang, dan dioperasikan oleh maskapai $this->maskapai.";
    }
}

// Membuat object berdasarkan class Pesawat
$pesawatBaru = new Pesawat("Boeing 737", 180, "Garuda Indonesia");

// Menampilkan informasi transportasi dan pesawat
echo $pesawatBaru->deskripsi();         
echo "<br>";
echo $pesawatBaru->deskripsiLengkap();  
?>
