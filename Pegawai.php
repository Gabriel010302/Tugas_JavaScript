<?php
class Pegawai{
    protected $nip;
    public $nama;
    private $jabatan;
    private $agama;
    private $status;
    static $jml = 0;
    const PT = 'PT. HTTP Indonesia';

    public function __construct($nip, $nama, $jabatan, $agama, $status){
        $this->nip = $nip;
        $this->nama = $nama;
        $this->jabatan = $jabatan;
        $this->agama = $agama;
        $this->status = $status;
        self::$jml++;
    }
    public function setGajiPokok(){
        switch($this->jabatan){
            case 'Manager': $gapok = 15000000; break;
            case 'Asisten Manager': $gapok = 10000000; break;
            case 'Kepala Bagian': $gapok = 7000000; break;
            case 'Staff': $gapok = 5000000; break;
            default: $gapok;
        }
        return $gapok;
    }

    public function setTunjab(){
        $tunJab = $this->setGajiPokok() *0.2;
        return $tunJab;
    }
    // ternery set tunjangan keluarga
    public function setTunkel(){
        $tunKel = ($this->status == "Menikah") ? $this->setGajiPokok() * 0.1 : 0;
        return $tunKel;
    }

    public function setGajiKotor(){
        $gajiKotor = $this->setGajiPokok() + $this->setTunjab() + $this->setTunkel();
        return $gajiKotor;
    }

    public function setZakatProfesi(){
        $zakatProfesi = ($this->setGajiKotor() >= 6000000 && $this->agama == 'Islam') ? $this->setGajiKotor() * 0.025 : 0;
        return $zakatProfesi;
    }

    public function setGajiBersih(){
        $gajiBersih = $this->setGajiKotor() - $this->setZakatProfesi();
        return $gajiBersih;
    }


    public function cetak(){
        echo 'NIP Pegawai : '.$this->nip;
        echo '<br>Nama Pegawai : '.$this->nama;
        echo '<br>Jabatan : '.$this->jabatan;
        echo '<br>Agama : '.$this->agama;
        echo '<br>Status : '.$this->status;
        echo '<br>Gaji Pokok : Rp. '.number_format($this->setGajiPokok(),0,',','.');
        echo '<br>Tunjangan Jabatan :  Rp. '.number_format($this->setTunjab(),0,',','.');
        echo '<br>Tunjangan Keluarga :  Rp. '.number_format($this->setTunkel(),0,',','.');
        echo '<br>Zakat Profesi : Rp. '.number_format($this->setZakatProfesi(),0,',','.');
        echo '<br>Gaji Bersih : Rp. '.number_format($this->setGajiBersih(),0,',','.');
        echo '<hr>';
    }
}
?>