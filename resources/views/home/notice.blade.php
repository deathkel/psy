<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>奇幻小说网-我的通知</title>
<link rel="icon" href="../img/icon.png" />
<link href="../css/notice.css" rel="stylesheet" type="text/css">
<script src="../js/notice_SpryTabbedPanels.js" type="text/javascript"></script>
</head>

<body>
<div id="noticelist1" class="noticelist">
  		<ul class="noticelistTabGroup">
    		<li class="noticelistTab" tabindex="0">收到评论</li>
    		<li class="noticelistTab" tabindex="0">收到回复</li>
  		</ul>
  		<div class="tongzhiGroup">
    		<div class="tongzhi">
            	<ul>
                	<li id="li1">
                    	<div class="txt">
                        	<span id="user">发评论的用户名</span>评论了我的作品《<span id="title"><a href="作品" target="_blank">标题</a></span>》：
                        </div>
                        <div class="txt">
                        	<span id="comments">这里是评论内容这里是评论内容。</span>
                        </div>
                        <div class="button">
                        	<input type="button" value="回复" onClick="a()"/>
                            <input type="button" value="已阅关闭"/>
                        </div>
                        <div class="huifu" id="huifu">
                          <textarea name="msg_input" cols="40" rows="10"></textarea>
                          <div class="button">
                          	<input type="submit" value="确定"/>
                            <input type="button" value="取消" onClick="b()"/>
                          </div>
                        </div>
        			</li>
                </ul>
            </div>
    		<div class="tongzhi">
            	<ul>
            		<li>
                    	<div class="txt">
                        	<span id="user">发评论的用户名</span>回复了我对作品《<span id="title"><a href="作品" target="_blank">标题</a></span>》的评论：
                        </div>
                        <div class="txt">
                        	<span id="message">这里是回复内容这里是回复内容。</span>
                        </div>
                         <div class="button">
                        	<input type="button" value="回复" onClick="c()"/>
                            <input type="button" value="已阅关闭"/>
                        </div>
                        <div class="huifu1" id="huifu1">
                          <textarea name="msg_input" cols="40" rows="10"></textarea>
                          <div class="button">
                          	<input type="submit" value="确定"/>
                            <input type="button" value="取消" onClick="d()"/>
                          </div>
                        </div>
        			</li>
                </ul>
            </div>
  		</div>
	</div>
	<script type="text/javascript" src="../js/notice.js"></script>
	<script type="text/javascript">
var noticelist1 = new Spry.Widget.noticelist("noticelist1");
	</script>
</body>
</html>
