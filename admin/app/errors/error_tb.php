<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title><?php echo $heading; ?></title>
<link href="/themes/skin/css/style.css" rel="stylesheet" type="text/css" />
<script src="/themes/skin/js/jquery-1.9.1.min.js" type="text/javascript"></script>
<script src="/themes/layer/layer.min.js" type="text/javascript"></script>
<script src="/themes/skin/js/login.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function(e) {
	var index = parent.layer.getFrameIndex(window.name);
	layer.msg("<?php echo $message; ?>", 2,1, function(){
		<?php if($top=='1'){ echo'top.';}?>location.href = '<?php echo $url; ?>';
		});
		//parent.layer.close(index);
	});
	
</script>
</head>
<body>
</body>
</html>