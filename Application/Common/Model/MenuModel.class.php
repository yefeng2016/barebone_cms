<?php
namespace Common\Model;
use Think\Model;

class MenuModel extends Model{
	private $_db = '';
	public function __construct(){
		$this->_db = M('menu');
	}

	public function insert($data){
		if(!is_array($data)){
			return 0;
		}
		return $this->_db->add($data);
	}
		//数据，页数，显示页数
	public function getMenusPage($data,$p,$pagesize){
		//where表达式查询，后面是条件，意思是status不等于-1
		$data['status'] = array('NEQ',-1);
		//计算数据起始位
		$pagestart = ($p-1) * $pagesize;
		//获取筛选出来的数据
		$res = $this->_db->where($data)->order('menu_id')->limit($pagestart,$pagesize)->select();
		//print_r($res);
		return $res;

	}

	public function getMenusCount($data = array()){
		$data['status'] = array('NEQ',-1);
		return $this->_db->where($data)->count();
	}
}