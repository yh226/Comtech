<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�����б�</title>
<link href="/themes/skin/css/style.css" rel="stylesheet" type="text/css" />
<script src="/themes/skin/js/jquery-1.9.1.min.js" type="text/javascript"></script>
<script src="/themes/layer/layer.min.js" type="text/javascript"></script>
<script src="/themes/skin/js/login.js" type="text/javascript"></script>
<script src="/themes/skin/js/jquery.jplaceholder.js" type="text/javascript"></script>
</head>
<body>
<div class="place">
	<span>λ�ã�</span>
	<ul class="placeul">
		<li><a href="#">�ͻ�����</a></li>
		<li><a href="#">�ͻ��б�</a></li>
	</ul>
</div>
<div class="rightinfo">
	<div class="tools" style="display:none">
		<ul class="toolbar">
			<li class="click"><span><img src="/themes/skin/images/t01.png" /></span>���</li>
			<li class="click"><span><img src="/themes/skin/images/t02.png" /></span>�޸�</li>
			<li><span><img src="/themes/skin/images/t03.png" /></span>ɾ��</li>
			<li><span><img src="/themes/skin/images/t05.png" /></span>����</li>
		</ul>
	</div>
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
	 <div class="pagin">
	 	<div class="message">��<i class="blue"><?php echo $total_rows?></i>����¼����ǰ��ʾ��&nbsp;<i class="blue"><?php echo $page?>&nbsp;</i>ҳ</div>
        <ul class="paginList">
		<?php echo $pagination?>
        </ul>
    </div>
	
	
</div>
 <script type="text/javascript">
	$('.tablelist tbody tr:odd').addClass('odd');
	</script>

</body>
</html>