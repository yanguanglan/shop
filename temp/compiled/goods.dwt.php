<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<head>
<meta name="Generator" content="ECSHOP v2.7.3" /><meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />

<title><?php echo $this->_var['page_title']; ?></title>

<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="themes/tmall/style.css" rel="stylesheet" type="text/css" />
 


<?php echo $this->smarty_insert_scripts(array('files'=>'common.js')); ?>
<script type="text/javascript" src="themes/tmall/js/action.js"></script>
<script type="text/javascript" src="themes/tmall/js/mzp-packed-me.js"></script><script type="text/javascript">
function $id(element) {
  return document.getElementById(element);
}
//切屏--是按钮，_v是内容平台，_h是内容库
function reg(str){
  var bt=$id(str+"_b").getElementsByTagName("h2");
  for(var i=0;i<bt.length;i++){
    bt[i].subj=str;
    bt[i].pai=i;
    bt[i].style.cursor="pointer";
    bt[i].onclick=function(){
      $id(this.subj+"_v").innerHTML=$id(this.subj+"_h").getElementsByTagName("blockquote")[this.pai].innerHTML;
      for(var j=0;j<$id(this.subj+"_b").getElementsByTagName("h2").length;j++){
        var _bt=$id(this.subj+"_b").getElementsByTagName("h2")[j];
        var ison=j==this.pai;
        _bt.className=(ison?"":"h2bg");
      }
    }
  }
  $id(str+"_h").className="none";
  $id(str+"_v").innerHTML=$id(str+"_h").getElementsByTagName("blockquote")[0].innerHTML;
}

function changeAtt(t) {
t.lastChild.checked='checked';
for (var i = 0; i<t.parentNode.childNodes.length;i++) {
        if (t.parentNode.childNodes[i].className == 'cattsel') {
            t.parentNode.childNodes[i].className = '';
        }
    }
t.className = "cattsel";
changePrice();
}
</script>
    <SCRIPT type=text/javascript>
window.pageConfig={
	compatible:true,
	navId:"home"
};
</SCRIPT>
</head>

<body>
 
<?php echo $this->fetch('library/page_header.lbi'); ?>
 
  <?php echo $this->fetch('library/ur_here.lbi'); ?>
 
  <script src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/js/jquery-1.4.2.min.js"></SCRIPT>
 

<div class="block clearfix">
<script src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/js/zoom_base.js" type=text/javascript></SCRIPT>
<div class="AreaL_goods" style="float:right">
     
<?php echo $this->fetch('library/history.lbi'); ?>
<?php echo $this->fetch('library/bought_goods.lbi'); ?>

  </div>


  <div class="AreaR_goods" style="float:left">
  
     
  
  
  
<div id="goodsInfo">
 
     <div class="imgInfo">
     <div class="imgInfo_img">
     <a href="<?php echo $this->_var['pictures']['0']['img_url']; ?>" id="zoom1" class="MagicZoom MagicThumb" title="<?php echo $this->_var['goods']['goods_style_name']; ?>">
      <img src="<?php echo $this->_var['goods']['goods_img']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods']['goods_name']); ?>" style=" width:460px;" />
     </a>
     </div>
         <div class="blank5"></div>
          <?php echo $this->fetch('library/goods_gallery.lbi'); ?>
         </div>
<div class="textInfo ">
     <form action="javascript:addToCart(<?php echo $this->_var['goods']['goods_id']; ?>)" method="post" name="ECS_FORMBUY" id="ECS_FORMBUY" >
		
   
      <ul class="ul1 clearfix" style=" padding-top:5px;" >
       <li class="clearfix"  > 
       <dd style="font-size:14px; color:#000000; font-weight:bold; padding-left:10px;">
       <?php echo $this->_var['goods']['goods_style_name']; ?>
        </dd>
       </li>  
        <?php if ($this->_var['cfg']['show_marketprice']): ?>
        <li class="clearfix">
       <dd>
      <span> 价格</span><font class="market"><?php echo $this->_var['goods']['market_price']; ?></font>
       </dd>
       </li>  
       <?php endif; ?>
           
      
      <li class="clearfix" style="padding-bottom:5px;"   > 
       <dd>
           <?php if ($this->_var['goods']['is_promote'] && $this->_var['goods']['gmt_end_time']): ?>
     
     <span style="padding-top:5px;" >促销</span><font class="shop" style="font-size:18px; line-height:160%;vertical-align: baseline;"><?php echo $this->_var['goods']['promote_price']; ?></font>   
      <?php else: ?>
  <span style="padding-top:5px;"> 促销</span><font class="shop" style="font-size:18px;line-height:160%; vertical-align: baseline;" id="ECS_SHOPPRICE"><?php echo $this->_var['goods']['shop_price_formated']; ?></font>

      <?php endif; ?>
      
      &nbsp;&nbsp; &nbsp;&nbsp;
      
      
 
         </dd>
       </li>  
       
       
        <?php if ($this->_var['cfg']['show_goodssn']): ?>
               <li class="clearfix"  > 
       <dd>
           <span> 编号</span>
          <?php echo $this->_var['goods']['goods_sn']; ?> 
         </dd>
       </li>  
          <?php endif; ?>
      
      
       
       
       
       
     
       <?php if ($this->_var['promotion']): ?>
      <li class="padd">
      <?php $_from = $this->_var['promotion']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
     <span> <?php echo $this->_var['lang']['activity']; ?></span>
      <?php if ($this->_var['item']['type'] == "snatch"): ?>
      <a href="snatch.php" title="<?php echo $this->_var['lang']['snatch']; ?>" style="font-weight:100; color:#005aa0; text-decoration:none;">[<?php echo $this->_var['lang']['snatch']; ?>]</a>
      <?php elseif ($this->_var['item']['type'] == "group_buy"): ?>
      <a href="group_buy.php" title="<?php echo $this->_var['lang']['group_buy']; ?>" style="font-weight:100; color:#005aa0; text-decoration:none;">[<?php echo $this->_var['lang']['group_buy']; ?>]</a>
      <?php elseif ($this->_var['item']['type'] == "auction"): ?>
      <a href="auction.php" title="<?php echo $this->_var['lang']['auction']; ?>" style="font-weight:100; color:#005aa0; text-decoration:none;">[<?php echo $this->_var['lang']['auction']; ?>]</a>
      <?php elseif ($this->_var['item']['type'] == "favourable"): ?>
      <a href="activity.php" title="<?php echo $this->_var['lang']['favourable']; ?>" style="font-weight:100; color:#005aa0; text-decoration:none;">[<?php echo $this->_var['lang']['favourable']; ?>]</a>
      <?php endif; ?>
      <a href="<?php echo $this->_var['item']['url']; ?>" title="<?php echo $this->_var['lang'][$this->_var['item']['type']]; ?> <?php echo $this->_var['item']['act_name']; ?><?php echo $this->_var['item']['time']; ?>" style="font-weight:100; color:#005aa0;"><?php echo $this->_var['item']['act_name']; ?></a><br />
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      </li>
      <?php endif; ?> 

       
       <?php if ($this->_var['goods']['goods_brand'] != "" && $this->_var['cfg']['show_brand']): ?>
      <li class="clearfix">
       <dd>
      
       <span>商品品牌</span><a href="<?php echo $this->_var['goods']['goods_brand_url']; ?>" ><?php echo $this->_var['goods']['goods_brand']; ?></a>
    
       </dd>
       </li>  
        <?php endif; ?>
        <?php if ($this->_var['cfg']['show_goodsweight']): ?>
       <li class="clearfix">
       <dd>
       
       <span>重量</span><?php echo $this->_var['goods']['goods_weight']; ?>
       
       </dd>
      </li>
      <?php endif; ?>  
       <?php if ($this->_var['cfg']['show_addtime']): ?>
      <li class="clearfix">
       <dd>
    
      <span>上架时间</span><?php echo $this->_var['goods']['add_time']; ?>
      
       </dd>
       </li>
       <?php endif; ?>
       <li class="clearfix">
       <dd>
     
       <span>用户评价</span> <img src="themes/tmall/images/stars<?php echo $this->_var['goods']['comment_rank']; ?>.gif" alt="comment rank <?php echo $this->_var['goods']['comment_rank']; ?>" /> 
       
       
     
       </dd>
      </li>
     
     
     
         
  
      
      
      
      
       <?php $_from = $this->_var['rank_prices']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'rank_price');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['rank_price']):
?>
         <li class="clearfix">
       <dd><span><?php echo $this->_var['rank_price']['rank_name']; ?>：</span><font class="shop" id="ECS_RANKPRICE_<?php echo $this->_var['key']; ?>"><?php echo $this->_var['rank_price']['price']; ?></font>
       </dd>
       </li>
       <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      
      

      <?php if ($this->_var['volume_price_list']): ?>
      <li class="padd" style=" height:auto">
       <font class="f1"><?php echo $this->_var['lang']['volume_price']; ?>：</font><br />
			 <table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#aad6ff">
				<tr>
					<td align="center" bgcolor="#FFFFFF"><strong><?php echo $this->_var['lang']['number_to']; ?></strong></td>
					<td align="center" bgcolor="#FFFFFF"><strong><?php echo $this->_var['lang']['preferences_price']; ?></strong></td>
				</tr>
				<?php $_from = $this->_var['volume_price_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('price_key', 'price_list');if (count($_from)):
    foreach ($_from AS $this->_var['price_key'] => $this->_var['price_list']):
?>
				<tr>
					<td align="center" bgcolor="#FFFFFF" class="shop"><?php echo $this->_var['price_list']['number']; ?></td>
					<td align="center" bgcolor="#FFFFFF" class="shop"><?php echo $this->_var['price_list']['format_price']; ?></td>
				</tr>
				<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	     </table>
      </li>
      <?php endif; ?>
      
      </ul>
 


       <ul class=" " style=" border: 1px solid #F7F5F3;background-color: #FCFAF9;border-radius: 3px; padding:10px; padding-right:0 ">
      
      

      <?php if ($this->_var['goods']['bonus_money']): ?>
      <li class="padd loop" style="margin-bottom:5px; border-bottom:1px dashed #ccc; ">
      <strong><?php echo $this->_var['lang']['goods_bonus']; ?></strong><font class="shop"><?php echo $this->_var['goods']['bonus_money']; ?></font><br />
      </li>
      <?php endif; ?>
    
      
   
       
      <?php if ($this->_var['goods']['is_shipping']): ?>
      <li style="height:30px;padding-top:4px;">
      <?php echo $this->_var['lang']['goods_free_shipping']; ?><br />
      </li>
      <?php endif; ?>
      
      <?php $_from = $this->_var['specification']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('spec_key', 'spec');if (count($_from)):
    foreach ($_from AS $this->_var['spec_key'] => $this->_var['spec']):
?>
     <li class="" style="  padding-top:5px; height:auto">
      <dd>
      <strong style="float:left; width:72px; padding-top:10px; color:#816957; font-weight:normal;"><?php echo $this->_var['spec']['name']; ?></strong>
      
      <div class="catt_r"  >
         
                    <?php if ($this->_var['spec']['attr_type'] == 1): ?>
                      <?php if ($this->_var['cfg']['goodsattr_style'] == 1): ?>
<div class="catt">
<?php $_from = $this->_var['spec']['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'value');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['value']):
?>
  <a style="color:#000; text-decoration:none" <?php if ($this->_var['key'] == 0): ?>class="cattsel"<?php endif; ?> onclick="changeAtt(this)" href="javascript:;" name="<?php echo $this->_var['value']['id']; ?>" title="[<?php if ($this->_var['value']['price'] > 0): ?><?php echo $this->_var['lang']['plus']; ?><?php elseif ($this->_var['value']['price'] < 0): ?><?php echo $this->_var['lang']['minus']; ?><?php endif; ?> <?php echo $this->_var['value']['format_price']; ?>]"><?php echo $this->_var['value']['label']; ?><input style="display:none" id="spec_value_<?php echo $this->_var['value']['id']; ?>" type="radio" name="spec_<?php echo $this->_var['spec_key']; ?>" value="<?php echo $this->_var['value']['id']; ?>" <?php if ($this->_var['key'] == 0): ?>checked<?php endif; ?> /></a>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</div>
                        <input type="hidden" name="spec_list" value="<?php echo $this->_var['key']; ?>" />
                        <?php else: ?>
                        <select name="spec_<?php echo $this->_var['spec_key']; ?>" onchange="changePrice()">
                          <?php $_from = $this->_var['spec']['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'value');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['value']):
?>
                          <option label="<?php echo $this->_var['value']['label']; ?>" value="<?php echo $this->_var['value']['id']; ?>"><?php echo $this->_var['value']['label']; ?> <?php if ($this->_var['value']['price'] > 0): ?><?php echo $this->_var['lang']['plus']; ?><?php elseif ($this->_var['value']['price'] < 0): ?><?php echo $this->_var['lang']['minus']; ?><?php endif; ?><?php if ($this->_var['value']['price'] != 0): ?><?php echo $this->_var['value']['format_price']; ?><?php endif; ?></option>
                          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                        </select>
                        <input type="hidden" name="spec_list" value="<?php echo $this->_var['key']; ?>" />
                      <?php endif; ?>
                    <?php else: ?>
                      <?php $_from = $this->_var['spec']['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'value');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['value']):
?>
                      <label for="spec_value_<?php echo $this->_var['value']['id']; ?>">
                      <input type="checkbox" name="spec_<?php echo $this->_var['spec_key']; ?>" value="<?php echo $this->_var['value']['id']; ?>" id="spec_value_<?php echo $this->_var['value']['id']; ?>" onclick="changePrice()" />
                      <?php echo $this->_var['value']['label']; ?> [<?php if ($this->_var['value']['price'] > 0): ?><?php echo $this->_var['lang']['plus']; ?><?php elseif ($this->_var['value']['price'] < 0): ?><?php echo $this->_var['lang']['minus']; ?><?php endif; ?> <?php echo $this->_var['value']['format_price']; ?>] </label>
                      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                      <input type="hidden" name="spec_list" value="<?php echo $this->_var['key']; ?>" />
                    <?php endif; ?>
  </div>
  
   </dd>
      </li>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      
      <div class="blank"></div>
      <li  style="height:auto" >
       <dd>
       <strong style="float:left; width:72px; padding-top:10px; color:#816957; font-weight:normal;">数量</strong>
       <div class="tb-amount-widget" >
        <input name="number" type="text" id="numberid" class="tb-text" value="1" size="8" title="请输入购买量" onkeyup="this.value=this.value.replace(/\D/g,'');if(this.value==0) this.value=1;" onblur="changePrice()" style=""/>
		 <span class="increase" style="width:16px;  padding:0; margin:1px 0 3px 3px ">  
         <a href="javascript:addnum('numberid')" title="增加"><img style="vertical-align:top" alt="增加图标" src="themes/tmall/images/jia.gif" /></a>
		 </span>
		  <span class="decrease" style="width:16px; padding:0; margin:1px 0 0 3px;">
		  <a href="javascript:subnum('numberid')" title="减少"><img style="vertical-align:top" alt="减少图标" src="themes/tmall/images/jian.gif" /></a>
         </span>
      </div>
         
        <SCRIPT type=text/javascript  >
 
function $(objID){
  return document.getElementById(objID);
}
 
  /*减少数量*/
function subnum(id){
  var num = parseInt($(id).value);
	num-=1;
	if(num==0) num = 1;
	$(id).value = num;
}
/*增加数量*/
function addnum(id){
  var num = parseInt($(id).value);
	num+=1;
	$(id).value = num; 
}
</SCRIPT>

<?php if ($this->_var['goods']['goods_number'] != "" && $this->_var['cfg']['show_goodsnumber']): ?>
   
     
      
        <?php if ($this->_var['goods']['goods_number'] == 0): ?>
          <span><?php echo $this->_var['lang']['goods_number']; ?></span>
          <font color='red'><?php echo $this->_var['lang']['stock_up']; ?></font>
        <?php else: ?>
          <span><?php echo $this->_var['lang']['goods_number']; ?></span>
          <?php echo $this->_var['goods']['goods_number']; ?> <?php echo $this->_var['goods']['measure_unit']; ?>
        <?php endif; ?>
     
      
      
       <?php endif; ?>
        
       </dd>
       </li>
      
        <li class="clearfix" style=" padding-top:10px; display:none">
       <dd style="color:#b94708" > 
     
        
       <?php echo $this->_var['lang']['amount']; ?><font id="ECS_GOODS_AMOUNT" class="shop"></font>
     
      
       </dd>
       </li>
      <div class="blank"></div>
           <li class="clearfix" style="height:auto">
        <div class="blank"></div> 
        	
	<div style=" position:relative; padding-left:72px;">  
  <?php if ($this->_var['goods']['rooms']): ?>
  <a href="pre.php?id=<?php echo $this->_var['goods']['goods_id']; ?>" class="yuding-btn">立刻预订</a>
  <style>
     .yuding-btn{
        display: block !important;
        display: block;
        text-align: center;
        overflow: hidden;
        font-family: "微软雅黑","黑体","宋体";
        font-weight: normal;
        cursor: pointer;
        color: #fff!important;
        height: 35px;
        line-height: 34px!important;
        font-size: 18px;
        width: 110px;
        background-color: #b10000;
        border: 1px solid #c24f00;
        text-shadow: 1px 1px #b97008;
        border-radius: 4px;
     }
  </style>
  <?php else: ?>
    <a href="javascript:addToCart1(<?php echo $this->_var['goods']['goods_id']; ?>)"><img style=" margin-right:8px;" src="themes/tmall/images/bnt_cat.gif" /></a>
    <a href="javascript:showDiv();addToCart(<?php echo $this->_var['goods']['goods_id']; ?>)"><img src="themes/tmall/images/bnt_cat2.gif" /></a>  
<?php endif; ?>
<script language="javascript" type="text/javascript"> 
function showDiv(){ 
document.getElementById('popDiv').style.display='block'; 
} 
function closeDiv(){ 
document.getElementById('popDiv').style.display='none'; 
} 
</script> 
<div id="popDiv" class="mydiv" style="display:none;">

<div style="float:left">
 <img src="themes/tmall/images/gou.gif" style=" vertical-align:middle; padding-right:10px;" /> 商品已经添加到购物车
</div>
<a href="javascript:closeDiv()"> <img style="float:right; padding-top:15px;" src="themes/tmall/images/guanbi1.gif"  /></a>
<div class="blank"></div>
 
 
<a href="flow.php"><img src="themes/tmall/images/qujiesuan.gif" style=" vertical-align:middle; padding-right:10px;" /></a>  
<a href="javascript:closeDiv()" style=" text-decoration:none; color:#666">关闭宝贝页面</a>
<div class="blank"></div>
</div> 


      <?php if ($this->_var['affiliate']['on']): ?>
     
      <?php endif; ?>
	  
	</div>  
	  
 		  
	  
   
	     
       </ul>
       
 
       
      </form>
	  <div class="blank"></div>  
	   <div class="blank5"></div>
 <?php echo $this->fetch('library/fuwuchengnuo.lbi'); ?>
  	  <div class="blank5"></div>
	    <div class="blank"></div>
	<DIV class="share" style="float:left; padding-left:10px;">
            <H4  style=" float:left; font-weight:normal; padding-top:3px; padding-right:20px; font-size:12px">爱分享</H4>
            <UL style="float:left">
              
              <div id="bdshare" class="bdshare_t bds_tools get-codes-bdshare">
			   <a class="bds_qzone"></a>
			    <a class="bds_tsina"></a>
				 <a class="bds_tqq"></a>
				  <a class="bds_renren"></a>
				   <span class="bds_more"> </span> <a class="shareCount"></a>
				    </div>
              <script type="text/javascript" id="bdshare_js" data="type=tools&amp;uid=2733582" ></script>
              <script type="text/javascript" id="bdshell_js"></script>
              <script type="text/javascript">
	document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + new Date().getHours();
</script>
              
            </UL>
			 <a   class="shoucang " style="color:#36C;"href="javascript:collect(<?php echo $this->_var['goods']['goods_id']; ?>)">收藏商品</a>  
          </DIV>
		  
     </div>          
</div>  
  
  
  
 
<div class="blank"></div>  
<div class="blank"></div>  
 
 
 
      <?php echo $this->fetch('library/goods_fittings.lbi'); ?>
 
 
   
 
<div class="blank"></div>  
<div class="blank"></div>  
 
 
  <div  id="inner" style=" width:990px; background:#FFFFFF; position:relative; z-index:999999999; ">
     <h3 class="h3_3">
        <div id="com_b" class="history clearfix">
        <h2>商品详情</h2>
       
        <?php if ($this->_var['package_goods_list']): ?>
        <h2 class="h2bg" style="color:red;"><?php echo $this->_var['lang']['remark_package']; ?></h2>
        <?php endif; ?>
           <h2 class="h2bg" >商品评价</h2>
           
             <h2 class="h2bg">服务质量</h2>
			 <h2 class="h2bg">看了又看</h2>
			 <h2 class="h2bg">售后服务</h2>
           
        </div>
      </h3>
	  </div>
	  <script type="text/javascript">
var obj11 = document.getElementById("inner");
var top11 = getTop(obj11);
var isIE6 = /msie 6/i.test(navigator.userAgent);
window.onscroll = function(){
var bodyScrollTop = document.documentElement.scrollTop || document.body.scrollTop;
if (bodyScrollTop > top11){
obj11.style.position = (isIE6) ? "absolute" : "fixed";
obj11.style.top = (isIE6) ? bodyScrollTop + "px" : "0px";
} else {
obj11.style.position = "static";
}
}
function getTop(e){
var offset = e.offsetTop;
if(e.offsetParent != null) offset += getTop(e.offsetParent);
return offset;
}
</script>
      <div id="com_v" style="   padding:12px;" ></div>
      <div id="com_h">
       <blockquote>
	   <div class="shuxin_tab " >
	    <ul >
        <?php $_from = $this->_var['properties']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'property_group');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['property_group']):
?>
        
        <?php $_from = $this->_var['property_group']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'property');if (count($_from)):
    foreach ($_from AS $this->_var['property']):
?>
       
        <li><?php echo htmlspecialchars($this->_var['property']['name']); ?>:<?php echo $this->_var['property']['value']; ?></li>
       
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		<div  style="clear:both"></div>
		 </ul>
        </div>
		<div class="blank"></div>
        <?php echo $this->_var['goods']['goods_desc']; ?>
       </blockquote>

     <blockquote>
    
     </blockquote>

     <?php if ($this->_var['package_goods_list']): ?>
     <blockquote>
       <?php $_from = $this->_var['package_goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'package_goods');if (count($_from)):
    foreach ($_from AS $this->_var['package_goods']):
?>
			  <strong><?php echo $this->_var['package_goods']['act_name']; ?></strong><br />
        <table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#dddddd">
				<tr>
					<td bgcolor="#FFFFFF">
					<?php $_from = $this->_var['package_goods']['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_list');if (count($_from)):
    foreach ($_from AS $this->_var['goods_list']):
?>
					<a href="goods.php?id=<?php echo $this->_var['goods_list']['goods_id']; ?>" target="_blank"><font class="f1"><?php echo $this->_var['goods_list']['goods_name']; ?></font></a> &nbsp;&nbsp;X <?php echo $this->_var['goods_list']['goods_number']; ?><br />
					<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
					</td>
					<td bgcolor="#FFFFFF">
					<strong><?php echo $this->_var['lang']['old_price']; ?></strong><font class="market"><?php echo $this->_var['package_goods']['subtotal']; ?></font><br />
          <strong><?php echo $this->_var['lang']['package_price']; ?></strong><font class="shop"><?php echo $this->_var['package_goods']['package_price']; ?></font><br />
          <strong><?php echo $this->_var['lang']['then_old_price']; ?></strong><font class="shop"><?php echo $this->_var['package_goods']['saving']; ?></font><br />
					</td>
					<td bgcolor="#FFFFFF">
					<a href="javascript:addPackageToCart(<?php echo $this->_var['package_goods']['act_id']; ?>)" style="background:transparent"><img src="themes/tmall/images/bnt_buy_1.gif" alt="<?php echo $this->_var['lang']['add_to_cart']; ?>" /></a>
					</td>
				</tr>
	    </table>
       <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
     </blockquote>
     <?php endif; ?>
  <blockquote>
       <?php echo $this->fetch('library/goods_gm.lbi'); ?>
  </blockquote>
    <blockquote>
  <?php echo $this->fetch('library/goods_related.lbi'); ?>
  </blockquote>
  <blockquote>
 <?php echo $this->fetch('library/goods_sh.lbi'); ?>
  </blockquote>

 </div>
      
      
        <script type="text/javascript">
    <!--
    reg("com");
    //-->
    </script>
 
      <div class="blank"></div>
      
      
      
 
      
      
      
      
	  
	   
      
      
      
      
      
	        <?php echo $this->fetch('library/comments.lbi'); ?>
      
	  
	  
      
      
      
      
     </div>
 
  

  
  
  
  
  
  
  
  
    
</div>   

  
    
    
    
    
    
<?php echo $this->fetch('library/page_footer.lbi'); ?>

</body>
<script type="text/javascript">
var goods_id = <?php echo $this->_var['goods_id']; ?>;
var goodsattr_style = <?php echo empty($this->_var['cfg']['goodsattr_style']) ? '1' : $this->_var['cfg']['goodsattr_style']; ?>;
var gmt_end_time = <?php echo empty($this->_var['promote_end_time']) ? '0' : $this->_var['promote_end_time']; ?>;
<?php $_from = $this->_var['lang']['goods_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
var goodsId = <?php echo $this->_var['goods_id']; ?>;
var now_time = <?php echo $this->_var['now_time']; ?>;


onload = function(){
  changePrice();
  fixpng();
  try {onload_leftTime();}
  catch (e) {}
}

/**
 * 点选可选属性或改变数量时修改商品价格的函数
 */
function changePrice()
{
  var attr = getSelectedAttributes(document.forms['ECS_FORMBUY']);
  var qty = document.forms['ECS_FORMBUY'].elements['number'].value;

  Ajax.call('goods.php', 'act=price&id=' + goodsId + '&attr=' + attr + '&number=' + qty, changePriceResponse, 'GET', 'JSON');
}

/**
 * 接收返回的信息
 */
function changePriceResponse(res)
{
  if (res.err_msg.length > 0)
  {
    alert(res.err_msg);
  }
  else
  {
    document.forms['ECS_FORMBUY'].elements['number'].value = res.qty;

    if (document.getElementById('ECS_GOODS_AMOUNT'))
      document.getElementById('ECS_GOODS_AMOUNT').innerHTML = res.result;
  }
}
document.getElementById('print').innerHTML=document.getElementById('source').innerHTML;

</script>
</html>

