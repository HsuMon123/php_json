<?php 
	$id=$_POST['id'];

	$stuJson=file_get_contents("student.json");

	if($stuJson){
		// string to array == json_decode
		$data_arr=json_decode($stuJson,true); 
		unset($data_arr[$id]);
		// array to string == json_encode
		$jsonStr=json_encode($data_arr,JSON_PRETTY_PRINT);
		file_put_contents("student.json",$jsonStr);
	}
 ?>