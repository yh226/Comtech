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
		<li><a href="#">业务管理</a></li>
		<li><a href="#">业务列表</a></li>
	</ul>
</div>
<div class="rightinfo">
<?php if($list){?>
 <table class="tablelist">
    	<thead>
    	<tr>
        <th></th>
        <th>产品名称</th>
		<th>客户名称</th>
        <th>开通日期</th>
		<th>到期日期</th>
		<th>提醒日期</th>
		<th>成本价</th>
        <th>销售价</th>
		<th>备注事项</th>
		<th>管理</th>
		<th>删除</th>
        </tr>
        </thead>
        <tbody>

	
<?php foreach($list as $v){ ?>
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
		<td id="showyewu<?php echo $v['id']?>"  data-value="<?php echo $v['id']?>" style="cursor:pointer">编辑</td>
		<td id="delyewu<?php echo $v['id']?>" data-value="<?php echo $v['id']?>" data-title="<?php echo $_SERVER['PHP_SELF'];?>" style="cursor:pointer">删除</td>
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