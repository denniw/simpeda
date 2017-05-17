<?php 
	class lingkaran{
		var $phi=3.14;
		var $jarijari;

		function setjarijari($r){
			return $this->jarijari=$r;
		}
		function getjarijari(){
			return $this->jarijari;
		}
		function hitung(){
			return $this->phi*($this->jarijari*$this->jarijari);
		}
	}
	$lingkaran1=new lingkaran();
	$lingkaran1->setjarijari("14");
	echo("LUAS LINGKARAN <br>");
	echo("<br> Rumus Luas Lingkaran : (phi * r * r)  <br>");
	echo("Keterangan <br>");
	echo("1. phi = 3.14 <br>");
	echo("2. r = Jari-jari <br>");
	echo("<br>Jika jari-jari (r) = 14 <br>");
	echo("Maka luas lingkaran adalah = ");
	echo $lingkaran1->hitung();
 ?>