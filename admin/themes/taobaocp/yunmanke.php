<!DOCTYPE html>
<html>
<head>
<meta charset="gb2312">
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<meta name="keywords" content="" />
<meta name="description" content="" />
<title><?php echo $this->config->item('sys_name');?>����ƽ̨ - �汾�ţ�<?php echo $this->config->item('sys_name').$this->config->item('sys_version');?></title>
<link rel="stylesheet" href="/themes/skin/css/login.css" />
<script src="/themes/skin/js/jquery-1.9.1.min.js" type="text/javascript"></script>
<script src="/themes/layer/layer.min.js" type="text/javascript"></script>
<script src="/themes/skin/js/login.js" type="text/javascript"></script>
<style type="text/css">
.header{width:100%; height:60px; background:#fff; position:fixed; z-index:1;box-sizing: border-box;}
.head{width:1000px; height:60px; text-align:center; margin:0 auto}
.logo{float:left; width:300px; text-align:left;}
.logo img{margin-top:10px}
.nav{float:left; width:700px; text-align: right}
.nav a{display:block; width:100px; height:59px; background:#4BAAFF; float:right; line-height:58px; color:#fff; font-size:16px; text-align:center; margin:0 auto; font-family:'΢���ź�'}

.home{width:100%; height:auto; padding-top:100px;}
.index_content{width:1000px; height:auto; overflow:hidden; text-align:center; margin:0 auto}

.content_l{float:left; width:400px; height:auto; overflow:hidden; text-align:left; min-height:400px}
.content_r{float:left; width:600px; height:auto; overflow:hidden; text-align:right; margin:0 auto; background:url(/themes/skin/images/banner.png) center right no-repeat; min-height:400px}
.font-s{text-align:left; padding-top:40px}
.font-s h1{ width:300px; height:100px; background:url(/themes/skin/images/logo-h.jpg) no-repeat}
.font-s h1 span{display:none}
.font-s h2{color:#fff; font-size:18px; font-weight:100; text-indent:30px}
.font-s .sy{margin-top:30px; margin-left:30px}
.font-s .sy a{display:block; width:130px; height:50px; background:#86df79; line-height:50px; color:#fff; text-align:center; margin:0 auto; font-size:18px; float:left}
.font-s ul{ margin:20px 0 20px 0; padding-left:48px; font-size:14px}
.font-s ul li{color:#fff; line-height:25px;}
.footer{width:100%;height:40px; line-height:40px; position:absolute; bottom:0; color:#fff}
.footer a{color:#fff}
.footer a:hover{color:#fff}
.copy{width:100%; height:40px; line-height:40px;text-align:center;  margin:0 auto}
</style>
</head>
<body style="background:#4BAAFF">
<header>
	<div class="header">
		<div class="head">
			<div class="logo"><img src="/themes/skin/images/logo-h.png" width="162" border="0"></div>
			<div class="nav"><a href="<?php echo site_url('login');?>">��¼</a></div>
		</div>
	</div>
</header>
<div class="home">
	<div class="index_content">
		<div class="content_l">
			<div class="font-s">
				<h1><span><?php echo $this->config->item('sys_name').$this->config->item('sys_version');?></span></h1>
				<h2>��������ʲô���ƣ�</h2>
				<ul>
					<li>���ݿⱾ�ػ�����ֹ�ͻ�������й��</li>
					<li>��ʱ���Բ鿴�޸Ŀͻ����ϣ�</li>
					<li>�ͻ�ҵ�񣬵������ѣ���ʱ�����������⣻</li>
					<li>�������Ƶ��㷢��...</li>
				</ul>
				<div class="sy"><a href="<?php echo site_url('login');?>">����ʹ��</a></div>
			</div>
		</div>
		<div class="content_r"></div>
	</div>
<footer>
	<div class="footer">
		<div class="copy">&copy; Copyright 2015 <a href="http://www.chencent.com" target="_blank">��ͨ��Ѷ�������޹�˾</a> �ṩ����֧��</div>
	</div>
</footer>
</div>
</body>
</html>