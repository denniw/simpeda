<?php
  /**
   *
   */
  class hitung {
    private $jumlah_jam_lembur;
    private $perjamlembur=15000;

  public function setlembur($lm){
      return $this->jumlah_jam_lembur=$lm;
    }
  public function getlembur(){
      return $this->jumlah_jam_lembur;
    }
  public function gettotallembur(){
      return $this->perjamlembur*$this->getlembur();
    }
  }

$gajilembur = new hitung();
$gajilembur->setlembur("8");
echo "Total Lembur Adalah :";
echo $gajilembur->gettotallembur();
 ?>
