<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Document</title>
<link rel="stylesheet" type="text/css" href="/Linsanity.cc-TP/Public/css/admin-manage1.css" />
<script type="text/javascript" src="/Linsanity.cc-TP/Public/js/jquery-1.10.1.js"></script>
<script type="text/javascript" src="/Linsanity.cc-TP/Public/js/style-table.js"></script>
</head>
<body>
<div id="header">当前操作>>管理图片类型</div>
<div id="content">
<table>
<thead> 
	<tr>
		<th>ID</th>
		<th>类型名称</th>
		<th>操作</th>
	</tr>
</thead>
	<?php if(is_array($info)): foreach($info as $key=>$v): ?><tbody>
	<tr>
		<td><?php echo ($v["id"]); ?></td>
		<td><?php echo ($v["typename"]); ?></td>
		<td><a href="/Linsanity.cc-TP/Jeffery/Imagetype/edit/id/<?php echo ($v["id"]); ?>">编辑</a>|<a href="/Linsanity.cc-TP/Jeffery/Imagetype/delete/id/<?php echo ($v["id"]); ?>">删除</a></td>
	</tr>
	</tbody><?php endforeach; endif; ?>
</table>
</div>	
</body>
</html>