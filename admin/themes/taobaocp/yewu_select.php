<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>数据列表</title>
<link href="/themes/skin/css/style.css" rel="stylesheet" type="text/css" />
<link href="/themes/skin/css/select.css" rel="stylesheet" type="text/css" />
<script src="/themes/skin/js/jquery-1.9.1.min.js" type="text/javascript"></script>
<script type="text/javascript" src="/themes/skin/js/jquery.idTabs.min.js"></script>
<script type="text/javascript" src="/themes/skin/js/select-ui.min.js"></script>
<script src="/themes/layer/layer.min.js" type="text/javascript"></script>
<script src="/themes/skin/js/login.js" type="text/javascript"></script>
<script src="/themes/laydate/laydate.js" type="text/javascript"></script>
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
		<li><a href="#">业务管理</a></li>
		<li><a href="#">业务查询</a></li>
	</ul>
</div>
<div class="rightinfo">
<form action="<?php echo site_url("yewu/select/");?>" method="post">
	<ul class="seachform">
		<li><label>客户名称</label>  
			<div class="vocation">
				<input type="hidden" value="<?=$this->input->post('khid')?>" name="khid" id="khid" /><input name="khname" type="text" value="<?=$this->input->post('khname')?>" class="scinput" id="lrkhmc"  readonly="1" placeholder="点击选择客户" />
			</div>
		</li>
		<li><label>产品名称</label>  
			<div class="vocation"><input name="title" type="text" value="<?=$this->input->post('title')?>" class="scinput" placeholder="请输入产品关键词" /></div></li>
		<li><label>到期时间</label>  
			<div class="vocation">
				<input name="dqrq1" readonly="1" onclick="laydate()" value="<?=$this->input->post('dqrq1')?>" type="text" class="dfinput" style="width:130px;background:url('/themes/skin/images/icon.png') center right no-repeat" placeholder="到期日期起始" /> - <input name="dqrq2"  onclick="laydate()"  readonly="1" type="text" class="dfinput"  value="<?=$this->input->post('dqrq2')?>" style="width:130px;background:url('/themes/skin/images/icon.png') center right no-repeat" placeholder="到期日期结束" />
			</div>
		</li>
		<li><label>&nbsp;</label><input name="" type="submit" class="scbtn" value="查询"/></li>
	</ul>
</form>
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
		<th>客户详情</th>
        </tr>
        </thead>
        <tbody>

	
<?php foreach($list as $v){ ?>
	<tr>
		<td><input name="check_id" type="checkbox" value="<?php echo $v['id']?>" /></td>
		<td><?=$v['cpmc']?></td>
		<td><?php if($kh_select=$this->kehu_m->select_khname($v['khid']))?>
<?php foreach($kh_select as $s){?><?php echo $s['tb_khmc'];?><?php } ?></td>
		<td><?=$v['ktrq']?></td>
		<td><?=$v['dqrq']?></td>
		<td><?=$v['txrq']?></td>
		<td><?=$v['cbjg']?></td>
		<td><?=$v['xsjg']?></td>
		<td><?=$v['content']?></td>
		<td id="showkehu<?php echo $v['khid']?>"  data-value="<?php echo $v['khid']?>" style="cursor:pointer">查看客户</td>
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