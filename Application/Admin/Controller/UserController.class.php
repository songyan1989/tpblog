<?php
namespace Admin\Controller;
class UserController extends AdmController {
	//用户列表
    public function index(){
    	$admin=D('admin');
    	$users=$admin->select();//取出所有数据，并
    	$data=array();
    	$data['users']=$users;
    	$this->assign('data',$data);//传递给模板
    	$this -> show();
    }
    //跳转到添加页面
    public function add(){
    	//编辑用户
    	$aid=I('get.aid');
    	$admin=D('admin');
    	$user=array(
    		'aid'=>$aid,
    		'auser'=>'',
    		'apass'=>''
    	);
    	if($aid>0){
    		$user=$admin->where(array('aid'=>$aid))->find();
    	};
    	$this->assign('user',$user);//取出来的数据源传递给模板
    	//显示模板
    	$this ->show();
    }
    //删除
     public function delete(){
    	$aid=I('get.aid');
    	D('admin')-> where(array('aid'=>$aid))->delete();
    	return $this->redirect('/Admin/User/');
    }
    //编辑
    public function _edit($aid){
    	$admin=D('admin');
    	if(IS_POST){//判断是否以post方式提交
    		$auser = I("post.auser");//获取页面输入
    		$apass = I("post.apass");
    		//验证表单的合法性
    		$rule = array(
    			array('auser','require','用户名不能为空'),
    			array('apass','require','密码不能为空')
    		);
    		if(!$admin->validate($rule)->create()){//验证不通过
    			return $this->error($admin->getError(),U("Admin/User/add?aid=$aid"));
    		};
    		//验证数据的唯一性
    		$where=array();
    		$where['auser']=$auser;
			$where['aid']=array('NEQ',$aid);//排除当前打开的这条数据
    		$isArr=$admin->where($where)->find();
    		if($isArr){
    			return $this->error('用户名已经存在',U("Admin/User/add?aid=$aid"));
    		};
    		//修改数据
    		$insert=array(
    			'auser'=>$auser,
    			'apass'=>$apass,
    		);
    		$is=$admin->where( array('aid'=>$aid) )-> save($insert);
    		if($is){
    			return $this->success('编辑成功',U("Admin/User/index"));
    		}else{
    			return $this->error("操作失败",U("Admin/User/add?"));
    		}
    	}
    }
    //提交信息(添加或者修改)
    public function save(){
		// 如果网址中提供了aid,则是编辑，跳转到编辑方法
    	$aid=I('get.aid');
    	if($aid > 0){
    		return $this->_edit($aid);
    	}
    	//保存新增的用户
    	$admin=D('admin');
    	if(IS_POST){//判断是否以post方式提交
    		$auser = I("post.auser");//获取页面输入
    		$apass = I("post.apass");
    		//验证表单的合法性
    		$rule = array(
    			array('auser','require','用户名不能为空'),
    			array('apass','require','密码不能为空')
    		);
    		if(!$admin->validate($rule)->create()){//验证不通过
    			return $this->error($admin->getError(),U("Admin/User/add"));
    		};
    		//验证数据的唯一性
    		$where=array();
    		$where['auser']=$auser;
    		$isArr=$admin->where($where)->find();
    		if($isArr){
    			return $this->error('用户名已经存在',U('Admin/User/add'));
    		};
    		//插入数据
    		$insert=array(
    			'auser'=>$auser,
    			'apass'=>$apass,
    		);
    		$is=$admin->add($insert);
    		if($is){
    			return $this->success('添加成功',U("Admin/User/index"));
    		}else{
    			return $this->error("操作失败",U("Admin/User/add"));
    		}
    	}
    }
}