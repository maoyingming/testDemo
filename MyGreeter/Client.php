<?php
namespace MyGreeter;
class Client{
	public function getGreeting(){
		date_default_timezone_set('Asia/Shanghai');
		$h = date("H");
		if($h < 12){
			echo "早上好!";
		}else if($h < 18){
			echo "下午好！";
		}else{
			echo "晚上好！";
		}
	}
}
?>