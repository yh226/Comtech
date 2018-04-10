<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>数据列表</title>
<link href="/themes/skin/css/style.css" rel="stylesheet" type="text/css" />
<script src="/themes/skin/js/jquery-1.9.1.min.js" type="text/javascript"></script>
<script src="/themes/layer/layer.min.js" type="text/javascript"></script>
<script src="/themes/skin/js/login.js" type="text/javascript"></script>
<script src="/themes/skin/js/jquery.jplaceholder.js" type="text/javascript"></script>
</head>
<body>
<div class="place">
	<span>位置：</span>
	<ul class="placeul">
		<li><a href="#">客户管理</a></li>
		<li><a href="#">客户列表</a></li>
		<li><a href="#">选择客户</a></li>
	</ul>
</div>
<div class="rightinfo">
<input type="hidden" name="a" id="name" value="" />
<?php if($list){?>
 <table class="tablelist">
    	<thead>
    	<tr>
        <th></th>
        <th>客户名称</th>
		<th>联络人</th>
        <th>手机</th>
		<th>QQ</th>
		<th>单位名称</th>
		<th>电话</th>
        <th>邮箱</th>
		<th>我方联络人</th>
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
	 	<div class="message">共<i class="blue"><?php echo $total_rows?></i>条记录，当前显示第&nbsp;<i class="blue"><?php echo $page?>&nbsp;</i>页</div>
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