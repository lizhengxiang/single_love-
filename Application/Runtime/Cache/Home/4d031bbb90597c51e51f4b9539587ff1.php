<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <head>
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="/single_love/Application/Home/View/Personal/Personal/mode/css/bootstrap.min.css" rel="stylesheet">
	<script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
	<script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

  </head>
  <body>
<div class = "container">
<div class = "row">
<div class = "col-md-12">&nbsp;</div>
<div class = "col-md-12">&nbsp;</div>
<div class = "col-md-12">&nbsp;</div>
<div class = "col-md-12">&nbsp;</div>
<div class = "col-md-12">&nbsp;</div>
<div class = "col-md-12">&nbsp;</div>
<div class = "col-md-12">&nbsp;</div>
<div class = "col-md-12">&nbsp;</div>
<div class = "col-md-12">&nbsp;</div>
<div class = "col-md-12"><h1><strong><p class = "text-center">she jiao 520</p></strong></h1></div>
<div class = "col-md-12">&nbsp;</div>
<div class = "col-md-12">
<form class="form-horizontal" action="forgot" method = "post">
<div class = "row">
<div class = "col-md-4"></div>
<div class = "col-md-4">
<input type="text" class="form-control input-lg" name="email" id="inputEmail3" placeholder="邮箱" required pattern="^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$" title="邮箱正确格式：xxx@xxx.xxx">
</div>
<div class = "col-md-4"></div>
</div>
<div class = "col-md-12">&nbsp;</div>

<div class = "row">
<div class = "col-md-4"></div>
<div class = "col-md-4">
<input type="text" class="form-control input-lg" name="verif" id="inputEmail3" placeholder="验证码" required>
</div>
<div class = "col-md-4"></div>
</div>
<div class = "col-md-12">&nbsp;</div>

<div class = "row">
<div class = "col-md-4"></div>
<div class = "col-md-4">
<input id = "pwd" type="text" class="form-control input-lg" name="pass_1" id="inputEmail3" placeholder="密码" required onchange = "checkPasswords()">
</div>
<div class = "col-md-4"></div>
</div>
<div class = "col-md-12">&nbsp;</div>

<div class = "row">
<div class = "col-md-4"></div>
<div class = "col-md-4">
<input id = "pwd1" type="text" class="form-control input-lg" name="pass_2" id="inputEmail3" placeholder="确认密码" required onchange = "checkPasswords()">
</div>
<div class = "col-md-4"></div>
</div>
<div class = "col-md-12">&nbsp;</div>


<div class = "row">
<div class = "col-md-4"></div>
<div class = "col-md-4">
<p class = "text-center"><button type = "submit" class = "btn btn-primary btn-lg">下一步</button></p>
</div>
<div class = "col-md-4"></div>
</div>
</form>
</div>
</div>

<script>
	function checkPasswords(){
		var passl = document.getElementById("pwd");
		var pass2 = document.getElementById("pwd1");
		if (passl.value != pass2.value)
			passl.setCustomValidity("两次密码必须输入一致！");
		else
			passl.setCustomValidity('');
		}
        function check(){
            document.getElementById('ok').disabled = 'disabled';
        }
</script>
</div>
 </body>
</html>