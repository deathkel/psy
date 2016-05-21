<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>奇幻小说网-个人设置</title>
<link rel="icon" href="../img/icon.png" />
<link href="../css/setting.css" rel="stylesheet" type="text/css">
</head>

<body>
<div class="wrapper">
	<div class="txt">
    	<h1>设置</h1>
		<form>
        	<p>
           	  <label class="uname">用户名</label>
           	  <input name="username" type="text" id="username" readonly/>（不可修改）
            </p>
            <p>
            	<label class="mail">邮&nbsp;&nbsp;箱</label>
                <input id="email" name="email"type="email" readonly/>（不可修改）
            </p>
            <p>
            	性&nbsp;&nbsp;别&nbsp;
              <label>男</label>
				<input type="radio" name="sex" id="nan" />
			  <label>女</label>
			  <input type="radio" name="sex" id="nv" />
			</p>
       	  	<p>
				<label class="uage">年&nbsp;&nbsp;龄</label>
			  	<input name="userage" id="userage"type="text"/>
            </p>
            
          <p>
       	    <label class="youpasswd">密&nbsp;&nbsp;码</label>
                 <input name="password" type="password" id="password" readonly/>
               <input type="button" id="reset_password" value="重置密码">
            </p>
            <p>
            <input id="submit" type="submit" value="修改完成"/>
            </p>
        </form>                    
	</div>
</div>
</body>
</html>
