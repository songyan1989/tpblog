<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE>
<html>
	<head>
		<!--模板标签/tpblog/Public-->
		<link rel="stylesheet" href="/tpblog/Public/bootstrap-3.3.7/css/bootstrap.css" />
		<script type="text/javascript" src="http://localhost/tpblog/public/javascript/jquery-3.1.1.min.js"></script>
		<script type="text/javascript" src="http://localhost/tpblog/public/bootstrap-3.3.7/js/bootstrap.js"></script>
		<link rel="stylesheet" type="text/css" href="/tpblog/Public/simditor-2.3.5/styles/font-awesome.css" />
		<link rel="stylesheet" type="text/css" href="/tpblog/Public/simditor-2.3.5/styles/simditor.css" />
		<script type="text/javascript" src="/tpblog/Public/simditor-2.3.5/scripts/module.js"></script>
		<script type="text/javascript" src="/tpblog/Public/simditor-2.3.5/scripts/hotkeys.min.js"></script>
		<script type="text/javascript" src="/tpblog/Public/simditor-2.3.5/scripts/uploader.js"></script>
		<script type="text/javascript" src="/tpblog/Public/simditor-2.3.5/scripts/simditor.js"></script>
		
		<title></title>
	</head>
	<body>
		<div class="container">
			<?php include(THEME_PATH.'nav.php');?>
			<div class="page-header">
				<h1>添加博客 <small class="pull-right"><a class="btn btn-default" href="<?php echo U('/Admin/Blog/index');?>">返回</a></small></h1>
			</div>
		 	<div class="panel-body">
			 		<!--U用于自动生成网址-->
					 <!--<?php var_dump($blog);?>-->
		 		<form class="form-horizontal " action="<?php echo U('Admin/Blog/save')?>?pid=<?php echo $blog['pid'];?>" method="post">
		 			<div class="form-group">
		 				<label for="inputEmail3" class="col-sm-2 control-label">标题</label>
		 				<div class="col-sm-10">
		 					<input type="text" class="form-control"  name="title" placeholder="标题" value="<?php echo $blog['title']; ?>">
		 				</div>
		 			</div>
		 			<div class="form-group">
		 				<label for="inputPassword3" class="col-sm-2 control-label">作者</label>
		 				<div class="col-sm-10">
		 					<input type="text" class="form-control"  name="author"  placeholder="作者" value="<?php echo $blog['author'];?>"
							>
		 				</div>
		 			</div>
					<div class="form-group">
		 				<label for="inputPassword3" class="col-sm-2 control-label">内容</label>
		 				<div class="col-sm-10">
		 					<textarea id="editor" class="form-control"  name="content"  placeholder="内容"  style="height:300px;"><?php echo $blog['content'];?></textarea>
		 				</div>
		 			</div>
		 			<div class="form-group ">
		 				<div class="col-sm-offset-2 col-sm-6">
		 					<button type="submit" class="btn btn-primary">提交</button>
		 				</div>
		 			</div>
					<script>
						var editor = new Simditor({   
							textarea: $('#editor'),
							upload:{
								url:"<?php echo U('Admin/Blog/upload');?>",//上传地址
								fileKey:"file1",//form表单
							}
							});
					</script>
		 		</form>
		 	</div>
		</div>
	</body>
</html>