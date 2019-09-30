<?php
namespace Admin\Controller;
class SettingController extends AdmController {
	//用户设置
    public function index(){
		$setting=D('Setting');
		//var_dump($setting);
		$this -> assign('setting',$setting->getAll());
    	//$admin=D('setting');
		$this->display();
    }
	public function save(){
		$setting = D('setting');
		$post=I('post.');
		// var_dump($post);
		foreach($post as $key => $value){
			$setting -> where( array('key' => $key))-> save(array('value' => $value));
		}
		$this->redirect('/Admin/Setting/index');
	}
  
}