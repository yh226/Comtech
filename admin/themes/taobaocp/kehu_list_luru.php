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
		<li><a href="#">ѡ��ͻ�</a></li>
	</ul>
</div>
<div class="rightinfo">
<input type="hidden" name="a" id="name" value="" />
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
        </tr>
        </thead>
        <tbody>

	
<?php foreach($list as $v){ ?>
	<tr id="selectkehu<?php echo $v['id']?>"  data-value="<?php echo $v['id']?>" data-name="<?php echo $v['tb_khmc']?>" style="cursor:pointer">
		<td></td>
		<td><?=$v['tb_khmc']?></td>
		<td><?=$v['tb_khllr']?></td>
		<td><?php echo $v['tb_sj']?></td>
		<td><?php echo $v['tb_qq']?></td>
		<td><?php echo $v['tb_dwmc']?></td>
		<td><?php echo $v['tb_khdh']?></td>
		<td><?php echo $v['tb_email']?></td>
		<td><?php echo $v['tb_wfllr']?></td>
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