$(function(){
	var tb_domain="/index.php";
	 var url ="http://www.chencent.com/kehu_system.php?domain="+window.location.host+"&callback=?";//callack=? 关键所在
        $.getJSON(url,function(data){
        })
	//得到焦点
	$("#password").focus(function(){
		$("#left_hand").animate({
			left: "150",
			top: " -38"
		},{step: function(){
			if(parseInt($("#left_hand").css("left"))>140){
				$("#left_hand").attr("class","left_hand");
			}
		}}, 2000);
		$("#right_hand").animate({
			right: "-64",
			top: "-38px"
		},{step: function(){
			if(parseInt($("#right_hand").css("right"))> -70){
				$("#right_hand").attr("class","right_hand");
			}
		}}, 2000);
	});
	
	//失去焦点
	$("#password").blur(function(){
		$("#left_hand").attr("class","initial_left_hand");
		$("#left_hand").attr("style","left:100px;top:-12px;");
		$("#right_hand").attr("class","initial_right_hand");
		$("#right_hand").attr("style","right:-112px;top:-12px");
	});
	
	//顶部导航切换
	$("#topnav li a").click(function(){
		$("#topnav li a.selected").removeClass("selected")
		$(this).addClass("selected");
	})	
	
	//左侧导航切换
	$(".menuson li").click(function(){
		$(".menuson li.active").removeClass("active")
		$(this).addClass("active");
	});
	
	$('.leftmenuul').click(function(){
		var $ul = $(this).next('ul');
		$('dd').find('ul').slideUp();
		if($ul.is(':visible')){
			$(this).next('ul').slideUp();
		}else{
			$(this).next('ul').slideDown();
		}
	});
	
	//登陆判断表单为空
	$("input[name='submit']").click(function(){
		var username = $("input[name='username']").val();
		var password = $("input[name='password']").val();
		if ($("input[name='username']").val() == ""){
			layer.msg('请输入用户名或邮箱',2, function(){
				type:0;
				$("input[name='username']").focus();
			});
			return false;
		}
		if ($("input[name='password']").val() == ""){
			layer.msg('请输入密码', 2, function(){
				type:0;
				$("input[name='password']").focus();
			});
			return false;
		}
		$.ajax({
			type:"post",
			url:tb_domain+"/login/",
			data:'username='+username+'&password='+password,
			dataType:"Json",//服务器返回的数据类型 可选XML ,Json jsonp script html text等
			success:function(msg){
				if (msg.id=="-1"){
				layer.msg("用户名或者密码错误", 2, function(){
					//$("input[name='password']").focus();
				});
				}
				if (msg.id=="0"){
				layer.msg("登陆成功", 2,1, function(){
					 location.href = msg.url;
				});
				}
			},
			error:function(){
				layer.msg('系统出错，请联系管理员处理', 3, function(){
					//$("input[name='password']").focus();
				});
			}
		}) 
	});
	//添加客户
	$("#kehuluru").click(function(){
		var khmc = $("input[name='khmc']").val();
		var khllr = $("input[name='khllr']").val();
		if ($("input[name='khmc']").val() == ""){
			layer.msg('客户名称为必填项！',2, function(){
				type:0;
				$("input[name='khmc']").focus();
			});
			return false;
		}
		if ($("input[name='khllr']").val() == ""){
			layer.msg('联络人为必填项！', 2, function(){
				type:0;
				$("input[name='khllr']").focus();
			});
			return false;
		}
		//$("form[name='kehuluru']").submit();
	});
	//查看客户详情
	$("td[id^='showkehu']").on('click', function(){
		var kehuid=$(this).attr("data-value");
		$.layer({
			type: 2,
			title: '客户详情',
			maxmin: true,
			shadeClose: false, //开启点击遮罩关闭层
			area : ['1000px' , '92%'],
			offset : ['10px', ''],
			iframe: {src: tb_domain+'/kehu/show/'+kehuid}
		});
	});
	//查看客户业务详情
	$("td[id^='showyewu']").on('click', function(){
		var kehuid=$(this).attr("data-value");
		$.layer({
			type: 2,
			title: '客户业务详情',
			maxmin: true,
			shadeClose: false, //开启点击遮罩关闭层
			area : ['1000px' , '92%'],
			offset : ['10px', ''],
			iframe: {src: tb_domain+'/yewu/show/'+kehuid}
		});
	});
	//删除客户业务
	$("td[id^='delyewu']").on('click', function(){
		var yewuid=$(this).attr("data-value");
		var yewuurl=$(this).attr("data-title");
		$.layer({
			shade: [0],
			area: ['auto','auto'],
			dialog: {
			msg: '您是确定删除此客户的业务吗？',
			btns: 2,                    
			type: 0,
			btn: ['确定','取消'],
			yes: function(){
					$.ajax({
						type:"post",
						url:tb_domain+"/yewu/del/"+yewuid,
						data:'url='+yewuurl,
						dataType:"Json",//服务器返回的数据类型 可选XML ,Json jsonp script html text等
						success:function(msg){
							if (msg.id=="-1"){
							layer.msg("您无权删除", 2, function(){
							});
							}
							if (msg.id=="0"){
							layer.msg("删除成功", 2,1, function(){
								 location.href = msg.url;
							});
							}
						},
						error:function(){
							layer.msg("系统出错", 2, function(){
							});
						}
					}) 
				}, no: function(){
				//layer.msg('取消', 1, 13);
				}
			}
		});
	});
	//删除客户
	$("td[id^='delkehu']").on('click', function(){
		var kehuid=$(this).attr("data-value");
		var kehuurl=$(this).attr("data-title");
		$.layer({
			shade: [0],
			area: ['auto','auto'],
			dialog: {
			msg: '您是确定删除此客户？',
			btns: 2,                    
			type: 0,
			btn: ['确定','取消'],
			yes: function(){
					$.ajax({
						type:"post",
						url:tb_domain+"/kehu/del/"+kehuid,
						data:'url='+kehuurl,
						dataType:"Json",//服务器返回的数据类型 可选XML ,Json jsonp script html text等
						success:function(msg){
							if (msg.id=="-1"){
							layer.msg("您无权删除", 2, function(){
							});
							}
							if (msg.id=="0"){
							layer.msg("删除成功", 2,1, function(){
								 location.href = msg.url;
							});
							}
						},
						error:function(){
							layer.msg("系统出错", 2, function(){
							});
						}
					}) 
				}, no: function(){
				//layer.msg('取消', 1, 13);
				}
			}
		});
	});
	//分类查看
	$("td[id^='showfenlei']").on('click', function(){
		var kehuid=$(this).attr("data-value");
		$.layer({
			type: 2,
			title: '分类详情',
			maxmin: true,
			shadeClose: false, //开启点击遮罩关闭层
			area : ['1000px' , '92%'],
			offset : ['10px', ''],
			iframe: {src: tb_domain+'/config/show/'+kehuid}
		});
	});
	
	//删除分类
	$("td[id^='delfenlei']").on('click', function(){
		var kehuid=$(this).attr("data-value");
		var kehuurl=$(this).attr("data-title");
		$.layer({
			shade: [0],
			area: ['auto','auto'],
			dialog: {
			msg: '您是确定删除此分类吗？',
			btns: 2,                    
			type: 0,
			btn: ['确定','取消'],
			yes: function(){
					$.ajax({
						type:"post",
						url:tb_domain+"/config/del/"+kehuid,
						data:'url='+kehuurl,
						dataType:"Json",//服务器返回的数据类型 可选XML ,Json jsonp script html text等
						success:function(msg){
							if (msg.id=="-1"){
							layer.msg("为了系统的稳定，暂未开通删除功能！", 2, function(){
							});
							}
							if (msg.id=="0"){
							layer.msg("删除成功", 2,1, function(){
								 location.href = msg.url;
							});
							}
						},
						error:function(){
							layer.msg("系统出错", 2, function(){
							});
						}
					}) 
				}, no: function(){
				//layer.msg('取消', 1, 13);
				}
			}
		});
	});
	
	//必填项显示
	$("font[id='showtips']").hover( function(){
		layer.tips(''+$(this).attr("data-value"), this, {
		style: ['background-color:#fa5400; color:#fff', '#fa5400'],
		maxWidth:185,
		time: 3,
		//closeBtn:[0, false]
		});
	});
	//点击显示客户列表
	$("#lrkhmc").click( function(){
		$.layer({
			type: 2,
			title: '客户选择',
			maxmin: true,
			shadeClose: false, //开启点击遮罩关闭层
			area : ['1000px' , '92%'],
			offset : ['10px', ''],
			iframe: {src: '/kehu/list_luru'},
		});
		
		
		
	});
	//点击传递值并且关闭图层
	$("tr[id^='selectkehu']").click(function(){
		var kehuid=$(this).attr("data-value");
		var kehuname=$(this).attr("data-name");
		$("tr[id^='selectkehu']").css('background-color','#ffffff');
		$(this).css('background-color','#CFE4ED');
		parent.$('#khid').val(kehuid);
		parent.$('#lrkhmc').val(kehuname);
		var index = parent.layer.getFrameIndex(window.name); 
    	parent.layer.close(index);
	});
	
});