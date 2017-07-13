<?php 
include_once 'View.php';
class BerandaUI extends View{
	
	public function aksesBeranda(){
		include_once 'pages/home.php';
		$this->end();
	}
}
 ?>	
