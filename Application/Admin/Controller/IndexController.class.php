<?php
namespace Admin\Controller;
class IndexController extends AdmController {//继承自定义的控制器adm，adm继承原始的控制器
    public function index(){
    	var_dump(session['aid']);
        $this->display();
    	echo "首页";
    }
    
}