<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<HEAD>
<META content="IE=7.0000" http-equiv="X-UA-Compatible">
<TITLE>{$page_title} 触屏版</TITLE>
<META content="text/html; charset=utf-8" http-equiv=Content-Type>
<META name=viewport 
content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<META name=apple-themes-web-app-capable content=yes>
<META name=apple-themes-web-app-status-bar-style content=black>
<META name=format-detection content=telephone=no>
<LINK rel=apple-touch-icon-precomposed href="themes/default/images/touch-icon.png">
<LINK rel="shortcut icon" type=image/x-icon href="themes/default/images/favicon2.ico">
<LINK rel=stylesheet type=text/css href="themes/default/index.css">
</HEAD>
<BODY>
<DIV id=content class=tmall-h5-v2> 
    <HEADER class=region>
     <!--搜索区域-->
      <DIV id=fake-search>
        <DIV class=fakeInput>
          <BUTTON style="COLOR: silver" class=text>搜本站商品</BUTTON>
        </DIV>
      </DIV>
    </DIV>
  </HEADER>
  <!--搜索弹出框-->
  <DIV id=main-search class=main-search>
    <DIV class=hd> <SPAN class=close>关闭</SPAN> </DIV>
    <DIV class=bd>
      <DIV class=kwd>
        <form id="searchForm" name="searchForm" method="get" action="search.php" onSubmit="return checkSearchForm()" >
          <DIV class=content>
            <INPUT class=text type=search  name="keywords"   id="keyword" >
            <SPAN class=clear>清除</SPAN>
            <INPUT class=sub value=搜索 type=submit>
          </DIV>
        </FORM>
      </DIV>
      <!--<DIV class="result hidden"></DIV>-->
      <P class="clear-history hidden"><A href="#">清除历史记录</A></P>
    </DIV>
  </DIV>
<SCRIPT src="themes/default/js/sea.js"></SCRIPT> 
<SCRIPT>
    seajs.use("http://a.tbcdn.cn/apps/tmm/s/hi/tmall/h5v2/js/index.js?v=2516761719_465");
</SCRIPT>
</BODY>
</HTML>