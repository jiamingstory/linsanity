<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Document</title>
<link rel="stylesheet" href="/Linsanity.cc-TP/Public/css/admin-add.css" type="text/css" />
</head>
<body>
<div id="header">当前操作>>编辑比赛</div>
<div id="content">
<form action="/Linsanity.cc-TP/jeffery/games/editsave/id/<?php echo ($gamesInfo["id"]); ?>" method="post">
	<table>
		<tr>
			<td class="title">比赛日期</td>
			<td><input type="text" name="dates" value="<?php echo ($gamesInfo["dates"]); ?>" class="input-box"/></td>
			<td><span>规范：2015-03-03</span></td>
		</tr>
		<tr>
			<td class="title">标题</td>
			<td><input type="text" name="title" value="<?php echo ($gamesInfo["title"]); ?>" class="input-box"/></td>
		</tr>
		<tr>
			<td class="title">链接</td>
			<td><input type="text" name="href" value="<?php echo ($gamesInfo["href"]); ?>" class="input-box"/></td>
			<td><span>使用全连接</span></td>
		</tr>
		<tr>
			<td class="title">分类</td>
			<td><select name="cateid" id=""><?php $var = $gamesInfo["cateid"]; ?>
				<?php if(is_array($cate)): foreach($cate as $key=>$v): ?><option value="<?php echo ($v["id"]); ?>" <?php if($v["id"] == $var): ?>selected="selected"<?php endif; ?>><?php echo ($v["title"]); ?></option><?php endforeach; endif; ?>
			</select></td>
		</tr>
	</table>
	<p><input id="button" type="submit" value="编辑比赛" /></p>
</form>
</div>		
</body>
</html>