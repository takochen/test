<!DOCTYPE html>
<html lang="en">
    <head>
        <title>登入畫面</title>
		<meta charset="UTF-8" />
        <!--
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
        <link rel="stylesheet" href="css/unicorn.login.css" /> -->
        <?php echo link_tag('css/bootstrap.min.css'); ?>
        <?php echo link_tag('css/bootstrap-responsive.min.css'); ?>
        <?php echo link_tag('css/unicorn.login.css'); ?>
    </head>
    <body>
        <div id="logo">
            <!--<img src="img/logo.png" alt="" /> -->
            <?php echo img('img/logo.png'); ?>
        </div>
        <div id="loginbox">            
            <form id="loginform" class="form-vertical" action="<?php echo site_url('app/index'); ?>">
				<p>請輸入帳號密碼</p>
                <div class="control-group">
                    <div class="controls">
                        <div class="input-prepend">
                            <span class="add-on"><i class="icon-user"></i></span><input type="text" placeholder="帳號" />
                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <div class="input-prepend">
                            <span class="add-on"><i class="icon-lock"></i></span><input type="password" placeholder="密碼" />
                        </div>
                    </div>
                </div>
                <div class="form-actions">
                    <!-- 忘記密碼連結
                    <span class="pull-left"><a href="#" class="flip-link" id="to-recover">Lost password?</a></span>
                    -->
                    <span class="pull-right"><input type="submit" class="btn btn-inverse" value="登入" /></span>
                </div>
            </form>
            <!-- 忘記密碼表單
            <form id="recoverform" action="#" class="form-vertical">
				<p>Enter your e-mail address below and we will send you instructions how to recover a password.</p>
				<div class="control-group">
                    <div class="controls">
                        <div class="input-prepend">
                            <span class="add-on"><i class="icon-envelope"></i></span><input type="text" placeholder="E-mail address" />
                        </div>
                    </div>
                </div>
                <div class="form-actions">
                    <span class="pull-left"><a href="#" class="flip-link" id="to-login">&lt; Back to login</a></span>
                    <span class="pull-right"><input type="submit" class="btn btn-inverse" value="Recover" /></span>
                </div>
            </form>
            -->
        </div>
        
        <script src="js/jquery.min.js"></script>  
        <script src="js/unicorn.login.js"></script> 
    </body>
</html>