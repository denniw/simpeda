<?php 
	class kucing {
		private $nama;
		private $umur;
	//fungsi untuk setnama
	public function setnama ($nm){
		$this->nama=$nm;
	}
	//fungsi untuk mengambil nama
	public function getnama(){
		return $this->nama;
	}
	}
	//objek
	$Miing=new kucing();
	$Miing->setnama ("meownggg");
	echo $Miing->getnama();
	echo "Miing sedang"; $Miing->getnama();
?>