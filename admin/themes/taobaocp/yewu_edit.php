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
				<li><a href="#tab1" class="selected">������Ϣ</a></li>
			</ul>
		</div> 
		<form action="<?php echo site_url("yewu/show/".$kehu['id']);?>" method="post" name="yewuluru">
		<div id="tab1" class="tabson">
			<ul class="forminfo">
				<li><label>�ͻ�����<font style="color:red; cursor:pointer" id="showtips" data-value="�ͻ������Ǳ�����Ŷ">(*)</font></label><input type="hidden" value="<?php echo $kehu['khid']?>" name="khid" id="khid" /><input name="khmc" id="lrkhmc" readonly="1" type="text" class="dfinput" style="width:140px" placeholder="���ѡ��ͻ�" value="<?php if($kh_select=$this->kehu_m->select_khname($kehu['khid']))?>
<?php foreach($kh_select as $s){?><?=$s['tb_khmc']?><?php }  ?>" /> &nbsp;&nbsp;��Ʒ����&nbsp;&nbsp; <input name="cpmc" type="text" class="dfinput" style="width:280px"  value="<?php echo $kehu['cpmc']?>"  placeholder="��Ʒ����" /></li>
				<li><label>��ͨ����<font style="color:red; cursor:pointer" id="showtips" data-value="��ͨ�����Ǳ�����">(*)</font></label><input name="ktrq" type="text"  onclick="laydate()"  value="<?php echo $kehu['ktrq']?>" class="dfinput" style="width:140px;background:url('/themes/skin/images/icon.png') center right no-repeat" placeholder="��ͨ����" /> &nbsp;&nbsp;��������<font style="color:red; cursor:pointer" id="showtips" data-value="���������Ǳ�����">(*)</font>&nbsp;&nbsp;<input name="dqrq"   value="<?php echo $kehu['dqrq']?>" onclick="laydate()" type="text" class="dfinput" style="width:130px;background:url('/themes/skin/images/icon.png') center right no-repeat" placeholder="��������" /> &nbsp;&nbsp;�������� &nbsp;&nbsp;<input name="txrq"  onclick="laydate()"  value="<?php echo $kehu['txrq']?>" type="text" class="dfinput" style="width:118px;background:url('/themes/skin/images/icon.png') center right no-repeat" placeholder="��������" /></li>
				<li><label>�ɱ��۸�</label><input name="cbjg"  value="<?php echo $kehu['cbjg']?>" type="text" class="dfinput" style="width:140px"  placeholder="�ɱ���" /> &nbsp;&nbsp;���ۼ۸� &nbsp;&nbsp;<input name="xsjg" type="text"  value="<?php echo $kehu['xsjg']?>" class="dfinput" style="width:150px" placeholder="���ۼ�" /></li>
				
				<li><label>��ע</label><textarea name="content" class="textinput" style="height:80px"  placeholder="��ע���"><?php echo $kehu['content']?></textarea></li>
				<li><label>&nbsp;</label><input name="kehuluru" type="submit" id="kehuluru" class="btn" value="ȷ�ϱ���"/></li>
			</ul>
		</div>
		</form>
    </div>
</div>
<script type="text/javascript"> 
      $("#usual1 ul").idTabs(); 
    </script>
</body>
</html>