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
		<li><a href="#">客户管理</a></li>
		<li><a href="#">客户录入</a></li>
	</ul>
</div>
<div class="formbody">
	<div id="usual1" class="usual"> 
		<div class="itab">
			<ul> 
				<li><a href="#tab1" class="selected">基础资料</a></li> 
				<li><a href="#tab2">可选选项</a></li> 
			</ul>
		</div> 
		<form action="<?php echo site_url("kehu/luru/");?>" method="post" name="kehuluru">
		<div id="tab1" class="tabson">
			<ul class="forminfo">
				<li><label>客户名称<font style="color:red; cursor:pointer" id="showtips" data-value="客户名称是必填项哦">(*)</font></label><input name="khmc" type="text" class="dfinput" style="width:140px" placeholder="客户名称" /> &nbsp;&nbsp;单位名称&nbsp;&nbsp; <input name="dwmc" type="text" class="dfinput" style="width:280px"  placeholder="客户所属单位名称" /></li>
				<li><label>联络人<font style="color:red; cursor:pointer" id="showtips" data-value="联络人是必填项哦">(*)</font></label><input name="khllr" type="text" class="dfinput" style="width:140px" placeholder="客户联络人" /> &nbsp;&nbsp;手机 &nbsp;&nbsp;<input name="sj" type="text" class="dfinput" style="width:130px" placeholder="客户手机号码" /> &nbsp;&nbsp;QQ &nbsp;&nbsp;<input name="qq" type="text" class="dfinput" style="width:118px" placeholder="客户QQ号码" /></li>
				<li><label>电话</label><input name="khdh" type="text" class="dfinput" style="width:140px"  placeholder="除手机以外电话号码" /> &nbsp;&nbsp;邮箱 &nbsp;&nbsp;<input name="email" type="text" class="dfinput" style="width:150px" placeholder="客户邮箱" /></li>
				<li><label>通讯地址</label><input name="address" type="text" class="dfinput" style="width:300px" placeholder="客户通讯地址" /></li>
				<li><label>客户类型</label><div class="usercity"><select class="select1" name="khlx"><option value="" style="padding:5px 0 5px 5px">--------请选择--------</option><?php if($fl_select=$this->kehu_m->check_select(4))?>
<?php foreach($fl_select as $s){?><option value="<?php echo $s['id'];?>" style="padding:5px 0 5px 5px"><?php echo $s['title'];?></option><?php } ?></select></div></li>
				<li><label>备注</label><textarea name="content" class="textinput" style="height:80px"  placeholder="备注客户信息，如：客户的喜好、注意事项等。"></textarea></li>
			</ul>
		</div>
		<div id="tab2" class="tabson">
			<ul class="forminfo">
				<li><label>客户性质</label><div class="usercity"><select class="select2" name="khxz"><option value="" style="padding:5px 0 5px 5px">--------请选择--------</option><?php if($fl_select=$this->kehu_m->check_select(1))?>
<?php foreach($fl_select as $s){?><option value="<?php echo $s['id'];?>" style="padding:5px 0 5px 5px"><?php echo $s['title'];?></option><?php } ?></select></div> <label style="margin-left:37px">客户来源</label><div class="usercity"><select class="select2" name="khly"><option value="" style="padding:5px 0 5px 5px">--------请选择--------</option><?php if($fl_select=$this->kehu_m->check_select(2))?>
<?php foreach($fl_select as $s){?><option value="<?php echo $s['id'];?>" style="padding:5px 0 5px 5px"><?php echo $s['title'];?></option><?php } ?></select></div></li>
			<li><label>所属区域</label><div class="usercity"><select class="select2" name="ssqy"><option value="" style="padding:5px 0 5px 5px">--------请选择--------</option><?php if($fl_select=$this->kehu_m->check_select(3))?>
<?php foreach($fl_select as $s){?><option value="<?php echo $s['id'];?>" style="padding:5px 0 5px 5px"><?php echo $s['title'];?></option><?php } ?></select></div><label style="margin-left:37px">所属行业</label><div class="usercity"><select class="select2" name="hy"><option value="" style="padding:5px 0 5px 5px">--------请选择--------</option><?php if($fl_select=$this->kehu_m->check_select(5))?>
<?php foreach($fl_select as $s){?><option value="<?php echo $s['id'];?>" style="padding:5px 0 5px 5px"><?php echo $s['title'];?></option><?php } ?></select></div></li>
			<li><label>信用状况</label><textarea name="xyzt" class="textinput" style="height:50px" placeholder="录入客户的信用状况"></textarea></li>
			<li><label>单位网址</label><input name="http" type="text" class="dfinput" style="width:300px" value="http://" /></li>
			<li><label>我方联络人</label><input name="wfllr" type="text" class="dfinput" style="width:120px" placeholder="我方联络人员姓名" /></li>
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