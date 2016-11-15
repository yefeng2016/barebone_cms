<?php
namespace Common\Model;
use Think\Model;

class AdminModel extends Model{
	 private $_db;
	 //实例化admin表
	 public function __construct(){
	 	$this->_db = M('Admin');
	 }
	//验证账号密码，数据库匹配
	public function checkUser($username){
		
		$res = $this->_db->where("username='$username'")->find();
		print_r($res);
		return $res;
	}
}