<?php if (!defined('THINK_PATH')) exit(); ?><!--
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
			<?php include(THEME_PATH.'nav.php');?>
			<div class="page-header">
				<h1>系统管理 </h1>
			</div>
			<form class="form-horizontal " action="<?php echo U('Admin/Setting/save');?>" method="post">
				<?php foreach($setting as $key=>$val):?>
		 			<div class="form-group">
		 				<label for="inputEmail3" class="col-sm-2 control-label"><?php echo $key;?></label>
		 				<div class="col-sm-10">
		 					<input type="text" class="form-control"  name="<?php echo $key;?>" placeholder="名称"  value="<?php echo $val;?>">
		 				</div>
		 			</div>
		 		<?php endforeach;?>
		 			<div class="form-group ">
		 				<div class="col-sm-offset-2 col-sm-6">
		 					<button type="submit" class="btn btn-primary">提交</button>
		 				</div>
		 			</div>
		 		</form>
		</div>
	</body>
</html>