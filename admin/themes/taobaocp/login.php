<!DOCTYPE html>
<html>
<head>
<meta charset="gb2312">
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<meta name="keywords" content="" />
<meta name="description" content="" />
<title>用户登陆 - <?php echo $this->config->item('sys_name').$this->config->item('sys_version');?></title>
<link rel="stylesheet" href="/themes/skin/css/login.css" />
<script src="/themes/skin/js/jquery-1.9.1.min.js" type="text/javascript"></script>
<script src="/themes/layer/layer.min.js" type="text/javascript"></script>
<script src="/themes/skin/js/login.js" type="text/javascript"></script>
<script src="/themes/skin/js/jquery.jplaceholder.js" type="text/javascript"></script>
</head>
<body>
<div class="top_div"></div>
<div class="login_div">
	<div style="width: 165px; height: 96px; position: absolute;">
		<div class="tou"></div>
		<div class="initial_left_hand" id="left_hand"></div>
		<div class="initial_right_hand" id="right_hand"></div>
	</div>
	<p style="padding: 30px 0px 10px; position: relative;">
		<span class="u_logo"></span>
		<input class="ipt" type="text" name="username" placeholder="请输入用户名或邮箱" value=""> 
	</p>
	<p style="position: relative;">
		<span class="p_logo"></span>         
		<input class="ipt" id="password" name="password" type="password" placeholder="请输入密码" value="">   
	</p>
	<div class="submit_div">
		<p style="margin: 0px 35px 20px 45px;">
			<span style="float: right;">  
				<input type="submit" name="submit" class="submit" value=" 登 录 ">
			</span>
		</p>
	</div>
</div>
<div class="copy">Copyright &copy;2015 <a href="<?php echo $this->config->item('sys_url');?>" target="_blank"><?php echo $this->config->item('sys_name').$this->config->item('sys_version');?></a> 版权所有<br><a href="http://www.chencent.com/" target="_blank"><?php echo $this->config->item('sys_author');?></a> 提供技术支持</div>
</body>
</html>