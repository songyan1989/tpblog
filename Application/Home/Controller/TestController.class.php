<?php
	//控制器
	//访问这个类的网址，tpblog.com/Home/Test,默认会读取index方法,其它的需要加/a:模块/类/方法
	namespace Home\Controller;//命名空间,这个类的文件夹路径,注意反斜杠
	use Think\Controller;//核心类的命名空间
	class TestController extends Controller{//继承父类
		function index(){
			
			//$this->success('新增成功',U('/Home/Index'));//跳转提示
			//var_dump(I('get.xx'));//相当于var_dump($_GET),更安全的检验机制
			//var_dump(I('get.'));//获取所有get数据
			//$this->display();//显示模板，模板存放在View文件下
			$d=D('admin');//链接服务器，创建一个数据表对象
    		$auser=$d->getField('auser');//取第一条数据,auser字段的值
    		$pass=$d->getField('apass');//取第一条数据,auser字段的值
      		var_dump($auser);
    		$data=array('auser'=>$auser,'apass'=>$apass);
    		$this->assign('data',$data);//使变量传入模板，使模板可以调用这个数据
    		$this->display();
//echo 'a';
		}
	}
?>