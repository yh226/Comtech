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
		<li><a href="#">ϵͳ����</a></li>
		<li><a href="#">�����б�</a></li>
	</ul>
</div>
<div class="rightinfo">
<?php if($list){?>
 <table class="tablelist">
    	<thead>
    	<tr>
        <th width="40"></th>
        <th>����</th>
		<th width="80">����</th>
        <th width="80">��ʾ</th>
        <th width="80">����</th>
		<th width="80">ɾ��</th>
        </tr>
        </thead>
        <tbody>

	
<?php foreach($list as $v){ ?>
	<tr>
		<td><input name="check_id" type="checkbox" value="<?php echo $v['id']?>" /></td>
		<td><?=$v['title']?></td>
		<td><?=$v['top']?></td>
		<td><?php if($v['show']=='1'){?>��ʾ<?php }else{?>����ʾ<?php }?></td>
		<td id="showfenlei<?php echo $v['id']?>"  data-value="<?php echo $v['id']?>" style="cursor:pointer">����</td>
		<td id="delfenlei<?php echo $v['id']?>" data-value="<?php echo $v['id']?>" data-title="<?php echo $_SERVER['PHP_SELF'];?>" style="cursor:pointer">ɾ��</td>
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