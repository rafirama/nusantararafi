<?php

class Produk
{
    public $dua;
    public $tiga;
    public $satu;
    public $empat;
    public $lima;
    public $enam;
    public $jmlSatu;
    public $jmlDua;
    public $jmlTiga;
    public $jmlEmpat;
    public $jmlLima;
    public $jmlEnam;
    public $hargaSatu;
    public $hargaDua;
    public $hargaTiga;
    public $hargaEmpat;
    public $hargaLima;
    public $hargaEnam;
    public $totalSeluruh;
    public $totalHargaSatu;
    public $totalHargaDua;
    public $totalHargaTiga;
    public $totalHargaEmpat;
    public $totalHargaLima;
    public $totalHargaEnam;

    function __construct()
    {
        $this->hargaSatu = 55000;
        $this->hargaDua = 55000;
        $this->hargaTiga = 55000;
        $this->hargaEmpat = 55000;
        $this->hargaLima = 55000;
        $this->hargaEnam = 55000;
    }
}

class Jumlah extends Produk
{
    public function getJumlah($jmlSatu, $jmlDua, $jmlTiga, $jmlEmpat, $jmlLima, $jmlEnam)
    {
        $this->jmlSatu = $jmlSatu;
        $this->jmlDua = $jmlDua;
        $this->jmlTiga = $jmlTiga;
        $this->jmlEmpat = $jmlEmpat;
        $this->jmlLima = $jmlLima;
        $this->jmlEnam = $jmlEnam;
    }

   
    public function setHarga()
    {
        $this->totalHargaSatu = $this->hargaSatu * $this->jmlSatu;
        $this->totalHargaDua = $this->hargaDua * $this->jmlDua;
        $this->totalHargaTiga = $this->hargaTiga * $this->jmlTiga;
        $this->totalHargaEmpat = $this->hargaEmpat * $this->jmlEmpat;
        $this->totalHargaLima = $this->hargaLima * $this->jmlLima;
        $this->totalHargaEnam = $this->hargaEnam * $this->jmlEnam;
        $this->totalSeluruh = $this->totalHargaSatu + $this->totalHargaDua + $this->totalHargaTiga + $this->totalHargaEmpat + $this->totalHargaLima + $this->totalHargaEnam;
    }

    public function cetakStruk()
    {
        echo "<br><br><br>";
        echo "****************************************************";
        echo "<br>";
        echo " <b> Riwayat Pembelian NUSANTARA COFFE </b>  ";
        echo "<br>";
        echo "Arabica Aceh : $this->jmlSatu porsi x Rp. : <b> Rp.$this->totalHargaSatu</b>";
        echo "<br>";
        echo "Arabica Bali Kintamani : $this->jmlDua porsi x Rp. : <b> Rp.$this->totalHargaDua</b>";
        echo "<br>";
        echo "Arabica Bangkulu : $this->jmlTiga porsi x Rp. : <b>  Rp.$this->totalHargaTiga</b>";
        echo "<br>";
        echo "Arabica Papua Wamena : $this->jmlEmpat porsi x Rp.  : <b>  Rp.$this->totalHargaEmpat</b>";
        echo "<br>";
        echo "Arabica Mandheling : $this->jmlLima porsi x Rp. : <b>  Rp.$this->totalHargaLima</b>";
        echo "<br>";
        echo "Arabica Toraja : $this->jmlEnam porsi x Rp. : <b>  Rp.$this->totalHargaEnam</b>";
        echo "<br>";
        echo "Total Bayar : <b>Rp.$this->totalSeluruh</b>";
        echo "<br>";
        echo "****************************************************";
    }
}