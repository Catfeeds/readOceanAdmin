<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>阅读海洋后台登录</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="renderer" content="webkit"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta http-equiv="X-UA-Compatible" content="chrome=1"/>
    <link href="<?php echo (ADMIN_CSS_URL); ?>/bootstrap.min14ed.css?v=3.3.6" rel="stylesheet">
    <link href="<?php echo (ADMIN_CSS_URL); ?>/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo (ADMIN_CSS_URL); ?>/animate.min.css" rel="stylesheet">
    <link href="<?php echo (ADMIN_CSS_URL); ?>/style.min.css" rel="stylesheet">
    <link href="<?php echo (ADMIN_CSS_URL); ?>/plugins/toastr/toastr.min.css" rel="stylesheet">
    <script>if (window.top !== window.self) {
        window.top.location = window.location;
    }</script>
</head>

<body class="gray-bg">

<div class="middle-box text-center loginscreen  animated fadeInDown">
    <div style="margin-top: 90px">
        <div>
            <p class="logo-name" style="font-size:90px;margin-bottom: 10px;">阅读海洋</p>
        </div>
        <p>欢迎使用阅读海洋后台管理系统</p>
        <div id="app_root">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="用户名" v-model="username">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" placeholder="密码" v-model="pwd">
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <input type="password" class="form-control" placeholder="验证码" v-model="code">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6"><img src="/User/code" id="code"
                                                                      onclick="this.src='<?php echo (CONTROLLER); ?>/code/'+Math.random();"/>
                </div>
            </div>

            <div class="clear"></div>
            <button type="submit" class="btn btn-primary block full-width m-b" :class="btn_disable ? 'btn-default' : '' " style="margin-top:30px"
                    :disabled="btn_disable" @click="login">登录
            </button>
        </div>
        <p style="color:indianred">为了更好地使用,本系统建议使用Opera,Chorme,Edge,Firefox浏览器。</p>
    </div>
    <script src="<?php echo (ADMIN_JS_URL); ?>jquery.min.js?v=2.1.4"></script>
    <script src="<?php echo (ADMIN_JS_URL); ?>bootstrap.min.js?v=3.3.6"></script>
    <script src="<?php echo (ADMIN_JS_URL); ?>encode/md5.js"></script>
    <script src="<?php echo (VUE_URL); ?>vue.js"></script>
    <script src="<?php echo (ADMIN_JS_URL); ?>plugins/toastr/toastr.min.js"></script>
    <script src="<?php echo (ADMIN_JS_URL); ?>content.index.js"></script>
    <script>
        toastr.options = {
            "closeButton": true,
            "debug": false,
            "progressBar": true,//是否显示进度条
            "positionClass": "toast-top-right",
            "onclick": null,
            "showDuration": "200",
            "hideDuration": "100",
            "timeOut": "2000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        };
        var vm = new Vue({
            el: '#app_root',
            data: {
                username: '',
                pwd: '',
                code: '',
                codeImg: ''
            },
            methods: {
                login: function () {
                    var pack = {
                        'username': this.username,
                        'pwd': this.pwd,
                        'code': this.code
                    };
                    $.ajax({
                        url: "/User/checkLogin",
                        type: "post",
                        data: pack,
                        dataType: 'json',
                        success: function (data) {
                            if (data.tag == 1) {
                                window.location.href = "<?php echo U('Index/index');?>"
                            } else {
                                toastr.error(data.msg);
                                $('#code').click();
                            }
                        },
                        error:function(data){
                            toastr.warning('网络错误,请稍后再试。');
                        }
                    })
                }
            },
            computed: {
                //判断是否可以登录,如果全部长度均大于0,即可点击
                btn_disable: function () {
                    return this.username <= 0 || this.pwd <= 0 || this.code <= 0;
                }
            }
        })
    </script>
</div>
</body>
</html>