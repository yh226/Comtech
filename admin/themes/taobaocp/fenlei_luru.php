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
<div class="formbody">
	<div id="usual1" class="usual"> 
		<div class="itab">
			<ul> 
				<li><a href="#tab1" class="selected">分类修改</a></li>
			</ul>
		</div> 
		<form action="<?php echo site_url("config/add/".$id);?>" method="post" name="kehuluru">
		<div id="tab1" class="tabson">
			<ul class="forminfo">
				<li><label>标题<font style="color:red; cursor:pointer" id="showtips" data-value="标题是必填项哦">(*)</font></label><input name="title" type="text" class="dfinput" style="width:140px" value="" placeholder="分类标题" /></li>
				<li><label>排序<font style="color:red; cursor:pointer" id="showtips" data-value="排序从1-N，数值越小越靠前哦">(*)</font></label><input name="top"  value="" type="text" class="dfinput" style="width:50px" placeholder="仅数字" onkeyup="this.value=this.value.replace(/\D/g,'')" onafterpaste="this.value=this.value.replace(/\D/g,'')" /><i>数字越小越靠前</i></li>
				<li><label>是否显示</label><div class="usercity"><select class="select3" name="show"><option value="0"  style="padding:5px 0 5px 5px">不显示</option><option value="1" selected="selected" style="padding:5px 0 5px 5px">显示</option></select></li>
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