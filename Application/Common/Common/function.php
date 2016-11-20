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

function getMd5Password($pwd){
	return $pwd = md5($pwd . C('MD5_SEC'));
}

function isSetPost($arr = array()){
	foreach ($arr as $key => $value) {
	if($value == ''){
		return false;
	}
}
return ture;

}

function getMenutype($type){
	return $type == 0 ? '前端导航':'后台菜单';
} 
function getMenustatus($status){
	if($status == 0){
		$str = '关闭'; 
	}elseif($status == 1) {
		$str = '正常';
	}
	return $str;
}