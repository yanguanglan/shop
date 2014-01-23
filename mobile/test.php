  <!DOCTYPE html>
  <html class="ks-presto2 ks-presto ks-opera12 ks-opera">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
      <meta name="apple-mobile-web-app-capable" content="yes">
      <meta name="apple-mobile-web-app-status-bar-style" content="black">
      <meta name="twcClient" content="false" id="twcClient">
      <meta name="description" content="">
      <meta name="keywords" content="">
      <title>天猫触屏版-棉衣女 冬装外套 韩版女装2013欧版大牌新款棉服馨予可中长款棉衣</title>
      <link href="http://a.tbcdn.cn/p/mall/base/favicon2.ico" rel="shortcut icon" type="image/x-icon">
      <link rel="apple-touch-icon-precomposed" href="http://a.tbcdn.cn/mw/s/hi/tbtouch/images/touch-icon.png">
      <link rel="stylesheet" href="http://g.tbcdn.cn/tm/detail-m/1.2.1/css/detail.css">
      <style type="text/css"> @-o-viewport {width:device-width; zoom:1; min-zoom:1; max-zoom:2; user-zoom:zoom;} @viewport {width:device-width; zoom:1; min-zoom:1; max-zoom:2; user-zoom:zoom;}
</style>
      
      <link rel="stylesheet" charset="utf-8" href="http://g.tbcdn.cn/tm/detail-m/1.2.1/css/taoplus2.css?t=25428404358.css">
    </head>
    <body id="app-detail">
      
      <header class="s-header">
        <nav>
          <h1>商品详情页</h1>
          <a href="#" class="back">返回</a>
          <label for="header-search-input" class="more">更多</label>
        </nav>
        <div class="finder">
          <form action="http://s.m.tmall.com/search.htm" method="get" name="wapSearchForm" class="search" accept-charset="utf-8">
            <input name="q" type="search" id="header-search-input" placeholder="搜索 天猫 商品" autocomplete="off">
            <button type="submit"></button>
            <button type="reset"></button>
            <button class="close">取消</button>
          </form>
          <div class="ui-suggest"></div>
        </div>
      </header>
      <section class="s-slider ui-slider">
        <div class="scroller" style="transition-property: transform; transition-timing-function: cubic-bezier(0, 0, 0.25, 1); transform: translate(0px, 0); transition-duration: 0.35s">
          <div>
            <img src="http://q.i04.wimg.taobao.com/bao/uploaded/i4/18686030860994255/T1RY8bFq4eXXXXXXXX_!!0-item_pic.jpg_640x640q75.jpg" alt="">
          </div>
          <div>
            <img data-src="http://q.i04.wimg.taobao.com/bao/uploaded/i2/743838686/T2KziLXE0XXXXXXXXX_!!743838686.jpg_640x640q75.jpg" alt="">
          </div>
          <div>
            <img data-src="http://q.i03.wimg.taobao.com/bao/uploaded/i3/743838686/T2ohGPXq0XXXXXXXXX_!!743838686.jpg_640x640q75.jpg" alt="">
          </div>
          <div>
            <img data-src="http://q.i02.wimg.taobao.com/bao/uploaded/i4/743838686/T2pJqOXw0XXXXXXXXX_!!743838686.jpg_640x640q75.jpg" alt="">
          </div>
          <div>
            <img data-src="http://q.i03.wimg.taobao.com/bao/uploaded/i2/743838686/T2F1N1XyNaXXXXXXXX_!!743838686.jpg_640x640q75.jpg" alt="">
          </div>
        </div>
        <div class="icons">
          <i class="current"></i>
          <i></i>
          <i></i>
          <i></i>
          <i></i>
        </div>
      </section>
      <input type="hidden" id="redirectClientFlag" value="1">
      <script type="text/tpl" id="tpl-review">
 {@each items as item}
 &lt;li>
 &lt;blockquote>${item.text}&lt;/blockquote>
 &lt;p class="property">$${item.deal}&lt;/p>
 &lt;div class="other">
 &lt;span class="user">${item.buyer}&lt;/span>
 &lt;time>${item.date}&lt;/time>
 &lt;/div>
 &lt;/li>
 {@/each}
</script>
      <script type="text/tpl" id="tpl-service">
 {@each list as item}
 {@if item.uniqueServices.length}
 {@each item.uniqueServices as unique}
 &lt;input{@if unique.free &amp;&amp; unique.autoSelect} readonly="readonly"{@/if} type="radio" value="${unique.id}" name="${item.id}" id="s${unique.uniqueId}"{@if unique.autoSelect} checked="checked"{@/if}>&lt;label for="s${unique.uniqueId}">$${unique.fullName}&lt;/label>
 {@/each}
 {@else}
 &lt;input{@if item.free &amp;&amp; item.autoSelect} readonly="readonly"{@/if} type="{@if isHouse}radio{@else}checkbox{@/if}" value="${item.id}" name="{@if isHouse}house{@else}${item.id}{@/if}" id="s${item.id}"{@if item.autoSelect} checked="checked"{@/if}>&lt;label for="s${item.id}">$${item.fullName}&lt;/label>
 {@/if}
 {@/each}
</script>
      <script type="text/tpl" id="tpl-error">
 &lt;div class="ui-error">${msg}&lt;/div>
</script>
      <script charset="utf-8" src="http://g.tbcdn.cn/??kissy/k/1.4.0/seed-min.js,mtb/lib-mtop/0.4.6/mtop_all.js,tm/detail-m/1.2.1/js/base.js,tm/detail-m/1.2.1/js/detail.js "></script>

    </body>
  </html>