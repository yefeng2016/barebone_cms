<?php
namespace Admin\Controller;
use Think\Controller;



class MenuController extends CommonController {

	public function add(){
		if($_POST){
			//判断是否有空的post数据
			if(!isSetPost($_POST))
			{
				return show(0,'错误:菜单名,模块名,控制器,方法均不能为空,请填写完整!');
			}
			$res = D('Menu')->insert($_POST);
			if(!$res){
				return show(0,'数据添加失败');
			}
			return show(1,'数据添加成功');
		}else{
			$this->display();
		}

		

	}


	public function index(){
		$data = array();
		$type = isset($_REQUEST['type']) && in_array($_REQUEST['type'],array(0,1))? $_REQUEST['type'] : array('in','0,1');
		$data['type'] = $type;
		$this->assign('type',$type);
		$p = isset($_REQUEST['p']) && $_REQUEST['p'] ? $_REQUEST['p'] : 1;
		$menus = D('Menu')->getMenusPage($data,$p,C('PageSize'));
		$pageCount=D('Menu')->getMenusCount($data);
		$page = new \Think\Page($pageCount,C('PageSize'));
		$pageres = $page->show();
		$this->assign('menus',$menus);
		$this->assign('page',$pageres);
		$this->assign('pageCount',$pageCount);
		$this->display();
	}

	public function edit(){
		$this->display('add');
	}


}