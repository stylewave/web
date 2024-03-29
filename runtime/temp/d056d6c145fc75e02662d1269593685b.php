<?php /*a:1:{s:55:"E:\data\newsyun/application/admin/view\index\login.html";i:1561524998;}*/ ?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="renderer" content="webkit">
    <title>后台登录</title>
    <link rel="stylesheet" href="/public/static/admin/login/base.css">
    <link rel="stylesheet" href="/public/static/admin/login/style.css">
    <script type="text/javascript" src="/public/static/public/jquery.js"></script>
    <script type="text/javascript" src="/public/static/public/jquery.md5.js"></script>
    <script type="text/javascript" src="/public/static/layer/layer.js"></script>
    <script type="text/javascript" src="/public/static/public/common.js"></script>
</head>
<body>

    <div class="bg"></div>
    <div class="container">
        <div class="line bouncein">
            <div class="xs6 xm4 xs3-move xm4-move">
                <div style="height:150px;"></div>
                <div class="media media-y margin-big-bottom">
                </div>

                    <div class="panel loginbox">
                        <div class="text-center margin-big padding-big-top">
                            <h1>后台管理中心</h1>
                        </div>
                        <div class="panel-body" style="padding:30px; padding-bottom:10px; padding-top:10px;">
                            <div class="form-group">
                                <div class="field field-icon-right">
                                    <input type="text" class="input input-big" name="name" id="username" placeholder="登录账号">
                                    <span class="icon icon-user margin-small" ></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="field field-icon-right">
                                    <input type="password" class="input input-big" name="password" id="password" placeholder="登录密码">
                                    <span class="icon icon-key margin-small"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="field">
                                    <input type="text" class="input input-big" name="code" id="code" placeholder="填写验证码">
                                  
                                    <img src="/verify" alt="" width="100" height="32" id="yanzhengmacode" class="passcode" style="height:43px;cursor:pointer;" onclick="reloadcode2('yanzhengmacode')">
                                    <!-- <img src="<?php echo captcha_src(); ?>" alt="" width="100" height="32" id="yanzhengmacode" class="passcode" style="height:43px;cursor:pointer;" onclick="reloadcode('yanzhengmacode')"> -->
                                </div>

                            </div>
                        </div>
                        <div style="padding:30px;">
                            <input type="button" id="button" class="button button-block bg-main text-big input-big" value="登录" onclick="adminlogin();">
                        </div>
                    </div>

            </div>
        </div>
    </div>

<script>

    $(document).keyup(function(event){
        if(event.keyCode ==13){
            adminlogin();
        }
    });

    var ajax_submit = 0;
    function adminlogin() {
        if(ajax_submit != 0) {
            return false;
        }
        ajax_submit = 1;
        var username = $('#username').val();
        var pass = $('#password').val();
        var code = $('#code').val();
        if(username == '') {
            tips('请填写用户名！','.icon-user','username');
            return false;
        }
        if(pass == '') {
            tips('请填写密码！','.icon-key','password');
            return false;
        }
        if(code == '') {
            tips('请填写验证码！','.passcode','code');
            return false;
        }
        try{
            var is = false;
            var rmsg = '';
            $.ajax({
                type: 'POST',
                async: false,
                url: "<?php echo Url::build('admin/Index/login'); ?>",
                data: {username: username,pass:$.md5($.md5(pass)),code:code},
                success: function (data) {
                    if (data.code != 1) {
                        is = true;
                    }
                    rmsg = data.msg;
                }
            });
            if (is) {
                throw (rmsg);
            }
        }catch (e) {
            tips(e,'.icon-user');
            return false;
        }
        window.location.href="<?php echo Url::build('admin/Index/index'); ?>";
    }
</script>
    <style>
        body #think_page_trace_open img{display: none}
    </style>
</body>
</html>