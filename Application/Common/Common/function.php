<?php

function show($status,$message,$data = array()){
	 	$result = array(
	 		'status' => $status ,
	 		'message'=> $message,
	 		'data'=>$data,

	 	 );
	 	 //exit退出脚本 并输出消息
	 	exit(json_encode($result));
	
}