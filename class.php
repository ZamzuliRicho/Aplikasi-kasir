
<?php
include 'DB.php';

class Total
{
  protected $totalHargabakar;
  protected $totalHargaKebuli;
  protected $totalHargaKare;
  protected $totalHargakopi;
  protected $totalHargaJeruk;
  protected $totalHargaMarimas;

  protected $totalMakan;
  protected $totalMinum;

  protected $totalSeluruh;
  protected $coba;

  protected $detail;
  protected $produk;

}

class Produk {
private $hargabakar;
private $hargaKebuli;
private $hargaKare;
private $hargakopi;
private $hargaJeruk;
private $hargaMarimas;



 function __construct() {
  $db = new DB();
        
  $users = $db->getRows('produk',array('order_by'=>'id_produk DESC'));

  foreach ($users as $row) {
    $harga[$row['nama']] = $row['harga'];
  }

  extract($harga);

  $this->hargabakar = $bakar;
  $this->hargaKebuli = $Kebuli;
  $this->hargaKare = $Kare;
  $this->hargakopi= $kopi;
  $this->hargaJeruk = $Jeruk;
  $this->hargaMarimas = $Marimas;
 }

  public function getHargabakar()
 {
   return $this->hargabakar;
 }
 public function getHargaKebuli()
 {
   return $this->hargaKebuli;
 }
 public function getHargaKare()
 {
   return $this->hargaKare;
 }
 public function getHargakopi()
 {
   return $this->hargakopi;
 }
 public function getHargaJeruk()
 {
   return $this->hargaJeruk;
 }
 public function getHargaMarimas()
 {
   return $this->hargaMarimas;
 }
}


class Detail {

private $Jmlbakar;
private $JmlKebuli;
private $JmlKare;
private $Jmlkopi;
private $JmlJeruk;
private $JmlMarimas;

  public function setJumlahMakan($Jmlbakar,$JmlKebuli,$JmlKare){
  $this->Jmlbakar = $Jmlbakar;
  $this->JmlKebuli = $JmlKebuli;
  $this->JmlKare = $JmlKare;
 }

 public function setJumlahMinum($Jmlkopi,$JmlJeruk,$JmlMarimas){
  $this->Jmlkopi = $Jmlkopi;
  $this->JmlJeruk = $JmlJeruk;
  $this->JmlMarimas = $JmlMarimas;
 }

 public function getJmlbakar()
 {
   return $this->Jmlbakar;
 }
 public function getJmlKebuli()
 {
   return $this->JmlKebuli;
 }
 public function getJmlKare()
 {
   return $this->JmlKare;
 }
 public function getJmlkopi()
 {
   return $this->Jmlkopi;
 }
 public function getJmlJeruk()
 {
   return $this->JmlJeruk;
 }
 public function getJmlMarimas()
 {
   return $this->JmlMarimas;
 }
}

class Transaksi extends Total {

  function __construct($detail,$produk)
  {
    $this->detail = $detail;
     $this->produk = $produk;
  }

 public function getHargaMakan() {
  $this->totalHargabakar = $this->produk->getHargabakar() * $this->detail->getJmlbakar();
  $this->totalHargaKebuli = $this->produk->getHargaKebuli()* $this->detail->getJmlKebuli();
  $this->totalHargaKare = $this->produk->getHargaKare()* $this->detail->getJmlKare();
  $this->totalMakan = $this->totalHargabakar + $this->totalHargaKebuli + $this->totalHargaKare;
 }

  public function getHargaMinum() {
  $this->totalHargakopi = $this->produk->getHargakopi() * $this->detail->getJmlkopi();
  $this->totalHargaJeruk = $this->produk->getHargaJeruk()* $this->detail->getJmlJeruk();
  $this->totalHargaMarimas = $this->produk->getHargaMarimas()* $this->detail->getJmlMarimas();
  $this->totalMinum = $this->totalHargakopi + $this->totalHargaJeruk + $this->totalHargaMarimas;
 }
  public function setTotalSeluruh() {
  $this->totalSeluruh = $this->totalMakan + $this->totalMinum;
 }

 public function getDetail() {
  return $this->detail;
 }

 public function Finaltotal() {
  echo "===================## Struk Pembelian ##=====================";
  echo "<br>";
  echo "=================## Rumah Makan Enak ##====================";
  echo "<br>";
  echo "Total Harga Makanan = Rp. ".$this->totalMakan.",-";
  echo "<br>";
  echo "<br>";
  echo "Total Harga Minuman = Rp. ".$this->totalMinum.",-";
  echo "<br><br>";
  echo "Harga Total = Rp. ".$this->totalSeluruh.",-";
  echo "<br>";
  echo "========================================================";
  echo "<br>";
  //echo $this->JmlMarimas;
  //echo $this->JmlKare;
  echo "<script>window.print()</script>";
 }
}

 ?>