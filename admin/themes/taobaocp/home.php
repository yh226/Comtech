<!DOCTYPE html>
<html>
<head>
<meta charset="gb2312">
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<meta name="keywords" content="" />
<meta name="description" content="" />
<title><?php echo $this->config->item('sys_name');?>操作平台 - 版本号：<?php echo $this->config->item('sys_name').$this->config->item('sys_version');?></title>
<link rel="stylesheet" href="/themes/skin/css/login.css" />
<script src="/themes/skin/js/jquery-1.9.1.min.js" type="text/javascript"></script>
<script src="/themes/layer/layer.min.js" type="text/javascript"></script>
<script src="/themes/skin/js/login.js" type="text/javascript"></script>
</head>
<frameset rows="88,*,30" cols="*" frameborder="no" border="0" framespacing="0">
  <frame src="<?php echo site_url('/home/top');?>" name="topFrame" scrolling="No" noresize="noresize" id="topFrame" title="topFrame" />
  <frameset cols="187,*" frameborder="no" border="0" framespacing="0">
    <frame src="<?php echo site_url('/home/left');?>" name="leftFrame" scrolling="No" noresize="noresize" id="leftFrame" title="leftFrame" />
    <frame src="<?php echo site_url('/home/right');?>" name="rightFrame" id="rightFrame" title="rightFrame" />
  </frameset>
  <frame src="<?php echo site_url('/home/bottom');?>" name="bottomFrame" scrolling="No" noresize="noresize" id="bottomFrame" title="bottomFrame" />
</frameset>
<noframes><body>
</body></noframes>
</html>