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
<script src="/themes/laydate/laydate.js" type="text/javascript"></script>
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

laydate({
    elem: '#hello', //目标元素。由于laydate.js封装了一个轻量级的选择器引擎，因此elem还允许你传入class、tag但必须按照这种方式 '#id .class'
    event: 'focus' //响应事件。如果没有传入event，则按照默认的click
});
</script>
</head>
<body>
<div class="place">
	<span>位置：</span>
	<ul class="placeul">
		<li><a href="#">业务管理</a></li>
		<li><a href="#">业务录入</a></li>
	</ul>
</div>
<div class="formbody">
	<div id="usual1" class="usual"> 
		<div class="itab">
			<ul> 
				<li><a href="#tab1" class="selected">基础信息</a></li>
			</ul>
		</div> 
		<form action="<?php echo site_url("yewu/add/");?>" method="post" name="yewuluru">
		<div id="tab1" class="tabson">
			<ul class="forminfo">
				<li><label>客户名称<font style="color:red; cursor:pointer" id="showtips" data-value="客户名称是必填项哦">(*)</font></label><input type="hidden" name="khid" id="khid" /><input name="khmc" id="lrkhmc" readonly="1" type="text" class="dfinput" style="width:140px" placeholder="点击选择客户" /> &nbsp;&nbsp;产品名称&nbsp;&nbsp; <input name="cpmc" type="text" class="dfinput" style="width:280px"  placeholder="产品名称" /></li>
				<li><label>开通日期<font style="color:red; cursor:pointer" id="showtips" data-value="开通日期是必填项">(*)</font></label><input name="ktrq" type="text"  onclick="laydate()" class="dfinput" style="width:140px;background:url('/themes/skin/images/icon.png') center right no-repeat" placeholder="开通日期" /> &nbsp;&nbsp;到期日期<font style="color:red; cursor:pointer" id="showtips" data-value="到期日期是必填项">(*)</font>&nbsp;&nbsp;<input name="dqrq"  onclick="laydate()" type="text" class="dfinput" style="width:130px;background:url('/themes/skin/images/icon.png') center right no-repeat" placeholder="到期日期" /> &nbsp;&nbsp;提醒日期 &nbsp;&nbsp;<input name="txrq"  onclick="laydate()" type="text" class="dfinput" style="width:118px;background:url('/themes/skin/images/icon.png') center right no-repeat" placeholder="提醒日期" /></li>
				<li><label>成本价格</label><input name="cbjg" type="text" class="dfinput" style="width:140px"  placeholder="成本价" /> &nbsp;&nbsp;销售价格 &nbsp;&nbsp;<input name="xsjg" type="text" class="dfinput" style="width:150px" placeholder="销售价" /></li>
				
				<li><label>备注</label><textarea name="content" class="textinput" style="height:80px"  placeholder="备注事项。"></textarea></li>
			</ul>
		</div>
		<ul class="forminfo">
			<li><label>&nbsp;</label><input name="yewuluru" type="submit" id="yewuluru" class="btn" value="确认保存"/></li>
		</ul>
		</form>
    </div>
</div>
<script type="text/javascript"> 
      $("#usual1 ul").idTabs(); 
</script>
</body>
</html>