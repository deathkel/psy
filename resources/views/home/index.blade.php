<!DOCTYPE html>
<head>
    <meta charset="UTF-8" />
    <title>欢迎来到奇幻小说网！</title>
    <link rel="icon" href="/img/icon.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Login and Registration Form with HTML5 and CSS3" />
    <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
    <link rel="stylesheet" type="text/css" href="/css/login.css" />
    <link rel="stylesheet" type="text/css" href="/css/login_style.css" />
    <link rel="stylesheet" type="text/css" href="/css/login_animate_custom.css" />
</head>
<body>
<div class="container">
    <section>
        <div id="container_demo" >
            <a class="hiddenanchor" id="toregister"></a>
            <a class="hiddenanchor" id="tologin"></a>
            <a class="hiddenanchor" id="toforget"></a>
            <div id="wrapper">
                <div id="login" class="animate form">
                    <form autocomplete="on">
                        <p>
                            <label class="uname" data-icon="u" >用户名</label>
                            <input id="username" name="username" required type="text" placeholder="请输入您的用户名"/>
                        </p>
                        <p>
                            <label class="youpasswd" data-icon="p">密&nbsp;&nbsp;&nbsp;码</label>
                            <input id="password" name="password" required type="password" placeholder="请输入密码，注意大小写" />
                        </p>
                        <p class="login button">
                            <input type="submit" value="登录" />
                        </p>
                        <p class="change_link">
                            <a href="#toforget" class="to_register">忘记密码</a>
                            <a href="#toregister" class="to_register">注册</a>
                        </p>
                    </form>
                </div>

                <div id="register" class="animate form">
                    <form autocomplete="on">
                        <p>
                            <label class="uname" data-icon="u">用户名</label>
                            <input id="usernamesignup" name="usernamesignup" required type="text" placeholder="请输入您的用户名" />
                        </p>
                        <p>
                            <label class="youmail" data-icon="e" >邮&nbsp;&nbsp;&nbsp;箱</label>
                            <input id="emailsignup" name="emailsignup" required type="email" placeholder="请输入您的有效邮箱"/>
                        </p>
                        <p>
                            <label class="youpasswd" data-icon="p">密&nbsp;&nbsp;&nbsp;码</label>
                            <input id="passwordsignup" name="passwordsignup" required type="password" placeholder="请输入密码，注意大小写"/>
                        </p>
                        <p>
                            <label class="youpasswd" data-icon="p">重复密码</label>
                            <input id="passwordsignup_confirm" name="passwordsignup_confirm" required type="password" placeholder="请再次输入密码"/>
                        </p>
                        <p class="signin button">
                            <input type="submit" value="注册"/>
                        </p>
                        <p class="change_link">
                            <a href="#tologin" class="to_register">已有账户？赶紧去！</a>
                        </p>
                    </form>
                </div>
                <div id="forget" class="animate form">
                    <form   autocomplete="on">
                        <p>
                            <label class="mail" data-icon="e" >邮&nbsp;&nbsp;&nbsp;箱</label>
                            <input id="email" name="email" required type="email" placeholder="请输入您注册时使用的邮箱"/>
                        </p>
                        <p class="send button">
                            <input type="submit" value="发送邮件" />
                        </p>
                        <p class="change_link">

                            <a href="#tologin" class="to_register">已有账户？赶紧去！</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
</body>
</html>