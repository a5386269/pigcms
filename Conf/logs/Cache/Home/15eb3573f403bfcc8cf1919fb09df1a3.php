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
        <!-- Mobile Devices Support @end -->
        <link rel="shortcut icon" href="/tpl/static/favicon.ico" />
        <link rel="stylesheet" type="text/css" href="<?php echo RES;?>/reg/style.css?2013-9-13-2" media="all" />
<script type="text/javascript" src="<?php echo RES;?>/reg/jQuery.js?2013-9-13-2"></script>
<script type="text/javascript" src="<?php echo RES;?>/js/placeholder.js?v=2c99b443.js"></script>
<!--[if IE 6]><script src="<?php echo RES;?>/js/DD_belatedPNG.js?v=cb43010f.js" type="text/javascript"></script><![endif]-->
<title>登录-<?php echo C('site_name');?></title>
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
    <body onkeydown="bindEnterKey(event);">
<div id="doc">
    <div id="hd" class="clearfix">
        <div class="logo"><a href="/" hidefocus="true" onFocus="this.blur();"></a></div>
    </div>
    <div class="info">
        <span><a href="/" target="_blank" title="首页" hidefocus="true" onFocus="this.blur();">首页</a></span>
        <span class="split">|</span>
        <span><a href="/index.php?m=Index&a=register" class="registerNew" title="注册" hidefocus="true" onFocus="this.blur();">注册新帐号</a></span>
    </div>
    <div id="bd" class="quc-clearfix reg-wrapper-quick">
        <div class="content">
            <div id="loginWrap">
                <div id="modLoginWrap" class="mod-qiuser-pop">
                    <dl class="login-wrap">
                        <dt>
                            <span id="loginTitle"></span>
                        </dt>
                        <div class="ipbox">
                            <b class="r1"></b>
                            <b class="r2"></b>
                            <b class="r5"></b>
                            <div class="con">
                                <dd class="botborder" style="z-index:10;">
                                    <div class="quc-clearfix login-item">
                                        <label for="username">帐号：</label>
                                        <input type="text" id="username" name="username" tabindex="1" class="ipt tipinput1" placeholder="手机号/用户名/邮箱" autocomplete="off" maxlength="100" suggestwidth="374px" />
                                    </div>
                                </dd>
                                <dd class="password">
                                    <div class="quc-clearfix login-item">
                                        <label for="password">密码：</label>
                                        <input type="password" id="password" name="password" tabindex="2" class="ipt tipinput1" placeholder="请输入您的密码" maxlength="20" autocomplete="off" />
                                    </div>
                                </dd>
                            </div>
                            <b class="r5"></b>
                            <b class="r3"></b>
                            <b class="r4"></b>
                        </div>
                        <dd class="find">
                            <label onClick="changeCheckbox();">
                                <span id="keepalive" value="1" class="checked checkbox" tabindex="3"></span>自动登录
                            </label>
                            <a href="<?php echo U('Index/getpass');?>" target="_blank" class="fac" style="display:;">找回密码</a>
                        </dd>
                        <div style="margin:0 0 10px; color:#c35d00;" id="error_box">
                            <span id="error_tips"></span>
                        </div>
                        <dd class="submit">
                            <span><input type="submit" tabindex="4" class="btn-login" id="btn-login" value="" /></span>
                        </dd>
                    </dl>
                </div>
            </div>
        </div>
    </div>
    <div id="ft">Copyright&copy;2013-2016 <?php echo C('site_name');?> All Rights Reserved</div>
</div>
<script type="text/javascript" src="/tpl/static/huishuo.js"></script>
<script type="text/javascript" src="<?php echo RES;?>/reg/login.js"></script>
</body>
</html>