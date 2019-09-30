<?php
namespace Admin\Controller;
use Think\Controller;
class AdmController extends Controller {
	 function __construct(){
	 	parent::__construct();//继承父类的构造方法
	 	//判断是否存在aid
	 	$this -> aid = session('aid');//设置类属性aid
    	if($this -> aid<1){
    		return $this->error('用户名或者密码登录错误',U('/Admin/Index/login'));
    	}
    	//判断aid是否有效
    	$this -> user = D('admin')-> where(array('aid'=> $this->aid))->find();
    	if(!$this -> user){
    		return $this->error('账户无效',U('/Admin/Index/login'));
    	}
    	//判断aid是有值
    	//var_dump($this -> user);
    }
}

?>