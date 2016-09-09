<?php
/*
	opba.com.br
	falecom@opba.com.br
*/
class CalculateForms{
	
	private $PI;
	
	private $X=0;
	
	private $Y=0;
	
	private $Z=0;
	
	private $data = array();
	
	function __construct(){
		$this->PI = 22/7;
	}
	
	public function builder($data){
		$this->data = $data;
		return $this->getCenterOfPolygon();
	}
	
	function getCenterOfPolygon(){
		for( $i = 0 ; $i < count($this->data) ; $i++ ) {
			$lat1=$this->data[$i]["lat"];
			$lon1=$this->data[$i]["lng"];
			$lat1 = $lat1 * $this->PI/180;
			$lon1 = $lon1 * $this->PI/180;
			$this->X += cos($lat1) * cos($lon1);
			$this->Y += cos($lat1) * sin($lon1);
			$this->Z += sin($lat1);
		}
		
		$Lon = atan2($this->Y, $this->X);
		$Hyp = sqrt($this->X * $this->X + $this->Y * $this->Y);
		$Lat = atan2($this->Z, $Hyp);
		$Lat = $Lat * 180/$this->PI;
		$Lon = $Lon * 180/$this->PI; 
		return array("lat" => $Lat,"lng" => $Lon);
	}
}
?>