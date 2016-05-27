<!doctype html>
<html lang="zh">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>登记也要按照基本法 / SUsage Register</title>
   	<link rel="stylesheet" type="text/css" href="../res/css/modules/ex-regester.css">
    <link rel="shortcut icon" href="../res/icons/title/login_128X128.ico"/>
</head>
<body style="text-align:center;">
	<!--通知popup-->
<div class="toast" id="codetips" style="background-color:#D50000;position:fixed;width:100%;height:30px;z-index:100;display:none;">
	<p style="font-family:微软雅黑;color:#ffffff;position:absolute;left:42%;line-height:30px;">乖孩纸，你确定激活码没写错？</p>
	
</div>
<header class="htmleaf-header" style="padding-top:50px">
   
				<p style="color:#FFFFFF;font-size:24px">New here？注册SUsage</p>  
	</header>
     
    <div style="font-size:12px;color:#FFFFFF;padding-top:30px;">SUsage 桌面版1.0 · 
    <a onclick="displaytips(); return false" style="color:#FFFFFF">[点此测试激活码提示]</a> · <a href="https://github.com/zhxsuwebgroup/SUsage/wiki/%E5%B8%AE%E5%8A%A9%E4%B8%8E%E5%8F%8D%E9%A6%88%E4%B8%AD%E5%BF%83-%7C-Hints-&-Feedbacks" target="_blank" style="color:#ffffff;text-decoration: NONE">帮助与反馈中心 </a>·<a href="http://zhxsuwebgroup.github.io/SUsage/" target="_blank" style="color:#ffffff;text-decoration: NONE"> 关于 | 开源许可及协议声明 </a>· ©2016 <a href="http://weibo.com/zxsu32nd" target="_blank" style="color:#ffffff">执信学生会</a> <a href="http://weibo.com/zhxsupc" target="_blank"  style="color:#ffffff">电脑部</a> · In tech we trust</div>
	<article class="htmleaf-content">
		<!-- multistep form -->
		<form id="msform">
			
			<!-- fieldsets -->
			<fieldset>
				<h2 class="fs-title">现在，我们要确认你的身份</h2>
                <h3 class="fs-subtitle">看准了，别写错</h3>
				<input type="text" name="ActiveID" placeholder="SUsage激活码" style="ime-mode:disabled;-moz-ime-mode:disabled;-webkit-ime-mode:disabled;-ms-ime-mode:disabled" onkeyup="value=value.replace(/[^\w\.\/]/ig,'')" MaxLength="11"/>
				<input type="button" name="next" class="next action-button" value="下一步" />
                <p style="font-size:14px;"><a href="../entity/login.html" style="color:#66CCFF;text-decoration: NONE">已有账号？现在登录></a></p>
			</fieldset>
			<fieldset>
				<h2 class="fs-title">你好，<span>XXX<span></h2><!--span里面通过查找激活码获得该人的名字-->
				<h3 class="fs-subtitle">请填写一些必要信息~</h3>
				<input type="password" name="pass" placeholder="不要告诉别人你的密码" />
				<input type="password" name="cpass" placeholder="请再输一遍密码" />
				<input type="button" name="previous" class="previous action-button" value="回去" />
				<input type="button" name="next" class="next action-button" value="下一步" />
			</fieldset>
			<fieldset>
				<h2 class="fs-title">完善你的详细信息</h2>
				<h3 class="fs-subtitle">还差一步，就可以体验全新SUsage</h3>
				<input type="text" name="fname" placeholder="起个昵称" />
				<p style="color:#909090;font-size:12px;color:red">请牢记，这也是你的SUsage ID。</p>
				<input type="text" name="group" placeholder="所在组别" />
				<p style="color:#909090;font-size:12px">eg:网页组、美工组，无组别此项可留空</p>
				<input type="button" name="previous" class="previous action-button" value="回去" />
				<input type="submit" name="submit" class="submit action-button" value="完成并登陆"/>
			</fieldset>
             
		</form>
        
	</article>
	
	<script src="../res/js/jquery-2.2.1.min.js" type="text/javascript"></script>
	<script>window.jQuery || document.write('<script src="../universal-res/js/jquery-2.2.1.min.js"><\/script>')</script>
	<!--script src="../universal-res/js/jquery.easing.min.js" type="text/javascript"></script-->
	<script>
	var current_fs, next_fs, previous_fs;
	var left, opacity, scale;
	var animating;
	$('.next').click(function () {
	    if (animating)
	        return false;
	    current_fs = $(this).parent();
	    next_fs = $(this).parent().next();
	    next_fs.show();
	    current_fs.animate({ opacity: 0 }, {
	        step: function (now, mx) {
	            left = now * 100 + '%';
	            next_fs.css({ 'left': left, 'opacity': 100});
	        },
	        duration: 150,
	        complete: function () {
	            current_fs.hide();
	        },
	    });
	});
	$('.previous').click(function () {
	    if (animating)
	        return false;
	    animating = true;
	    current_fs = $(this).parent();
	    previous_fs = $(this).parent().prev();
	    previous_fs.show();
	    current_fs.animate({ opacity: 0 }, {
	        step: function (now, mx) {
	            left = (1 - now) * 100 + '%';
	            current_fs.css({ 'left': left });
	            previous_fs.css({ 'opacity': 100 });
	        },
	        duration: 150,
	        complete: function () {
	            current_fs.hide();
	            animating = false;
	        },
	    });
	});
	$('.submit').click(function () {
	    return false;
	});
	</script>
    <!--提示代码-->
<script type="text/javascript">
	var tips = document.getElementById('codetips');
    function displaytips() { tips.style.display = " block " ;
	setTimeout("tips.style.display='none'",3000);
    }  
	 
	</script>
    </body>
</html>