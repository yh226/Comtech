<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="gb2312">
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>LEFT</title>
<link href="/themes/skin/css/style.css" rel="stylesheet" type="text/css" />
<script src="/themes/skin/js/jquery-1.9.1.min.js" type="text/javascript"></script>
<script src="/themes/layer/layer.min.js" type="text/javascript"></script>
<script src="/themes/skin/js/login.js" type="text/javascript"></script>
</head>
<body style="background:#f0f9fd;">
	<div class="lefttop"><span></span><?php echo $toptitle['title']?></div>
	<dl class="leftmenu">
<?php if($arr){?>
<?php foreach($arr as $info){ ?>
		<dd>
			<div class="title leftmenuul">
				<span><img src="/themes/skin/images/leftico01.png" /></span><?php echo $info['ftitle']?>
			</div>
			<ul class="menuson">
<?php if($info['zilist']){?>
<?php  foreach($info['zilist'] as $l){ ?>
				<li <?php if($l['url']=='/home/right'){?>class="active"<?php }?>><cite></cite><a href="<?php echo site_url($l['url'])?>" target="rightFrame"><?php echo $l['title']?></a><i></i></li>
<?php }?>
<?php }?>
				<?php if ($id==1){?><li><cite></cite><a href="<?php echo site_url('/login/loginout')?>" target="_parent">退出系统</a><i></i></li><?php }?>
			</ul>    
		</dd>
<?php }?>
<?php }?>
    </dl>
</body>
</html>