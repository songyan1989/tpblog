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
				<h1>用户管理 <small class="pull-right"><a class="btn btn-default" href="<?php echo U('/Admin/User/add');?>">添加用户</a></small></h1>
			</div>
			<table class="table table-striped">
			      <thead>
			        <tr>
			          <th>aid</th>
			          <th>用户名</th>
			          <th>操作</th>
			        </tr>
			      </thead>
			      <tbody>
			      	<?php forEach($data['users'] as $user):;?>
			        <tr>
			          <th scope="row"><?php echo $user['aid'];?></th>
			          <td><?php echo $user['auser'];?></td>
			          <td>
			          	<a href="<?php echo U('Admin/User/add');?>?aid=<?php echo $user['aid'];?>">编辑</a> 
			          	<a href="<?php echo U('Admin/User/delete');?>?aid=<?php echo $user['aid'];?>">删除</a>
			          	</td>
			        </tr>
			       <?php endforeach;?>
			      </tbody>
			</table>
		</div>
	</body>
</html>