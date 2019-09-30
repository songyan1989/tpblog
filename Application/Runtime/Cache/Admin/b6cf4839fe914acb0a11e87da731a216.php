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
				<h1>博客管理 <small class="pull-right"><a class="btn btn-default" href="<?php echo U('/Admin/Blog/add');?>">添加博客</a></small></h1>
			</div>
			<table class="table table-striped">
			      <thead>
			        <tr>
			          <th>pid</th>
			          <th>标题</th>
			          <th>作者</th>
								<th>创建时间</th>
								<th>修改时间</th>
								<th>操作</th>
			        </tr>
			      </thead>
			      <tbody>
			      	<?php forEach($blogs as $blog):;?>
			        <tr>
			          <th scope="row"><?php echo $blog['pid'];?></th>
			          <td><?php echo $blog['title'];?></td>
								<td><?php echo $blog['author'];?></td>
								<td><?php echo date('Y-m-d h:i:s',$blog['intime']) ;?></td>
								<td><?php echo date('Y-m-d h:i:s',$blog['uptime']);?></td>
			          <td>
			          	<a href="<?php echo U('Admin/Blog/add');?>?pid=<?php echo $blog['pid'];?>">编辑</a> 
			          	<a href="<?php echo U('Admin/Blog/delete');?>?pid=<?php echo $blog['pid'];?>">删除</a>
			          </td>
			        </tr>
			       <?php endforeach;?>
			      </tbody>			
			</table>
			<ul class="pagination">
				 <?php echo $show;?>
			</ul>
		</div>
	</body>
</html>