<?php
class Rumah {
    public $warna;
    public $jumlahKamar;

    public function __construct($warna, $jumlahKamar) {
        $this->warna = $warna;
        $this->jumlahKamar = $jumlahKamar;
    }

    public function infoRumah() {
        echo "Rumah warna {$this->warna}, jumlah kamar {$this->jumlahKamar}";
    }
}

$rumah = new Rumah("Krem", 4);
$rumah->infoRumah();
?>
