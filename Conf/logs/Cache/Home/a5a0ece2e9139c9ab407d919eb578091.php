<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="keywords" content="<?php echo C('keyword');?>" />
<meta name="description" content="<?php echo C('content');?>" />
<!-- Mobile Devices Support @begin -->
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta name="apple-mobile-web-app-capable" content="yes" /> <!-- apple devices fullscreen -->
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />

<link rel="shortcut icon" href="/tpl/static/favicon.ico" />
<link rel="stylesheet" type="text/css" href="<?php echo RES;?>/reg/bootstrap.css?2013-10-15-2" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo RES;?>/reg/reg.css?2013-10-15-2" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo RES;?>/reg/style.css?2013-10-15-2" media="all" />
<script type="text/javascript" src="<?php echo RES;?>/reg/jQuery.js?2013-10-15-2"></script>
<script type="text/javascript" src="<?php echo RES;?>/reg/bootstrap.js?2013-10-15-2"></script>
<script type="text/javascript" src="<?php echo RES;?>/reg/omvalidate.js?2013-10-15-2"></script>
<script type="text/javascript" src="<?php echo RES;?>/reg/reg.js?2013-10-15-2"></script>
<script type="text/javascript" src="<?php echo RES;?>/js3/placeholder.js?v=2c99b443.js"></script>
<!--[if IE 6]><script src="<?php echo RES;?>/js/DD_belatedPNG.js?v=cb43010f.js" type="text/javascript"></script><![endif]-->
 
<title>注册-<?php echo C('site_name');?></title>
        <!--[if IE 7]>
            <link href="<?php echo RES;?>/reg/font_awesome_ie7.css" rel="stylesheet" />
        <![endif]-->
        <!--[if lte IE 8]>
            <script src="<?php echo RES;?>/reg/excanvas_min.js"></script>
        <![endif]-->
        <!--[if lte IE 9]>
            <script src="<?php echo RES;?>/reg/watermark.js"></script>
        <![endif]-->
    </head>
    
	<div class="header">
	</div>
	<div class="mainbody">
		<div class="top">

        <div id="hd" class="clearfix">
            <div class="logo"><a href="/" hidefocus="true" onFocus="this.blur();"></a></div>
        </div>

        <div class="info">
        <span><a href="/" target="_blank" title="首页" hidefocus="true" onFocus="this.blur();"><?php echo C('site_name');?>首页</a></span>
        <span class="split">|</span>
        <span><a href="/index.php?m=Index&a=login" class="registerNew" title="登录" hidefocus="true" onFocus="this.blur();">登录</a></span>
    </div>
    <div style="clear:both;"></div>
		</div>
     <div class="reg-wrapper2">
	<form id="regform" class="form-horizontal" action="#" method="post">
		  <div class="control-group error">
		    <label class="control-label" for="username">用户名</label>
		    <div class="controls">
		      <input type="text" name="username" id="username" title="请输入用户名">
		      <span class="maroon">*</span><span class="help-inline">长度为6~16位字符，可以为“数字/字母/中划线/下划线”组成</span>
		    </div>
		  </div>
		  <div class="control-group error">
		    <label class="control-label" for="password">设置密码</label>
		    <div class="controls">
		      <input type="password" name="password" id="password"  title="请输入密码">
		      <span class="maroon">*</span><span class="help-inline">长度为6~16位字符</span>
		    </div>
		  </div>
		  <div class="control-group error">
		    <label class="control-label" for="repassword">确认密码</label>
		    <div class="controls">
		      <input type="password" name="repassword" id="repassword"  title="请输入密码">
		    </div>
		  </div>
            <div class="control-group">
                <label class="control-label" for="province">详细地址</label>
                <div class="controls">
                    <select name="province" id="province"></select>
                    <select name="city" id="city"></select>
                    <select name="areaid" id="areaid"></select>
		    <script src="<?php echo RES;?>/reg/region_select.js"></script>
                    <script type="text/javascript">
                          new PCAS('province', 'city', 'areaid', '', '', '');
                    </script>
                </div>
            </div>
            
            <div class="control-group error">
		    <label class="control-label" for="mobile">手机</label>
		    <div class="controls">
		      <input type="text" name="mobile" id="mobile"  title="请输入手机">
		      <span class="maroon">*</span><span class="help-inline">请输入正确的手机号码</span>
		    </div>
		  </div>
		  <div class="control-group error">
		    <label class="control-label" for="email">邮箱</label>
		    <div class="controls">
		      <input type="text" name="email" id="email" title="请输入邮箱">
		      <span class="maroon">*</span><span class="help-inline">忘记密码会用到邮箱，请填写正确的邮箱</span>
		    </div>
		  </div>
		  <div class="control-group">
		    <label class="control-label" for="qq">QQ</label>
		    <div class="controls">
		      <input type="text" name="qq" id="qq">
		    </div>
		  </div>
		 
                    <div class="control-group">
		    <label class="control-label" for="randcode">验证码</label>
		    <div class="controls">
		      <script>
                        function refreshImg(){
                        	document.getElementById("txtCheckCode").src="/index.php?m=Index&a=verify&s="+Math.random();
                        }
                        </script>
                        <input name="verifycode" type="text" size="4" style="width:80px;" class="text" maxlength="4" />&nbsp;<img src="<?php echo U('Index/verify');?>" id="txtCheckCode"/>&nbsp;<a href="javascript:refreshImg();" style="color:#666">看不清？换一张</a>
		    </div>
		  </div>

		  
		  <div class="control-group">
		  	<div class="controls">
			    <button type="submit" id="reg-btn" class="btn-register"   style="display:"></button>
                            <button type="button" class="btn-register" onClick="validityInvitecode(this); return false;" style="display:none;"></button>
		  	</div>
		  </div>
		</form>
     </div>
	</div>

<script type="text/javascript">
	$(function(){
	    $('#username').focus();

	});
function refresh()
{
        var randomRZ = Math.random();
        $("#imgCheckB").attr("src", "/index.php?g=Admin&m=Admin&a=verify&rz=" + randomRZ);
}
  function validityInvitecode(obj){
        obj = $(obj);
        obj.attr('disabled', 'true');
        $.post('/index.php?g=Admin&m=Admin&a=checkverify&vcode='+$('#captcha').val(), function(rs){
	 
            alert(rs);
            $('#reg-btn').click();
            obj.removeAttr('disabled');
        }, 'json');
	 
    }
 
</script></html>