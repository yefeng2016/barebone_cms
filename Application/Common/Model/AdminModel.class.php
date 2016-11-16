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
	public function checkUser($username,$password){
		//$res返回的是一个用户信息的数组
		$res = $this->_db->where("username='$username' AND password='$password'")->find();
		return $res;
	}
}