<?php 
include_once 'View.php';
class LoginUI extends ViewPelanggan {
	
	public function aksesLogin(){
		include_once 'pages/login.php';
		$this->end();
	}
}
 ?>	
