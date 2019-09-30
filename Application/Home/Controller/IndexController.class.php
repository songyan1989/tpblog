<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {//继承
	function __construct(){
		parent::__construct();
		$this->setting = D('Admin/Setting');//跨模块获取模型
		$this->cfg = $this->setting->getAll();
	}
    public function index(){
		// var_dump( $this->cfg );
		$pageModel=D('page');
		$this->assign('blogs',$pageModel->order('pid desc')->limit('0,10')->select());
		$this->assign('cfg',$this->cfg);
		$this->display();
 
    }
    public function read(){
		$pid = I('get.pid');
		$pageModel= D('page');
		$blog = $pageModel->where(array('pid'=>$pid))->find();
		$this -> assign('blog',$blog);
		$this -> assign('cfg',$this->cfg);
    	$this -> display();
    }
}

//Home\IndexController类就代表了Home模块下的Index控制器，而hello操作就是Home\IndexController类的hello（公共）方法。