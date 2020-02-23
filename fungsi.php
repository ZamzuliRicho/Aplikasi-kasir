<style type="text/css">
  
    .page {
        width: 297mm;
        min-height: 148mm;
        padding: 2mm;
        margin: 10mm auto;
        border-radius: 5px;
        background: white;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
    }
    .subpage {
        padding: 0.5cm;
        height: 80mm;
        background-color: white;
        opacity: 0.8;
      filter: alpha(opacity=40);
    }
    
    @page {
        size: a5;
        size: landscape;
        margin: 50;
        
    }
    @media print {
        html {
            width: 297mm;
            height: 148mm;        
        }
        body{
          padding-top: 90px;
          background: url("images/logoupprint.png") no-repeat;
        background-size: 100%;
        width: 297mm;
            height: 148mm;     
        }

        .page {
            margin: 0;
            border: initial;
            border-radius: initial;
            width: initial;
            min-height: initial;
            box-shadow: initial;
            background: initial;
            page-break-after: always;
        }
    }

</style>
<?php
include 'class.php';
$produk = new Produk();
$detail = new Detail();
$jumlah = new Transaksi($detail,$produk);

if (isset($_POST['check'])) {
  $jmlbakar = $_POST['bakar'];
  $jmlKebuli = $_POST['Kebuli'];
  $jmlKare = $_POST['kare'];
  $jmlkopi = $_POST['kopi'];
  $jmlJeruk = $_POST['jeruk'];
  $jmlMarimas = $_POST['marimas'];

  if ($jmlbakar == null && $jmlKebuli != null && $jmlKare != null) {
    $jumlah->getDetail()->setJumlahMakan(0,$jmlKebuli,$jmlKare);
  } elseif ($jmlbakar != null && $jmlKebuli == null && $jmlKare != null) {
      $jumlah->getDetail()->setJumlahMakan($jmlbakar,0,$jmlKare);  
  } elseif ($jmlbakar != null && $jmlKebuli != null && $jmlKare == null) {
      $jumlah->getDetail()->setJumlahMakan($jmlbakar,$jmlKebuli,0);
  } elseif ($jmlbakar == null && $jmlKebuli == null && $jmlKare != null) {
      $jumlah->getDetail()->setJumlahMakan(0,0,$jmlKare);
  } elseif ($jmlbakar == null && $jmlKebuli != null && $jmlKare == null) {
      $jumlah->getDetail()->setJumlahMakan(0,$jmlKebuli,0);  
  } elseif ($jmlbakar != null && $jmlKebuli == null && $jmlKare == null) {
      $jumlah->getDetail()->setJumlahMakan($jmlbakar,0,0);
  } elseif ($jmlbakar == null && $jmlKare == null && $jmlKebuli == null) {
     $jumlah->getDetail()->setJumlahMakan(0,0,0);
  } else {
      $jumlah->getDetail()->setJumlahMakan($jmlbakar,$jmlKebuli,$jmlKare);
  }

  if ($jmlkopi == null && $jmlJeruk != null && $jmlMarimas != null) {
    $jumlah->getDetail()->setJumlahMinum(0,$jmlJeruk,$jmlMarimas);
  } elseif ($jmlkopi != null && $jmlJeruk == null && $jmlMarimas != null) {
      $jumlah->getDetail()->setJumlahMinum($jmlkopi,0,$jmlMarimas);  
  } elseif ($jmlkopi != null && $jmlJeruk != null && $jmlMarimas == null) {
      $jumlah->getDetail()->setJumlahMinum($jmlkopi,$jmlJeruk,0);
  } elseif ($jmlkopi == null && $jmlJeruk == null && $jmlMarimas != null) {
      $jumlah->getDetail()->setJumlahMinum(0,0,$jmlMarimas);
  } elseif ($jmlkopi == null && $jmlJeruk != null && $jmlMarimas == null) {
      $jumlah->getDetail()->setJumlahMinum(0,$jmlJeruk,0);  
  } elseif ($jmlkopi != null && $jmlJeruk == null && $jmlMarimas == null) {
      $jumlah->getDetail()->setJumlahMinum($jmlkopi,0,0); 
  } elseif ($jmlkopi == null && $jmlMarimas == null && $jmlJeruk == null) {
     $jumlah->getDetail()->setJumlahMinum(0,0,0);
  } else {
      $jumlah->getDetail()->setJumlahMinum($jmlkopi,$jmlJeruk,$jmlMarimas);
  }

  $jumlah->getHargaMakan();
  $jumlah->getHargaMinum();
  $jumlah->setTotalSeluruh();
  $jumlah->Finaltotal();
}
?>