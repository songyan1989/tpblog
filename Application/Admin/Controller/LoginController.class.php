<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller {
	 public function index(){
    	//*编写业务代码
    	//获取表单提交
    	$do=I('get.do');
    	if($do =='chk'){
    		$auser=I('post.auser');//I获取输入
    		$apass=I('post.apass');
    		//var_dump($auser,$apass);
    		//获取服务器对象
    		$admin=D('admin');
	    	$where=array(
	    		'auser'=>$auser,
	    		'apass'=>$apass
	    	);
	    	$user=$admin->where($where)->find();
			//var_dump($user);
	    	if(!$user){
	    		return $this->error('用户名或者密码登录错误',U('/Admin/Login/index'));
	    	}
	    	//设置session
		  	session("aid",$user['aid']);
	    	return $this -> success('登录成功',U('/Admin/Index/index'));
    	}
    	//加载模板
    	$this->display();
    }
	public function logout(){
		session('aid',null);
		$this -> success('退出成功',U('/Admin/Login/index'));
	}
}
?>