<?php

class PesawatTerbang{
    public $warnaPesawat;

    public function __construct($warnaAwal){
        $this->warnaPesawat= $warnaAwal;
    }

    public function gantiWarna($warnaBaru){
        $this->warnaPesawat=$warnaBaru;
        return $this->warnaPesawat;
    }
    public function setWarna($warnaBaru){
        $this->warnaPesawat=$warnaBaru;
    }
    public function getWarna(){
        return $this->warnaPesawat;
    }
}

class mobil{
    protected $warnaMobil;
    protected $kecepatanMobil;

    public function __construct($warnaAwalMobil){
        $this->warnaMobil= $warnaAwalMobil;
        $this->kecepatanMobil= 0;
    }
    public function tambahKecepatan($kecepatan){
        $this->kecepatanMobil= $kecepatan + $this->kecepatanMobil;
    }
    public function setWarna($warnaBaru){
        $this->warnaMobil= $warnaBaru;
    }
    public function getWarna(){
        return $this->warnaMobil;
    }
    public function getKecepatan(){
        return $this->kecepatanMobil;
    }
}

class mobilBalap extends mobil{
    public function tambahKecepatan($kecepatan){
        $this->kecepatanMobil= (2*$kecepatan) + $this->kecepatanMobil;
    }
}

// lingkaran
class lingkaran{
    protected $r;
    // protected $keling;
    // protected $luas;

    public function __construct($jari){
        $this->r= $jari;
    }
    public function getKeliling(){
        $this->keling= 2*3.14* $this->r;
        return $this->keling;
    }
    public function getLuas(){
        $this->luas= 3.14*($this->r*$this->r);
        return $this->luas;
    }
}
?>