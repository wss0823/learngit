<?php


//2014.10.31 我加入git 进行修改 实现git 本地更新
//2014.10.31 我要版本回退
class randtime{

	public function index($n,$begintime, $endtime){
		for ($i=0;$i<$n;$i++){

			$this->randomDate($begintime, $endtime);

		
		}
	}

   public function randomDate($begintime, $endtime="") {  
    $begin = strtotime($begintime);  
    $end = $endtime == "" ? mktime() : strtotime($endtime);  
    $timestamp = rand($begin, $end);  
	$n = date("H", $timestamp);
	 $is=0;
	 while($n < 6 and $is <5){
	 		$is++;
		 $timestamp = rand($begin, $end);  
		 $n = date("H", $timestamp);
		 
	 }
	echo $n;
	echo"<br>";
	$data = date("Y-m-d H:i:s", $timestamp);
	file_put_contents("1.txt","$data\r\n",FILE_APPEND);
	echo date("Y-m-d H:i:s", $timestamp);
	echo "<br>";
	
    return date("Y-m-d H:i:s", $timestamp); 
	return $n;
	
} 
}

$a=new randtime;
//$nn= rand(600,700);


$a->index(18829,'2014-08-28 00:00:00','2014-09-27 23:59:59');

?>