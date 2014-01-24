<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<META content=IE=EmulateIE7 http-equiv=X-UA-Compatible>
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />

<title><?php echo $this->_var['page_title']; ?></title>

<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="<?php echo $this->_var['ecs_css_path']; ?>" rel="stylesheet" type="text/css" />
<link rel="alternate" type="application/rss+xml" title="RSS|<?php echo $this->_var['page_title']; ?>" href="<?php echo $this->_var['feed_url']; ?>" />
<SCRIPT type=text/javascript   src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/js/common.min.js"></script>
<SCRIPT type=text/javascript   src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/js/common.js"></script>
<SCRIPT type=text/javascript   src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/js/jquery2.js"></script>

<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,index.js')); ?>
<script src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/js/SlideTrans.js"></script>
<SCRIPT type=text/javascript>
window.pageConfig={
	compatible:true,
	navId:"home"
};
</SCRIPT>
</head>
<body >
<?php echo $this->fetch('library/page_header_index.lbi'); ?>
<?php echo $this->fetch('library/index_ad.lbi'); ?>
<div class="blank"></div>
<div class="block clearfix">
  <div class="mallRight">
    <div class="brand" >
      <h2>Hi，<span >你好</span>！你可能感兴趣的商家：</h2>
      <div class="brandMain" > 
	  
<?php echo $this->fetch('library/brands.lbi'); ?>

        <div class="brand_ad">
          <div class="brand_ad_tit"></div>
		  <div class="w">
          
<?php $this->assign('ads_id','22'); ?><?php $this->assign('ads_num','0'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>

</div>

<div class="s">
          
<?php $this->assign('ads_id','86'); ?><?php $this->assign('ads_num','0'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>

</div>
<div class="w">
		   
<?php $this->assign('ads_id','23'); ?><?php $this->assign('ads_num','0'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>

</div>

<div class="s">
		   
<?php $this->assign('ads_id','87'); ?><?php $this->assign('ads_num','0'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>

</div>
		    </div>
      </div>
    </div>
    <div class="blank"></div>
    <div class="floorAd">
	<div class="w">
	 
<?php $this->assign('ads_id','24'); ?><?php $this->assign('ads_num','1'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>
 
	  </div>
	  <div class="s">
	  	 
<?php $this->assign('ads_id','83'); ?><?php $this->assign('ads_num','1'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>
 
	    </div>
	  
	  </div>
    <div class="blank"></div>
    <div class="cat_box cat_goods_1">
      <DIV class="cat_goods  probox  ">
	   <?php echo $this->fetch('library/cat_tit1.lbi'); ?>
        <div style=" height:320px;border-bottom:1px solid #e5e5e5;">
          <div class="pinpai">
            <ul>
              <li>
			   
<?php $this->assign('ads_id','25'); ?><?php $this->assign('ads_num','1'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>

				  </li>
              <li> 
			  
<?php $this->assign('ads_id','26'); ?><?php $this->assign('ads_num','1'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>

				 </li>
              <li>
			   
<?php $this->assign('ads_id','27'); ?><?php $this->assign('ads_num','1'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>
 
				</li>
              <li> 
			  
<?php $this->assign('ads_id','28'); ?><?php $this->assign('ads_num','1'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>

				  </li>
              <li> 
			  
<?php $this->assign('ads_id','29'); ?><?php $this->assign('ads_num','1'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>

				  </li>
            </ul>
          </div>
          <?php echo $this->fetch('library/cat_1.lbi'); ?>
          <DIV class=probox_img_box  >
            <DIV  class=imgbox style="float:left" > 
			
<?php $this->assign('ads_id','43'); ?><?php $this->assign('ads_num','1'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>

			    </DIV>
            <DIV  class=imgbox style="float:left">
			 
<?php $this->assign('ads_id','44'); ?><?php $this->assign('ads_num','1'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>

			   </DIV>
            <DIV  class=imgbox style="float:left" >
			 
<?php $this->assign('ads_id','48'); ?><?php $this->assign('ads_num','1'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>
 
			  </DIV>
          </DIV>
        </div>
        <DIV  class="cat_goods_in">
		 
<?php $this->assign('cat_goods',$this->_var['cat_goods_101']); ?><?php $this->assign('goods_cat',$this->_var['goods_cat_101']); ?><?php echo $this->fetch('library/cat_goods.lbi'); ?>

          <div class="blank"></div>
        </div>
      </div>
    </div>
    <div class="blank"></div>
    <div class="cat_box cat_goods_2">
      <DIV class="cat_goods  probox ">
	   <?php echo $this->fetch('library/cat_tit2.lbi'); ?>
        <div style=" height:320px;border-bottom:1px solid #e5e5e5;">
          <div class="pinpai">
            <ul>
              <li> 
			  
<?php $this->assign('ads_id','30'); ?><?php $this->assign('ads_num','1'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>
 
				 </li>
              <li> 
			  
<?php $this->assign('ads_id','31'); ?><?php $this->assign('ads_num','1'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>

				  </li>
              <li>
			   
<?php $this->assign('ads_id','32'); ?><?php $this->assign('ads_num','1'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>
 
				 </li>
              <li>
			   
<?php $this->assign('ads_id','33'); ?><?php $this->assign('ads_num','1'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>
 
				</li>
              <li>
			   
<?php $this->assign('ads_id','34'); ?><?php $this->assign('ads_num','1'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>

				 </li>
            </ul>
          </div>
          <?php echo $this->fetch('library/cat_2.lbi'); ?>
          <DIV class=probox_img_box  >
            <DIV  class=imgbox style="float:left" >
			 
<?php $this->assign('ads_id','49'); ?><?php $this->assign('ads_num','1'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>
 
			   </DIV>
            <DIV  class=imgbox style="float:left">
			 
<?php $this->assign('ads_id','50'); ?><?php $this->assign('ads_num','1'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>

			   </DIV>
            <DIV  class=imgbox style="float:left" >
			 
<?php $this->assign('ads_id','51'); ?><?php $this->assign('ads_num','1'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>

			   </DIV>
          </DIV>
        </div>
        
<?php $this->assign('cat_goods',$this->_var['cat_goods_16']); ?><?php $this->assign('goods_cat',$this->_var['goods_cat_16']); ?><?php echo $this->fetch('library/cat_goods.lbi'); ?>

		  </div>
    </div>
    <div class="blank"></div>
    <div class="cat_box cat_goods_3">
      <DIV class="cat_goods  probox "> 
	  <?php echo $this->fetch('library/cat_tit3.lbi'); ?>
        <div style=" height:320px;border-bottom:1px solid #e5e5e5;">
          <div class="pinpai">
            <ul>
              <li> 
			  
<?php $this->assign('ads_id','35'); ?><?php $this->assign('ads_num','1'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>
 
				 </li>
              <li> 
			  
<?php $this->assign('ads_id','36'); ?><?php $this->assign('ads_num','1'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>

				 </li>
              <li>
			   
<?php $this->assign('ads_id','37'); ?><?php $this->assign('ads_num','1'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>
 
				</li>
              <li>
			   
<?php $this->assign('ads_id','38'); ?><?php $this->assign('ads_num','1'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>

				 </li>
              <li>
			   
<?php $this->assign('ads_id','39'); ?><?php $this->assign('ads_num','1'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>

				 </li>
            </ul>
          </div>
          <?php echo $this->fetch('library/cat_3.lbi'); ?>
          <DIV class=probox_img_box  >
            <DIV  class=imgbox style="float:left" > 
			
<?php $this->assign('ads_id','55'); ?><?php $this->assign('ads_num','1'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>

			   </DIV>
            <DIV  class=imgbox style="float:left">
			 
<?php $this->assign('ads_id','56'); ?><?php $this->assign('ads_num','1'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>
 
			  </DIV>
            <DIV  class=imgbox style="float:left" >
			 
<?php $this->assign('ads_id','57'); ?><?php $this->assign('ads_num','1'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>

			    </DIV>
          </DIV>
        </div>
        
<?php $this->assign('cat_goods',$this->_var['cat_goods_223']); ?><?php $this->assign('goods_cat',$this->_var['goods_cat_223']); ?><?php echo $this->fetch('library/cat_goods.lbi'); ?>

		  </div>
    </div>
    <div class="blank"></div>
    <div class="floorAd">
	<div class="w">
	 
<?php $this->assign('ads_id','81'); ?><?php $this->assign('ads_num','1'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>

	  </div>
	  <div class="s">
	 
<?php $this->assign('ads_id','84'); ?><?php $this->assign('ads_num','1'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>

	  </div>
	   </div>
    <div class="blank"></div>
    <div class="cat_box cat_goods_4">
      <DIV class="cat_goods  probox ">
	   <?php echo $this->fetch('library/cat_tit4.lbi'); ?>
        <div style=" height:320px;border-bottom:1px solid #e5e5e5;">
          <div class="pinpai">
            <ul>
              <li> 
<?php $this->assign('ads_id','58'); ?><?php $this->assign('ads_num','1'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>
 </li>
              <li> 
<?php $this->assign('ads_id','59'); ?><?php $this->assign('ads_num','1'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>
 </li>
              <li> 
<?php $this->assign('ads_id','60'); ?><?php $this->assign('ads_num','1'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>
 </li>
              <li> 
<?php $this->assign('ads_id','61'); ?><?php $this->assign('ads_num','1'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>
 </li>
              <li> 
<?php $this->assign('ads_id','62'); ?><?php $this->assign('ads_num','1'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>
 </li>
            </ul>
          </div>
          <?php echo $this->fetch('library/cat_4.lbi'); ?>
          <DIV class=probox_img_box  >
            <DIV  class=imgbox style="float:left" > 
<?php $this->assign('ads_id','66'); ?><?php $this->assign('ads_num','1'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>
 </DIV>
            <DIV  class=imgbox style="float:left"> 
<?php $this->assign('ads_id','67'); ?><?php $this->assign('ads_num','1'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>
 </DIV>
            <DIV  class=imgbox style="float:left" > 
<?php $this->assign('ads_id','68'); ?><?php $this->assign('ads_num','1'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>
 </DIV>
          </DIV>
        </div>
        
<?php $this->assign('cat_goods',$this->_var['cat_goods_216']); ?><?php $this->assign('goods_cat',$this->_var['goods_cat_216']); ?><?php echo $this->fetch('library/cat_goods.lbi'); ?>

		 </div>
    </div>
    <div class="blank"></div>
    <div class="cat_box cat_goods_5">
      <DIV class="cat_goods  probox ">
	   <?php echo $this->fetch('library/cat_tit5.lbi'); ?>
        <div style=" height:320px;border-bottom:1px solid #e5e5e5;">
          <div class="pinpai">
            <ul>
              <li> 
<?php $this->assign('ads_id','69'); ?><?php $this->assign('ads_num','1'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>
 </li>
              <li> 
<?php $this->assign('ads_id','70'); ?><?php $this->assign('ads_num','1'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>
 </li>
              <li> 
<?php $this->assign('ads_id','71'); ?><?php $this->assign('ads_num','1'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>
 </li>
              <li> 
<?php $this->assign('ads_id','72'); ?><?php $this->assign('ads_num','1'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>
 </li>
              <li> 
<?php $this->assign('ads_id','73'); ?><?php $this->assign('ads_num','1'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>
 </li>
            </ul>
          </div>
          <?php echo $this->fetch('library/cat_5.lbi'); ?>
          <DIV class=probox_img_box  >
            <DIV  class=imgbox style="float:left" >
			 
<?php $this->assign('ads_id','78'); ?><?php $this->assign('ads_num','1'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>

			    </DIV>
            <DIV  class=imgbox style="float:left">
			 
<?php $this->assign('ads_id','79'); ?><?php $this->assign('ads_num','1'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>

			   </DIV>
            <DIV  class=imgbox style="float:left" >
			 
<?php $this->assign('ads_id','80'); ?><?php $this->assign('ads_num','1'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>
 
			   </DIV>
          </DIV>
        </div>
        
<?php $this->assign('cat_goods',$this->_var['cat_goods_265']); ?><?php $this->assign('goods_cat',$this->_var['goods_cat_265']); ?><?php echo $this->fetch('library/cat_goods.lbi'); ?>

		 </div>
    </div>
    <div class="blank"></div>
    <div class="floorAd"> 
	<div class="w">
	
<?php $this->assign('ads_id','82'); ?><?php $this->assign('ads_num','1'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>
 
	   </div>
	   <div class="s">
	
<?php $this->assign('ads_id','85'); ?><?php $this->assign('ads_num','1'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>
 
	   </div>
	   </div>
    <div class="blank"></div>
    <div class="blank"></div>
    <?php echo $this->fetch('library/page_footer_index.lbi'); ?> </div>
</div>
</body>
</html>
<script src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/js/jquery.Xslider.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$("#tm_silder").Xslider({
		affect:'fade',
		ctag: 'a'
	});
});
</script>