<?php

$nama= $_POST["nama"];
$golongan= $_POST["bagian"];


if ($golongan=="Keuangan")
{   $gaji=400000;
 $tunj = 0.01 * $gaji;
 $bonus = 0.5 * ($gaji + $tunj);
 $kom = 0.5 * ($gaji + $tunj + $bonus);
 $bersih = ($gaji + $tunj + $bonus + $kom);
    }
elseif ($golongan=="Marketing")
{
     $gaji=300000;
  $tunj = 0.01 * $gaji;
  $bonus = 0.5 * ($gaji + $tunj);
 $kom = 0.5 * ($gaji + $tunj + $bonus);
 $bersih = ($gaji + $tunj + $bonus + $kom);
    }
else
{   $gaji=200000;
 $tunj = 0.01 * $gaji;
 $bonus = 0.5 * ($gaji + $tunj);
 $kom = 0.5 * ($gaji + $tunj + $bonus);
 $bersih = ($gaji + $tunj + $bonus + $kom);
    }
echo "Nama Pegawai : $nama <br>";
echo "Golongan : $golongan <br>";
echo "Gaji Pokok : $gaji <br>";
echo "Jam Lembur : $lembur <br>";
echo "Total Gaji : Rp $bersih <br>";
?>
