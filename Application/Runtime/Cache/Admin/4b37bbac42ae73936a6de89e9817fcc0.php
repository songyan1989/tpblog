<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE>
<html>
	<head>
		<!--模板标签/tpblog/Public-->
		<link rel="stylesheet" href="/tpblog/Public/bootstrap-3.3.7/css/bootstrap.css" />
		<script type="text/javascript" src="http://localhost/tpblog/public/javascript/jquery-3.1.1.min.js"></script>
		<script type="text/javascript" src="http://localhost/tpblog/public/bootstrap-3.3.7/js/bootstrap.js"></script>
		<title></title>
	</head>
	<body>
		<div class="container">
			<?php include(THEME_PATH.'nav.php');?>
			<div class="page-header">
				<h1>添加用户 <small class="pull-right"><a class="btn btn-default" href="<?php echo U('/Admin/User/index');?>">返回</a></small></h1>
			</div>
		 	<div class="panel-body">
			 		<!--U用于自动生成网址-->
		 		<form class="form-horizontal " action="<?php echo U('Admin/User/save')?>?aid=<?php echo $user['aid'];?>" method="post">
		 			<div class="form-group">
		 				<label for="inputEmail3" class="col-sm-2 control-label">用户名</label>
		 				<div class="col-sm-6">
		 					<input type="text" class="form-control" value="<?php echo $user['auser'];?>" name="auser" id="inputEmail3" placeholder="用户名">
		 				</div>
		 			</div>
		 			<div class="form-group">
		 				<label for="inputPassword3" class="col-sm-2 control-label">密码</label>
		 				<div class="col-sm-6">
		 					<input type="password" class="form-control" value="<?php echo $user['apass'];?>" name="apass" id="inputPassword3" placeholder="密码">
		 				</div>
		 			</div>
		 			<div class="form-group ">
		 				<div class="col-sm-offset-2 col-sm-6">
		 					<button type="submit" class="btn btn-primary">提交</button>
		 				</div>
		 			</div>
		 		</form>
		 	</div>
		</div>
	</body>
</html>