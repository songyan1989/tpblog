<?php if (!defined('THINK_PATH')) exit();?><!--
	作者：729971092@qq.com
	时间：2017-10-26
	描述：
-->
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
			<div class="col-md-6 col-md-offset-3" style="margin-top:200px;">
				<div class="panel panel-primary">
				  	<div class="panel-heading">
				    	<h3 class="panel-title">管理员登录</h3>
				 	</div>
				 	<div class="panel-body">
				 		<!--U用于自动生成网址-->
				 		<form class="form-horizontal" action="<?php echo U('Admin/Login/index?do=chk');?>" method="post">
				 			<div class="form-group">
				 				<label for="inputEmail3" class="col-sm-2 control-label">用户名</label>
				 				<div class="col-sm-10">
				 					<input type="text" class="form-control" name="auser" id="inputEmail3" placeholder="Email">
				 				</div>
				 			</div>
				 			<div class="form-group">
				 				<label for="inputPassword3" class="col-sm-2 control-label">密码</label>
				 				<div class="col-sm-10">
				 					<input type="password" class="form-control" name="apass" id="inputPassword3" placeholder="Password">
				 				</div>
				 			</div>
				 			
				 			<div class="form-group ">
				 				<div class="col-sm-offset-2 col-sm-10">
				 					<button type="submit" class="btn btn-primary">点击登录</button>
				 				</div>
				 			</div>
				 		</form>
				 	</div>
				 	<div class="panel-footer text-right">版权所有 盗版必究</div>
				</div>
			</div>
		</div>
	</body>
</html>