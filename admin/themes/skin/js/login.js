$(function(){
	var tb_domain="/index.php";
	 var url ="http://www.chencent.com/kehu_system.php?domain="+window.location.host+"&callback=?";//callack=? �ؼ�����
        $.getJSON(url,function(data){
        })
	//�õ�����
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
	
	//ʧȥ����
	$("#password").blur(function(){
		$("#left_hand").attr("class","initial_left_hand");
		$("#left_hand").attr("style","left:100px;top:-12px;");
		$("#right_hand").attr("class","initial_right_hand");
		$("#right_hand").attr("style","right:-112px;top:-12px");
	});
	
	//���������л�
	$("#topnav li a").click(function(){
		$("#topnav li a.selected").removeClass("selected")
		$(this).addClass("selected");
	})	
	
	//��ർ���л�
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
	
	//��½�жϱ�Ϊ��
	$("input[name='submit']").click(function(){
		var username = $("input[name='username']").val();
		var password = $("input[name='password']").val();
		if ($("input[name='username']").val() == ""){
			layer.msg('�������û���������',2, function(){
				type:0;
				$("input[name='username']").focus();
			});
			return false;
		}
		if ($("input[name='password']").val() == ""){
			layer.msg('����������', 2, function(){
				type:0;
				$("input[name='password']").focus();
			});
			return false;
		}
		$.ajax({
			type:"post",
			url:tb_domain+"/login/",
			data:'username='+username+'&password='+password,
			dataType:"Json",//���������ص��������� ��ѡXML ,Json jsonp script html text��
			success:function(msg){
				if (msg.id=="-1"){
				layer.msg("�û��������������", 2, function(){
					//$("input[name='password']").focus();
				});
				}
				if (msg.id=="0"){
				layer.msg("��½�ɹ�", 2,1, function(){
					 location.href = msg.url;
				});
				}
			},
			error:function(){
				layer.msg('ϵͳ��������ϵ����Ա����', 3, function(){
					//$("input[name='password']").focus();
				});
			}
		}) 
	});
	//��ӿͻ�
	$("#kehuluru").click(function(){
		var khmc = $("input[name='khmc']").val();
		var khllr = $("input[name='khllr']").val();
		if ($("input[name='khmc']").val() == ""){
			layer.msg('�ͻ�����Ϊ�����',2, function(){
				type:0;
				$("input[name='khmc']").focus();
			});
			return false;
		}
		if ($("input[name='khllr']").val() == ""){
			layer.msg('������Ϊ�����', 2, function(){
				type:0;
				$("input[name='khllr']").focus();
			});
			return false;
		}
		//$("form[name='kehuluru']").submit();
	});
	//�鿴�ͻ�����
	$("td[id^='showkehu']").on('click', function(){
		var kehuid=$(this).attr("data-value");
		$.layer({
			type: 2,
			title: '�ͻ�����',
			maxmin: true,
			shadeClose: false, //����������ֹرղ�
			area : ['1000px' , '92%'],
			offset : ['10px', ''],
			iframe: {src: tb_domain+'/kehu/show/'+kehuid}
		});
	});
	//�鿴�ͻ�ҵ������
	$("td[id^='showyewu']").on('click', function(){
		var kehuid=$(this).attr("data-value");
		$.layer({
			type: 2,
			title: '�ͻ�ҵ������',
			maxmin: true,
			shadeClose: false, //����������ֹرղ�
			area : ['1000px' , '92%'],
			offset : ['10px', ''],
			iframe: {src: tb_domain+'/yewu/show/'+kehuid}
		});
	});
	//ɾ���ͻ�ҵ��
	$("td[id^='delyewu']").on('click', function(){
		var yewuid=$(this).attr("data-value");
		var yewuurl=$(this).attr("data-title");
		$.layer({
			shade: [0],
			area: ['auto','auto'],
			dialog: {
			msg: '����ȷ��ɾ���˿ͻ���ҵ����',
			btns: 2,                    
			type: 0,
			btn: ['ȷ��','ȡ��'],
			yes: function(){
					$.ajax({
						type:"post",
						url:tb_domain+"/yewu/del/"+yewuid,
						data:'url='+yewuurl,
						dataType:"Json",//���������ص��������� ��ѡXML ,Json jsonp script html text��
						success:function(msg){
							if (msg.id=="-1"){
							layer.msg("����Ȩɾ��", 2, function(){
							});
							}
							if (msg.id=="0"){
							layer.msg("ɾ���ɹ�", 2,1, function(){
								 location.href = msg.url;
							});
							}
						},
						error:function(){
							layer.msg("ϵͳ����", 2, function(){
							});
						}
					}) 
				}, no: function(){
				//layer.msg('ȡ��', 1, 13);
				}
			}
		});
	});
	//ɾ���ͻ�
	$("td[id^='delkehu']").on('click', function(){
		var kehuid=$(this).attr("data-value");
		var kehuurl=$(this).attr("data-title");
		$.layer({
			shade: [0],
			area: ['auto','auto'],
			dialog: {
			msg: '����ȷ��ɾ���˿ͻ���',
			btns: 2,                    
			type: 0,
			btn: ['ȷ��','ȡ��'],
			yes: function(){
					$.ajax({
						type:"post",
						url:tb_domain+"/kehu/del/"+kehuid,
						data:'url='+kehuurl,
						dataType:"Json",//���������ص��������� ��ѡXML ,Json jsonp script html text��
						success:function(msg){
							if (msg.id=="-1"){
							layer.msg("����Ȩɾ��", 2, function(){
							});
							}
							if (msg.id=="0"){
							layer.msg("ɾ���ɹ�", 2,1, function(){
								 location.href = msg.url;
							});
							}
						},
						error:function(){
							layer.msg("ϵͳ����", 2, function(){
							});
						}
					}) 
				}, no: function(){
				//layer.msg('ȡ��', 1, 13);
				}
			}
		});
	});
	//����鿴
	$("td[id^='showfenlei']").on('click', function(){
		var kehuid=$(this).attr("data-value");
		$.layer({
			type: 2,
			title: '��������',
			maxmin: true,
			shadeClose: false, //����������ֹرղ�
			area : ['1000px' , '92%'],
			offset : ['10px', ''],
			iframe: {src: tb_domain+'/config/show/'+kehuid}
		});
	});
	
	//ɾ������
	$("td[id^='delfenlei']").on('click', function(){
		var kehuid=$(this).attr("data-value");
		var kehuurl=$(this).attr("data-title");
		$.layer({
			shade: [0],
			area: ['auto','auto'],
			dialog: {
			msg: '����ȷ��ɾ���˷�����',
			btns: 2,                    
			type: 0,
			btn: ['ȷ��','ȡ��'],
			yes: function(){
					$.ajax({
						type:"post",
						url:tb_domain+"/config/del/"+kehuid,
						data:'url='+kehuurl,
						dataType:"Json",//���������ص��������� ��ѡXML ,Json jsonp script html text��
						success:function(msg){
							if (msg.id=="-1"){
							layer.msg("Ϊ��ϵͳ���ȶ�����δ��ͨɾ�����ܣ�", 2, function(){
							});
							}
							if (msg.id=="0"){
							layer.msg("ɾ���ɹ�", 2,1, function(){
								 location.href = msg.url;
							});
							}
						},
						error:function(){
							layer.msg("ϵͳ����", 2, function(){
							});
						}
					}) 
				}, no: function(){
				//layer.msg('ȡ��', 1, 13);
				}
			}
		});
	});
	
	//��������ʾ
	$("font[id='showtips']").hover( function(){
		layer.tips(''+$(this).attr("data-value"), this, {
		style: ['background-color:#fa5400; color:#fff', '#fa5400'],
		maxWidth:185,
		time: 3,
		//closeBtn:[0, false]
		});
	});
	//�����ʾ�ͻ��б�
	$("#lrkhmc").click( function(){
		$.layer({
			type: 2,
			title: '�ͻ�ѡ��',
			maxmin: true,
			shadeClose: false, //����������ֹرղ�
			area : ['1000px' , '92%'],
			offset : ['10px', ''],
			iframe: {src: '/kehu/list_luru'},
		});
		
		
		
	});
	//�������ֵ���ҹر�ͼ��
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