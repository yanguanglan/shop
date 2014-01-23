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
      <h2>Hi，<span >你好</span>！你可能感兴趣的品牌：</h2>
      <div class="brandMain" > 
	  
<?php echo $this->fetch('library/brands.lbi'); ?>

        <div class="brand_ad">
          <div class="brand_ad_tit"></div>
		  <div class="w">
          
<?php echo $this->fetch('library/ad_position.lbi'); ?>

</div>

<div class="s">
          
<?php echo $this->fetch('library/ad_position.lbi'); ?>

</div>
<div class="w">
		   
<?php echo $this->fetch('library/ad_position.lbi'); ?>

</div>

<div class="s">
		   
<?php echo $this->fetch('library/ad_position.lbi'); ?>

</div>
		    </div>
      </div>
    </div>
    <div class="blank"></div>
    <div class="floorAd">
	<div class="w">
	 
<?php echo $this->fetch('library/ad_position.lbi'); ?>
 
	  </div>
	  <div class="s">
	  	 
<?php echo $this->fetch('library/ad_position.lbi'); ?>
 
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
			   
<?php echo $this->fetch('library/ad_position.lbi'); ?>

				  </li>
              <li> 
			  
<?php echo $this->fetch('library/ad_position.lbi'); ?>

				 </li>
              <li>
			   
<?php echo $this->fetch('library/ad_position.lbi'); ?>
 
				</li>
              <li> 
			  
<?php echo $this->fetch('library/ad_position.lbi'); ?>

				  </li>
              <li> 
			  
<?php echo $this->fetch('library/ad_position.lbi'); ?>

				  </li>
            </ul>
          </div>
          <?php echo $this->fetch('library/cat_1.lbi'); ?>
          <DIV class=probox_img_box  >
            <DIV  class=imgbox style="float:left" > 
			
<?php echo $this->fetch('library/ad_position.lbi'); ?>

			    </DIV>
            <DIV  class=imgbox style="float:left">
			 
<?php echo $this->fetch('library/ad_position.lbi'); ?>

			   </DIV>
            <DIV  class=imgbox style="float:left" >
			 
<?php echo $this->fetch('library/ad_position.lbi'); ?>
 
			  </DIV>
          </DIV>
        </div>
        <DIV  class="cat_goods_in">
		 
<?php echo $this->fetch('library/cat_goods.lbi'); ?>

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
			  
<?php echo $this->fetch('library/ad_position.lbi'); ?>
 
				 </li>
              <li> 
			  
<?php echo $this->fetch('library/ad_position.lbi'); ?>

				  </li>
              <li>
			   
<?php echo $this->fetch('library/ad_position.lbi'); ?>
 
				 </li>
              <li>
			   
<?php echo $this->fetch('library/ad_position.lbi'); ?>
 
				</li>
              <li>
			   
<?php echo $this->fetch('library/ad_position.lbi'); ?>

				 </li>
            </ul>
          </div>
          <?php echo $this->fetch('library/cat_2.lbi'); ?>
          <DIV class=probox_img_box  >
            <DIV  class=imgbox style="float:left" >
			 
<?php echo $this->fetch('library/ad_position.lbi'); ?>
 
			   </DIV>
            <DIV  class=imgbox style="float:left">
			 
<?php echo $this->fetch('library/ad_position.lbi'); ?>

			   </DIV>
            <DIV  class=imgbox style="float:left" >
			 
<?php echo $this->fetch('library/ad_position.lbi'); ?>

			   </DIV>
          </DIV>
        </div>
        
<?php echo $this->fetch('library/cat_goods.lbi'); ?>

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
			  
<?php echo $this->fetch('library/ad_position.lbi'); ?>
 
				 </li>
              <li> 
			  
<?php echo $this->fetch('library/ad_position.lbi'); ?>

				 </li>
              <li>
			   
<?php echo $this->fetch('library/ad_position.lbi'); ?>
 
				</li>
              <li>
			   
<?php echo $this->fetch('library/ad_position.lbi'); ?>

				 </li>
              <li>
			   
<?php echo $this->fetch('library/ad_position.lbi'); ?>

				 </li>
            </ul>
          </div>
          <?php echo $this->fetch('library/cat_3.lbi'); ?>
          <DIV class=probox_img_box  >
            <DIV  class=imgbox style="float:left" > 
			
<?php echo $this->fetch('library/ad_position.lbi'); ?>

			   </DIV>
            <DIV  class=imgbox style="float:left">
			 
<?php echo $this->fetch('library/ad_position.lbi'); ?>
 
			  </DIV>
            <DIV  class=imgbox style="float:left" >
			 
<?php echo $this->fetch('library/ad_position.lbi'); ?>

			    </DIV>
          </DIV>
        </div>
        
<?php echo $this->fetch('library/cat_goods.lbi'); ?>

		  </div>
    </div>
    <div class="blank"></div>
    <div class="floorAd">
	<div class="w">
	 
<?php echo $this->fetch('library/ad_position.lbi'); ?>

	  </div>
	  <div class="s">
	 
<?php echo $this->fetch('library/ad_position.lbi'); ?>

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
<?php echo $this->fetch('library/ad_position.lbi'); ?>
 </li>
              <li> 
<?php echo $this->fetch('library/ad_position.lbi'); ?>
 </li>
              <li> 
<?php echo $this->fetch('library/ad_position.lbi'); ?>
 </li>
              <li> 
<?php echo $this->fetch('library/ad_position.lbi'); ?>
 </li>
              <li> 
<?php echo $this->fetch('library/ad_position.lbi'); ?>
 </li>
            </ul>
          </div>
          <?php echo $this->fetch('library/cat_4.lbi'); ?>
          <DIV class=probox_img_box  >
            <DIV  class=imgbox style="float:left" > 
<?php echo $this->fetch('library/ad_position.lbi'); ?>
 </DIV>
            <DIV  class=imgbox style="float:left"> 
<?php echo $this->fetch('library/ad_position.lbi'); ?>
 </DIV>
            <DIV  class=imgbox style="float:left" > 
<?php echo $this->fetch('library/ad_position.lbi'); ?>
 </DIV>
          </DIV>
        </div>
        
<?php echo $this->fetch('library/cat_goods.lbi'); ?>

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
<?php echo $this->fetch('library/ad_position.lbi'); ?>
 </li>
              <li> 
<?php echo $this->fetch('library/ad_position.lbi'); ?>
 </li>
              <li> 
<?php echo $this->fetch('library/ad_position.lbi'); ?>
 </li>
              <li> 
<?php echo $this->fetch('library/ad_position.lbi'); ?>
 </li>
              <li> 
<?php echo $this->fetch('library/ad_position.lbi'); ?>
 </li>
            </ul>
          </div>
          <?php echo $this->fetch('library/cat_5.lbi'); ?>
          <DIV class=probox_img_box  >
            <DIV  class=imgbox style="float:left" >
			 
<?php echo $this->fetch('library/ad_position.lbi'); ?>

			    </DIV>
            <DIV  class=imgbox style="float:left">
			 
<?php echo $this->fetch('library/ad_position.lbi'); ?>

			   </DIV>
            <DIV  class=imgbox style="float:left" >
			 
<?php echo $this->fetch('library/ad_position.lbi'); ?>
 
			   </DIV>
          </DIV>
        </div>
        
<?php echo $this->fetch('library/cat_goods.lbi'); ?>

		 </div>
    </div>
    <div class="blank"></div>
    <div class="floorAd"> 
	<div class="w">
	
<?php echo $this->fetch('library/ad_position.lbi'); ?>
 
	   </div>
	   <div class="s">
	
<?php echo $this->fetch('library/ad_position.lbi'); ?>
 
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