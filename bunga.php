<?php
  class bunga{
    public function mekar($nama,$warna){
      return "Bunga $nama berwarna $warna sedang mekar";
    }
  }

$bunga_new=new bunga();
$bunga_new->mekar("Mawar", "Merah Kuning Hijau dilangit yang Biru");
echo $bunga_new->mekar();
?>
