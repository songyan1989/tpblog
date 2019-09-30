<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
				<!--模板标签__PUBLIC__-->
		<link rel="stylesheet" href="__PUBLIC__/bootstrap-3.3.7/css/bootstrap.css" />
		<script type="text/javascript" src="http://localhost/tpblog/public/javascript/jquery-3.1.1.min.js"></script>
		<script type="text/javascript" src="http://localhost/tpblog/public/bootstrap-3.3.7/js/bootstrap.js"></script>
		<title><?php echo $cfg['title'];?></title>
	</head>
	<body>
		<div class="container">
			<div class="jumbotron">
				<h3><?php echo $cfg['title'];?></h3>
				<p><?php echo $cfg['intro'];?></p>
			</div>
			<ol class="breadcrumb">
				<li><a href="#">首页</a></li>
			</ol>
			<div class="col-md-3">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">博主介绍</h3>
					</div>
					<div class="panel-body">
						我是一个设计师
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">博客概况</h3>
					</div>
					<div class="panel-body">
						查看数据
					</div>
				</div>
			</div>
			<div class="col-md-9">
				<?php foreach($blogs as $blog):?>
				<div class="panel panel-default">
					<div class="panel-heading">
						<a href="<?php echo U('/Home/Index/read');?>?pid=<?php echo $blog['pid'];?>">
							<h3 class="panel-title"><?php echo $blog['title'];?></h3>
						</a>
					</div>
					<div class="panel-body">
						<?php echo mb_substr(strip_tags(html_entity_decode($blog['content'])),0,80);?>...<!--清除html格式清除图片；限制显示字节数-->
					</div>
				</div>
				<?php endforeach;?>
			</div>
		</div>
	</body>
</html>
