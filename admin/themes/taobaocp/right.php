<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>����̨</title>
<link href="/themes/skin/css/style.css" rel="stylesheet" type="text/css" />
<script src="/themes/skin/js/jquery-1.9.1.min.js" type="text/javascript"></script>
<script src="/themes/skin/js/login.js" type="text/javascript"></script>
<script src="/themes/skin/js/jquery.jplaceholder.js" type="text/javascript"></script>
<body>
<div class="place">
	<span>λ�ã�</span>
	<ul class="placeul">
		<li><a href="#">����̨</a></li>
	</ul>
</div>
<div class="mainindex">
	<div class="welinfo">
		<b><?php echo $this->session->userdata('username');?>(<?php echo $this->session->userdata('email');?>)����ӭʹ�ÿͻ�����ϵͳ</b>
		<a href="<?php echo site_url('/config/password');?>">�ʺ�����</a>
	</div>
	<div class="welinfo">
		<span><img src="/themes/skin/images/time.png" alt="ʱ��" /></span>
		<i>���ϴε�¼��ʱ�䣺<?=date('Y-m-d H:i:s', $this->session->userdata('lastlogin'));?></i> ����������¼�ģ�<a href="<?php echo site_url('/config/password');?>">�������</a>��
	</div>
	<div class="xline"></div>
	<div class="box"></div>
	<div class="welinfo">
		<span><img src="/themes/skin/images/dp.png" alt="����" /></span>
		<b>�汾��Ϣ����</b>
	</div>
	<ul class="infolist">
		<li><span>��ǰ�汾��<?php echo $this->config->item('sys_name').$this->config->item('sys_version');?></span> <a class="ibtn" href="http://www.yunmanke.com" target="_blank">�鿴�°汾</a></li>
		<li><span>��Ȩ���У���ϵͳ�� <a href="http://www.chencent.com" target="_blank" style="color:red">��ͨ��Ѷ�������޹�˾</a> ��������Ȩ����ʹ�á������ʹ�ù����������κ����⣬������ϵ���ǽ��д���</span></li>
	</ul>
	<div class="xline"></div>
	<div class="box"></div>
	<ul class="infolist">
		<li><span>�ۺ�С�� <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=8744240&site=qq&menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:8744240:51" alt="���������ҷ���Ϣ" title="���������ҷ���Ϣ" align="absmiddle"/></a></span></li>
		<div class="box"></div>
		<li><span>��ǰ��С�� <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=2827385152&site=qq&menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:2827385152:51" alt="���������ҷ���Ϣ" title="���������ҷ���Ϣ" align="absmiddle"/></a></span></li>
	</ul>
	<div class="xline"></div>
	<script src="http://www.chencent.com/get_kehu_system.php?v=1&domain=<?=$_SERVER['SERVER_NAME'];?>" type="text/javascript"></script>
</div>
</body>
</html>
