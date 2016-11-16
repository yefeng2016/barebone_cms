<?php
/**
 * 后台Index相关
 */
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    
    public function index(){
    	if(session('username'))
    	{
    		return redirect('index.php?m=admin&c=login');
    	}
    	$this->display();
    }

    public function main() {
    	$this->display();
    }
}