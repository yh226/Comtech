<!DOCTYPE html>
<html>
<head>
<meta charset="gb2312">
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>TOP</title>
<link href="/themes/skin/css/style.css" rel="stylesheet" type="text/css" />
<script src="/themes/skin/js/jquery-1.9.1.min.js" type="text/javascript"></script>
<script src="/themes/layer/layer.min.js" type="text/javascript"></script>
<script src="/themes/skin/js/login.js" type="text/javascript"></script>
</head>
<body style="background:#1496D9;">
<div class="topleft"><a href="/" target="_parent"><img src="/themes/skin/images/logo.jpg" title="客户管理系统" /></a></div>
<ul class="nav" id="topnav">
<?php if($toplist){?>
<?php foreach($toplist as $v){ ?>
	<li><a href="<?php echo site_url('/home/left/'.$v['id']);?>" target="leftFrame" <?php if($v['id']=='1'){?>class="selected"<?php }?>><img src="<?php echo $v['picurl']?>" title="<?php echo $v['title']?>" /><h2><?php echo $v['title']?></h2></a></li>
<?php }?>
<?php }?>
</ul>
<div class="topright" style="display:none">    
	<ul>
		<li><span><img src="/themes/skin/images/help.png" title="帮助"  class="helpimg"/></span><a href="http://www.chencent.com/kehusystem/help.php" target="rightFrame">帮助</a></li>
		<li><a href="http://www.chencent.com/kehusystem/about.php"  target="rightFrame" id="about">关于</a></li>
		<li><a href="<?php echo site_url('/login/loginout/');?>" target="_parent">退出</a></li>
	</ul>
	<div class="user">
		<span><?php echo $this->session->userdata('username');?></span>
	</div>    
</div>
</body>
</html>