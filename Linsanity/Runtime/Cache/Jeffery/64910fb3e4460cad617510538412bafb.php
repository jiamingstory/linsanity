<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Document</title>
<link rel="stylesheet" href="/Linsanity.cc-TP/Public/css/admin-add.css" type="text/css" />
<script type="text/javascript" charset="utf-8" src="/Linsanity.cc-TP/Public/ueditor143/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="/Linsanity.cc-TP/Public/ueditor143/ueditor.all.min.js"> </script>
<script type="text/javascript" charset="utf-8" src="/Linsanity.cc-TP/Public/ueditor143/lang/zh-cn/zh-cn.js"></script>
</head>
<body>
<div id="header">当前操作>>添加新闻</div>
<div id="content">
<form action="/Linsanity.cc-TP/Jeffery/News/addsave" method="post" enctype="multipart/form-data">
	<table>
		<tr>
			<td class="title">标题</td>
			<td><input type="text" name="title" class="input-box" /></td>
			<td><span><b style="color:red;">最多19个中文字</b>，空格数字占半个字</span></td>
		</tr>
		<tr>
			<td class="title">内容</td>
			<td width="800"><textarea name="content" id="content-box" ></textarea></td>
			<td></td>
		</tr>
		<tr>
			<td class="title">链接</td>
			<td><input type="text" name="href" class="input-box" /></td>
			<td><span>填写全链接</span></td>
		</tr>
		<tr>
			<td class="title">作者</td>
			<td><input type="text" name="author" class="input-box"/></td>
			<td></td>
		</tr>
		<tr>
			<td class="title">图片</td>
			<td><input type="file" name="photo[]" id="" multiple="multiple"/></td>
			<td></td>
		</tr>
		<tr>
			<td class="title">视频</td>
			<td><input type="radio" name="isvideo" value="1" />是<input type="radio" name="isvideo" value="0" />否</td>
			<td></td>
		</tr>
		<tr>
			<td class="title">分类</td>
			<td><select name="cateid" id="">
			<?php if(is_array($cateid)): foreach($cateid as $key=>$v): ?><option value="<?php echo ($v["id"]); ?>"><?php echo ($v["title"]); ?></option><?php endforeach; endif; ?>
			</select></td>
		</tr>
	</table>
	<p><input id="button" type="submit" value="添加新闻" /></p>
</form>
</div>	
</body>
</html>
<script type="text/javascript">
UE.getEditor('content-box');
</script>