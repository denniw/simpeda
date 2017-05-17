<?php
class gajikaryawan   //untuk membuat class dengan nama gajikaryawanbankBRI
{
    private $NamaKaryawan; //Membuat member data tipe private yang hanya dapat di akses oleh kelas itu sendiri
    private $AlamatKaryawan;
    private $NIPKaryawan;
    private $StatusPernikahan;
    private $Golongan;

    private $GajiPokok;
    private $TotalJamLembur;
    private $TotalUangLembur;
    private $PerJamLembur= 15000; // mendefinisikan variable dengan menggunakan nilai


    public function setNamaKaryawan ($nama){ //untuk membuat fungsi accesor untuk pengaturan data dengan nama setNamaKaryawan(),
        $this ->NamaKaryawan = $nama;
    }
    public function setAlamatKaryawan ($alamat){
        $this ->AlamatKaryawan = $alamat;
    }
    public function setNIPKaryawan ($nip){
        $this ->NIPKaryawan = $nip;
    }

    public function setStatusPernikahan ($status){
        $this ->StatusPernikahan = $status;
    }

    public function setGolongan ($gol){
        $this ->Golongan = $gol;
    }
    public function setJamLembur ($lmbr){
        $this ->TotalJamLembur = $lmbr;
    }


    public function getNamaKaryawan (){ //di gunakan untuk membuat accesor get.
        return $this -> NamaKaryawan;}
    public function getAlamatKaryawan (){
        return $this -> AlamatKaryawan;}
    public function getNIPKaryawan (){
        return $this -> NIPKaryawan;}
    public function getStatusPernikahan (){
        return $this -> StatusPernikahan;}
    public function getGolongan (){
        return $this -> Golongan;}

    public function getTotalJamLembur (){
        return $this -> TotalJamLembur;
    }


    public function getTotalUangLembur (){ //digunakan untuk membuat fungsi untuk total lembur
        return $this -> PerJamLembur *
                    $this -> getTotalJamLembur();
    }
    public function TotalGajiBulanIni (){
        return $this -> getTotalUangLembur() +
                    $this ->getGajiPokok();
    }

    public function getGajiPokok (){ //digunakan untuk menentukan gaji pokok berdasarkan golongan
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
  $Winny = new gajikaryawan ();

  $Winny -> setNamaKaryawan ("ronaldo");
  $Winny -> setGolongan ("IIIb");
  $Winny -> setJamLembur (25);


  echo "Nama Pegawai : %s<br />"
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
