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
				<li><a href="#tab1" class="selected">��������</a></li> 
				<li><a href="#tab2">��ѡѡ��</a></li> 
				<li><a href="#tab3">���ҵ��</a></li> 
			</ul>
		</div> 
		<form action="<?php echo site_url("kehu/show/".$kehu['id']);?>" method="post" name="kehuluru">
		<div id="tab1" class="tabson">
			<ul class="forminfo">
				<li><label>�ͻ�����<font style="color:red; cursor:pointer" id="showtips" data-value="�ͻ������Ǳ�����Ŷ">(*)</font></label><input name="khmc" type="text" class="dfinput" style="width:140px" value="<?php echo $kehu['tb_khmc']?>" placeholder="�ͻ�����" /> &nbsp;&nbsp;��λ����&nbsp;&nbsp; <input name="dwmc" value="<?php echo $kehu['tb_dwmc']?>" type="text" class="dfinput" style="width:280px"  placeholder="�ͻ�������λ����" /></li>
				<li><label>������<font style="color:red; cursor:pointer" id="showtips" data-value="�������Ǳ�����Ŷ">(*)</font></label><input name="khllr"  value="<?php echo $kehu['tb_khllr']?>" type="text" class="dfinput" style="width:140px" placeholder="�ͻ�������" /> &nbsp;&nbsp;�ֻ� &nbsp;&nbsp;<input name="sj"  value="<?php echo $kehu['tb_sj']?>" type="text" class="dfinput" style="width:130px" placeholder="�ͻ��ֻ�����" /> &nbsp;&nbsp;QQ &nbsp;&nbsp;<input name="qq"  value="<?php echo $kehu['tb_qq']?>" type="text" class="dfinput" style="width:118px" placeholder="�ͻ�QQ����" /></li>
				<li><label>�绰</label><input name="khdh"  value="<?php echo $kehu['tb_khdh']?>" type="text" class="dfinput" style="width:140px"  placeholder="���ֻ�����绰����" /> &nbsp;&nbsp;���� &nbsp;&nbsp;<input name="email"  value="<?php echo $kehu['tb_email']?>" type="text" class="dfinput" style="width:150px" placeholder="�ͻ�����" /></li>
				<li><label>ͨѶ��ַ</label><input name="address" type="text" class="dfinput"  value="<?php echo $kehu['tb_address']?>" style="width:300px" placeholder="�ͻ�ͨѶ��ַ" /></li>
				<li><label>�ͻ�����</label><div class="usercity"><select class="select1" name="khlx"><option value="" style="padding:5px 0 5px 5px">--------��ѡ��--------</option><?php if($fl_select=$this->kehu_m->check_select(4))?>
<?php foreach($fl_select as $s){?><option value="<?php echo $s['id'];?>"  <?php if($kehu['tb_khlx']==$s['id']){?> selected="selected"<?php }?> style="padding:5px 0 5px 5px"><?php echo $s['title'];?></option><?php } ?></select></div></li>
				<li><label>��ע</label><textarea name="content" class="textinput" style="height:50px"  placeholder="��ע�ͻ���Ϣ���磺�ͻ���ϲ�á�ע������ȡ�"><?php echo $kehu['tb_content']?></textarea></li>
				<li><label>&nbsp;</label><input name="kehuluru" type="submit" id="kehuluru" class="btn" value="ȷ�ϱ���"/></li>
			</ul>
		</div>
		<div id="tab2" class="tabson">
			<ul class="forminfo">
				<li><label>�ͻ�����</label><div class="usercity"><select class="select2" name="khxz"><option value="" style="padding:5px 0 5px 5px">--------��ѡ��--------</option><?php if($fl_select=$this->kehu_m->check_select(1))?>
<?php foreach($fl_select as $s){?><option value="<?php echo $s['id'];?>" <?php if($kehu['tb_khxz']==$s['id']){?> selected="selected"<?php }?> style="padding:5px 0 5px 5px"><?php echo $s['title'];?></option><?php } ?></select></div> <label style="margin-left:37px">�ͻ���Դ</label><div class="usercity"><select class="select2" name="khly"><option value="" style="padding:5px 0 5px 5px">--------��ѡ��--------</option><?php if($fl_select=$this->kehu_m->check_select(2))?>
<?php foreach($fl_select as $s){?><option value="<?php echo $s['id'];?>" <?php if($kehu['tb_khly']==$s['id']){?> selected="selected"<?php }?> style="padding:5px 0 5px 5px"><?php echo $s['title'];?></option><?php } ?></select></div></li>
			<li><label>��������</label><div class="usercity"><select class="select2" name="ssqy"><option value="" style="padding:5px 0 5px 5px">--------��ѡ��--------</option><?php if($fl_select=$this->kehu_m->check_select(3))?>
<?php foreach($fl_select as $s){?><option value="<?php echo $s['id'];?>" <?php if($kehu['tb_ssqy']==$s['id']){?> selected="selected"<?php }?> style="padding:5px 0 5px 5px"><?php echo $s['title'];?></option><?php } ?></select></div><label style="margin-left:37px">������ҵ</label><div class="usercity"><select class="select2" name="hy"><option value="" style="padding:5px 0 5px 5px">--------��ѡ��--------</option><?php if($fl_select=$this->kehu_m->check_select(5))?>
<?php foreach($fl_select as $s){?><option value="<?php echo $s['id'];?>" <?php if($kehu['tb_hy']==$s['id']){?> selected="selected"<?php }?> style="padding:5px 0 5px 5px"><?php echo $s['title'];?></option><?php } ?></select></div></li>
			<li><label>����״��</label><textarea name="xyzt" class="textinput"  style="height:50px" placeholder="¼��ͻ�������״��"><?php echo $kehu['tb_xyzt']?></textarea></li>
			<li><label>��λ��ַ</label><input name="http" type="text" class="dfinput"  value="<?php echo $kehu['tb_http']?>" style="width:300px" value="http://" /></li>
			<li><label>�ҷ�������</label><input name="wfllr" type="text" class="dfinput" style="width:120px"  value="<?php echo $kehu['tb_wfllr']?>" placeholder="�ҷ�������Ա����" /></li>
			<li><label>&nbsp;</label><input name="kehuluru" type="submit" id="kehuluru" class="btn" value="ȷ�ϱ���"/></li>
			</ul>
		</div>
		<div id="tab3" class="tabson">
			<?php if($ywlist){?>
 <table class="tablelist">
    	<thead>
    	<tr>
        <th></th>
        <th>��Ʒ����</th>
		<th>�ͻ�����</th>
        <th>��ͨ����</th>
		<th>��������</th>
		<th>��������</th>
		<th>�ɱ���</th>
        <th>���ۼ�</th>
		<th>��ע����</th>
		<th>����</th>
		<th>ɾ��</th>
        </tr>
        </thead>
        <tbody>

	
<?php foreach($ywlist as $v){ ?>
	<tr>
		<td><input name="check_id" type="checkbox" value="<?php echo $v['id']?>" /></td>
		<td><?=$v['cpmc']?></td>
		<td><?php if($kh_select=$this->kehu_m->select_khname($v['khid']))?>
<?php foreach($kh_select as $s){?><?=$s['tb_khmc']?><?php }  ?></td>
		<td><?=$v['ktrq']?></td>
		<td><?=$v['dqrq']?></td>
		<td><?=$v['txrq']?></td>
		<td><?=$v['cbjg']?></td>
		<td><?=$v['xsjg']?></td>
		<td><?=$v['content']?></td>
		<td id="showyewu<?php echo $v['id']?>"  data-value="<?php echo $v['id']?>" style="cursor:pointer">�༭</td>
		<td id="delyewu<?php echo $v['id']?>" data-value="<?php echo $v['id']?>" data-title="<?php echo $_SERVER['PHP_SELF'];?>" style="cursor:pointer">ɾ��</td>
	</tr>
<?php }?>
</tbody>
    </table>
<?php }?>
		</div>
		</form>
    </div>
</div>
<script type="text/javascript"> 
      $("#usual1 ul").idTabs(); 
    </script>
</body>
</html>