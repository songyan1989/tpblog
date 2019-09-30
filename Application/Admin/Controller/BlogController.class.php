<?php
namespace Admin\Controller;
class BlogController extends AdmController {
	public function index(){
		$setting=D('setting');
		//var_dump($setting);
		$cfg=$setting->getAll();
		//var_dump($cfg);
		// 链接服务器
		$pageModel=D('page');
		// 获取所有数据
		$count = $pageModel->count();// 查询满足要求的总记录数
		$page= new \Think\Page($count,$cfg['pagenum']);// 实例化分页类 传入总记录数和每页显示的记录数(10)
		$show       = $page->show();// 分页显示输出
		$blogs=$pageModel->order('pid desc')->limit($page->firstRow.','.$page->listRows)->select();
		// 将数据传递给模
		$this->assign('show',$show);//赋值分页输出
		$this->assign('blogs',$blogs);//赋值数据集
		$this->display();
	}
	public function add(){
		$pageModel=D('page');
		$pid=I('get.pid');
		$blog=array(
			'pid'=>$pid,
			'title'=>'',
			'content'=>'',
			'author'=>'',
		);
		if($pid>0){
			$blog=$pageModel->where(array('pid'=>$pid))->find();
		}
		$this->assign('blog',$blog);
		$this->display();
	}
	public function delete(){
		$pid=I('get.pid');
		D('page')->where(array('pid'=>$pid))->delete();
		return $this->redirect('/Admin/Blog/');
	}
	
    	

	public function save(){
		$pageModel=D('page');
		$pid=I('get.pid');
	
		if(IS_POST){
			$title=I('post.title');
			$author=I('post.author');
			$content=I('post.content');
			$rule=array(
				array('title','require','标题不能为空'),
				array('author','require','作者不能为空'),
				array('content','require','内容不能为空'),
			);
			if(!$pageModel->validate($rule0)->create()){
				return $this->error( $pageModel-> getError(),U("/Admin/Blog/add"));
			}
			$insert=array(
					'title'=>$title,
					'author'=>$author,
					'content'=>$content,
				);
			if($pid>0){
				$insert['uptime']=time();
				$pageModel->where(array('pid'=>$pid))->save($insert);
			}else{
				$insert['intime']=time();
				$pageModel->add($insert);
			}
			return $this->success('操作成功',U("/Admin/Blog/index"));
		}
	}
	public function upload(){
		// 将这个数组转换为json，后传给编辑器
		$result=array(
			'msg'=>'',//失败的信息
			'success'=>false,//
			'file_path'=>''//图片传到的路径
		);
		$upload = new \Think\Upload();// 实例化上传类
		$upload->maxSize   =     3145728 ;// 设置附件上传大小
		$upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
		$upload->rootPath  =      './Uploads/'; // 设置附件上传根目录
		$upload->savePath  =      ''; // 设置附件上传（子）目录
		// 上传文件 
		$info   =   $upload->uploadOne($_FILES['file1']);//处理上传文件的数据的数组，同$_POST等类似
		if(!$info) {// 上传错误提示错误信息
			$result['msg']=$upload->getError();
		}else{// 上传成功 获取上传文件信息
			 $url='./Uploads/'. $info['savepath'].$info['savename'];
			 $result['file_path']=$url;
			 $result['success']=true;
		}
		$this->ajaxReturn($result);
		//echo json_encode($result);
	}
}
?>