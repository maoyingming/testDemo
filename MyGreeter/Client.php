<?php
namespace MyGreeter;
class Client{
	public function getGreeting(){
		date_default_timezone_set('Asia/Shanghai');
		$h = date("H");
		if($h < 12){
			echo "���Ϻ�!";
		}else if($h < 18){
			echo "����ã�";
		}else{
			echo "���Ϻã�";
		}
	}
}
?>