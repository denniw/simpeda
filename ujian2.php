<?php
  class karyawan{
    public $nama;
    public $alamat;
    public $NIP;
    public $status;
    public $golongan;
    public $gajipokok;
    public $lembur;
    public $jumlah_jam_lembur;
    public $perjamlembur=15000;


    public function setnama($nama){
      $this->NamaKaryawan = $nama;
    }
    public function setalamat($alamat)  {
      $this->AlamatKaryawan = $alamat;
    }
    public function setNIP($snip){
      $this->NIPKaryawanNIP = $nip;
    }
    public function setstatus($status){
      $this->StatusNikah = $status;
    }
    public function setgolongan($gol){
      $this->Golongan = $gol;
    }
    public function setlembur($lm){
        return $this->jumlah_jam_lembur=$lm;
      }
    public function getNamaKaryawan (){
        return $this -> NamaKaryawan;}
    public function getAlamatKaryawan (){
        return $this -> AlamatKaryawan;}
    public function getNIPKaryawan (){
        return $this -> NIPKaryawan;}
    public function getStatusPernikahan (){
        return $this -> StatusPernikahan;}
    public function getGolongan (){
        return $this -> Golongan;}
    public function getlembur(){
        return $this->jumlah_jam_lembur;
      }
    public function gettotallembur(){
        return $this->perjamlembur*$this->getlembur();
      }
      public function TotalGajiBulanIni (){
      return $this -> getTotalUangLembur() + $this ->getGajiPokok();
      }
  }
  public function getGajiPokok (){
        switch ($this->getGolongan()){
            case 'Ia': $this->GajiPokok = 120000;break;
            case 'Ib': $this->GajiPokok = 125000;break;
            case 'Ic': $this->GajiPokok = 1300000;break;
            case 'Id': $this->GajiPokok = 135000;break;
            case 'IIa': $this->GajiPokok = 200000;break;
            case 'IIb': $this->GajiPokok = 210000;break;
            case 'IIc': $this->GajiPokok = 220000;break;
            case 'IId': $this->GajiPokok = 230000;break;
            case 'IIIa': $this->GajiPokok = 240000;break;
            case 'IIIb': $this->GajiPokok = 250000;break;
            case 'IIIc': $this->GajiPokok = 260000;break;
            case 'IIId': $this->GajiPokok = 270000;break;
            case 'IVa': $this->GajiPokok = 280000;break;
            case 'IVb': $this->GajiPokok = 290000;break;
            case 'IVc': $this->GajiPokok = 300000;break;
            case 'IVd': $this->GajiPokok = 310000;break;
          }
      return $this->GajiPokok;

  }
}
$Winny = new GajiKaryawanBankBRI (); // membuat objek baru dengan nama $Winny YNAG BERTIPE GajiKaryawanBankBRI

$Winny -> setNamaKaryawan ("ronaldo");// digunakan untuk mengatur data dari objek tersebut,
$Winny -> setGolongan ("IIIb");
$Winny -> setJamLembur (25);


printf ("Nama Pegawai : %s<br />", // baris 11 ini dan kebawah digunakan untuk menampilkan data nama karyawan menggunakan printf()
                $Winny ->getNamaKaryawan ());
printf ("Jam Lembur : %d<br />",
                $Winny ->getTotalJamLembur());
printf ("Gaji Pokok : %.2f<br />",
                $Winny ->getGajiPokok());
printf ("Total Uang Lembur : %.2f<br />",
                $Winny ->getTotalUangLembur());
printf ("%s","-------------------------------------------<br />");
printf ("Total Gaji Bulan Ini : %.2f",
                $Winny ->TotalGajiBulanIni());
?>
