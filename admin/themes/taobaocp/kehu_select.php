<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�����б�</title>
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
	<span>λ�ã�</span>
	<ul class="placeul">
		<li><a href="#">�ͻ�����</a></li>
		<li><a href="#">�ͻ���ѯ</a></li>
	</ul>
</div>
<div class="rightinfo">
<form action="<?php echo site_url("kehu/select/");?>" method="post">
	<ul class="seachform">
		<li><label>��ѯ����</label>  
			<div class="vocation">
			<select class="select3" name="cxlx">
				<option value="1" <?php if($this->input->post('cxlx')=='1'){?> selected="selected"<?php } ?>  style="padding:5px 0 5px 5px">�ͻ�����</option>
				<option value="2" <?php if($this->input->post('cxlx')=='2'){?> selected="selected"<?php } ?> style="padding:5px 0 5px 5px">��λ����</option>
				<option value="3" <?php if($this->input->post('cxlx')=='3'){?> selected="selected"<?php } ?> style="padding:5px 0 5px 5px">��ϵ��</option>
				<option value="4" <?php if($this->input->post('cxlx')=='4'){?> selected="selected"<?php } ?> style="padding:5px 0 5px 5px">�ֻ�����</option>
			</select>
			</div>
		</li>
		<li><input name="title" type="text" value="<?=$this->input->post('title')?>" class="scinput" placeholder="������ؼ���" /></li>
		<li><label>�ͻ�����</label>  
			<div class="vocation">
				<select class="select1" name="khlx"><option value="0" style="padding:5px 0 5px 5px">--------��ѡ��--------</option><?php if($fl_select=$this->kehu_m->check_select(4))?>
<?php foreach($fl_select as $s){?><option value="<?php echo $s['id'];?>" <?php if($this->input->post('khlx')==$s['id']){?> selected="selected"<?php } ?> style="padding:5px 0 5px 5px"><?php echo $s['title'];?></option><?php } ?></select>
			</div>
		</li>
		<li><label>&nbsp;</label><input name="" type="submit" class="scbtn" value="��ѯ"/></li>
	</ul>
</form>
<?php if($list){?>
 <table class="tablelist">
    	<thead>
    	<tr>
        <th></th>
        <th>�ͻ�����</th>
		<th>������</th>
        <th>�ֻ�</th>
		<th>QQ</th>
		<th>��λ����</th>
		<th>�绰</th>
        <th>����</th>
		<th>�ҷ�������</th>
        <th>����</th>
		<th>ɾ��</th>
        </tr>
        </thead>
        <tbody>

	
<?php foreach($list as $v){ ?>
	<tr>
		<td><input name="check_id" type="checkbox" value="<?php echo $v['id']?>" /></td>
		<td><?=$v['tb_khmc']?></td>
		<td><?=$v['tb_khllr']?></td>
		<td><?php echo $v['tb_sj']?></td>
		<td><?php echo $v['tb_qq']?></td>
		<td><?php echo $v['tb_dwmc']?></td>
		<td><?php echo $v['tb_khdh']?></td>
		<td><?php echo $v['tb_email']?></td>
		<td><?php echo $v['tb_wfllr']?></td>
		<td id="showkehu<?php echo $v['id']?>"  data-value="<?php echo $v['id']?>" style="cursor:pointer">����</td>
		<td id="delkehu<?php echo $v['id']?>" data-value="<?php echo $v['id']?>" data-title="<?php echo $_SERVER['PHP_SELF'];?>" style="cursor:pointer">ɾ��</td>
	</tr>
<?php }?>
</tbody>
    </table>
<?php }?>

	
	
</div>
 <script type="text/javascript">
	$('.tablelist tbody tr:odd').addClass('odd');
	</script>

</body>
</html>