<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>数据录入</title>
<link href="/themes/skin/css/style.css" rel="stylesheet" type="text/css" />
<link href="/themes/skin/css/select.css" rel="stylesheet" type="text/css" />
<script src="/themes/skin/js/jquery-1.9.1.min.js" type="text/javascript"></script>
<script type="text/javascript" src="/themes/skin/js/jquery.idTabs.min.js"></script>
<script type="text/javascript" src="/themes/skin/js/select-ui.min.js"></script>
<script src="/themes/layer/layer.min.js" type="text/javascript"></script>
<script src="/themes/skin/js/login.js" type="text/javascript"></script>
<script src="/themes/skin/js/jquery.jplaceholder.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function(e) {
    $(".select1").uedSelect({
		width : 345			  
	});
	$(".select2").uedSelect({
		width : 200  
	});
	$(".select3").uedSelect({
		width : 100
	});
});
</script>
</head>
<body>
<div class="place">
	<span>位置：</span>
	<ul class="placeul">
		<li><a href="#">系统管理</a></li>
		<li><a href="#">账户维护</a></li>
	</ul>
</div>
<div class="formbody">
	 <div class="formtitle"><span>账户信息</span></div>
	<div id="usual1" class="usual">  
		<form action="<?php echo site_url("config/password/");?>" method="post">
		<div id="tab1" class="tabson">
			<ul class="forminfo">
				<li><label>账户</label><input type="text" class="dfinput" style="width:140px" value="<?=$getuser['username']?>" placeholder="管理员账户" readonly="1" /><i>禁止修改</i></li>
				<li><label>邮箱</label><input type="text" class="dfinput" name="email" style="width:140px" value="<?=$getuser['email']?>" placeholder="管理员邮箱" /></li>
				<li><label>密码</label><input name="password"  value="" type="password" class="dfinput" style="width:150px" placeholder="管理员密码" /></li>
			</ul>
		</div>
		<ul class="forminfo">
			<li><label>&nbsp;</label><input name="kehuluru" type="submit" id="kehuluru" class="btn" value="确认保存"/></li>
		</ul>
		</form>
    </div>
</div>
<script type="text/javascript"> 
      $("#usual1 ul").idTabs(); 
    </script>
</body>
</html>