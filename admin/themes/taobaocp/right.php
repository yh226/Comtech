<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>工作台</title>
<link href="/themes/skin/css/style.css" rel="stylesheet" type="text/css" />
<script src="/themes/skin/js/jquery-1.9.1.min.js" type="text/javascript"></script>
<script src="/themes/skin/js/login.js" type="text/javascript"></script>
<script src="/themes/skin/js/jquery.jplaceholder.js" type="text/javascript"></script>
<body>
<div class="place">
	<span>位置：</span>
	<ul class="placeul">
		<li><a href="#">工作台</a></li>
	</ul>
</div>
<div class="mainindex">
	<div class="welinfo">
		<b><?php echo $this->session->userdata('username');?>(<?php echo $this->session->userdata('email');?>)，欢迎使用客户管理系统</b>
		<a href="<?php echo site_url('/config/password');?>">帐号设置</a>
	</div>
	<div class="welinfo">
		<span><img src="/themes/skin/images/time.png" alt="时间" /></span>
		<i>您上次登录的时间：<?=date('Y-m-d H:i:s', $this->session->userdata('lastlogin'));?></i> （不是您登录的？<a href="<?php echo site_url('/config/password');?>">请点这里</a>）
	</div>
	<div class="xline"></div>
	<div class="box"></div>
	<div class="welinfo">
		<span><img src="/themes/skin/images/dp.png" alt="提醒" /></span>
		<b>版本信息提醒</b>
	</div>
	<ul class="infolist">
		<li><span>当前版本：<?php echo $this->config->item('sys_name').$this->config->item('sys_version');?></span> <a class="ibtn" href="http://www.yunmanke.com" target="_blank">查看新版本</a></li>
		<li><span>版权所有：本系统由 <a href="http://www.chencent.com" target="_blank" style="color:red">南通辰讯网络有限公司</a> 开发，授权给您使用。如果在使用过程中遇到任何问题，可以联系我们进行处理。</span></li>
	</ul>
	<div class="xline"></div>
	<div class="box"></div>
	<ul class="infolist">
		<li><span>售后：小杜 <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=8744240&site=qq&menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:8744240:51" alt="点击这里给我发消息" title="点击这里给我发消息" align="absmiddle"/></a></span></li>
		<div class="box"></div>
		<li><span>售前：小曹 <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=2827385152&site=qq&menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:2827385152:51" alt="点击这里给我发消息" title="点击这里给我发消息" align="absmiddle"/></a></span></li>
	</ul>
	<div class="xline"></div>
	<script src="http://www.chencent.com/get_kehu_system.php?v=1&domain=<?=$_SERVER['SERVER_NAME'];?>" type="text/javascript"></script>
</div>
</body>
</html>
