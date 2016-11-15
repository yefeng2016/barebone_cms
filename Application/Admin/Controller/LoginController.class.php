<?php
namespace Admin\Controller;
use Think\Controller;

/**
 * use Common\Model 这块可以不需要使用，框架默认会加载里面的内容
 */
class LoginController extends Controller {

    public function index(){

    	return $this->display();
    }

    public function check(){
    	
    	$username = I('post.username');
    	$password = I('post.password');
    	if(!trim($username)){
    		return show(0,'用户名有误');
    	}
    	if(!trim($password)){
    		return show(0,'密码有误');
    	}
    	return show(1,'验证成功',);

    }

}