<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>����¼��</title>
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
    elem: '#hello', //Ŀ��Ԫ�ء�����laydate.js��װ��һ����������ѡ�������棬���elem�������㴫��class��tag�����밴�����ַ�ʽ '#id .class'
    event: 'focus' //��Ӧ�¼������û�д���event������Ĭ�ϵ�click
});
</script>
</head>
<body>
<div class="place">
	<span>λ�ã�</span>
	<ul class="placeul">
		<li><a href="#">ҵ�����</a></li>
		<li><a href="#">ҵ��¼��</a></li>
	</ul>
</div>
<div class="formbody">
	<div id="usual1" class="usual"> 
		<div class="itab">
			<ul> 
				<li><a href="#tab1" class="selected">������Ϣ</a></li>
			</ul>
		</div> 
		<form action="<?php echo site_url("yewu/add/");?>" method="post" name="yewuluru">
		<div id="tab1" class="tabson">
			<ul class="forminfo">
				<li><label>�ͻ�����<font style="color:red; cursor:pointer" id="showtips" data-value="�ͻ������Ǳ�����Ŷ">(*)</font></label><input type="hidden" name="khid" id="khid" /><input name="khmc" id="lrkhmc" readonly="1" type="text" class="dfinput" style="width:140px" placeholder="���ѡ��ͻ�" /> &nbsp;&nbsp;��Ʒ����&nbsp;&nbsp; <input name="cpmc" type="text" class="dfinput" style="width:280px"  placeholder="��Ʒ����" /></li>
				<li><label>��ͨ����<font style="color:red; cursor:pointer" id="showtips" data-value="��ͨ�����Ǳ�����">(*)</font></label><input name="ktrq" type="text"  onclick="laydate()" class="dfinput" style="width:140px;background:url('/themes/skin/images/icon.png') center right no-repeat" placeholder="��ͨ����" /> &nbsp;&nbsp;��������<font style="color:red; cursor:pointer" id="showtips" data-value="���������Ǳ�����">(*)</font>&nbsp;&nbsp;<input name="dqrq"  onclick="laydate()" type="text" class="dfinput" style="width:130px;background:url('/themes/skin/images/icon.png') center right no-repeat" placeholder="��������" /> &nbsp;&nbsp;�������� &nbsp;&nbsp;<input name="txrq"  onclick="laydate()" type="text" class="dfinput" style="width:118px;background:url('/themes/skin/images/icon.png') center right no-repeat" placeholder="��������" /></li>
				<li><label>�ɱ��۸�</label><input name="cbjg" type="text" class="dfinput" style="width:140px"  placeholder="�ɱ���" /> &nbsp;&nbsp;���ۼ۸� &nbsp;&nbsp;<input name="xsjg" type="text" class="dfinput" style="width:150px" placeholder="���ۼ�" /></li>
				
				<li><label>��ע</label><textarea name="content" class="textinput" style="height:80px"  placeholder="��ע���"></textarea></li>
			</ul>
		</div>
		<ul class="forminfo">
			<li><label>&nbsp;</label><input name="yewuluru" type="submit" id="yewuluru" class="btn" value="ȷ�ϱ���"/></li>
		</ul>
		</form>
    </div>
</div>
<script type="text/javascript"> 
      $("#usual1 ul").idTabs(); 
</script>
</body>
</html>