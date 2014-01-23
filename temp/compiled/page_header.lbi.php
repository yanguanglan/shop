
<script src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/js/jquery.js"></script>
<?php if ($this->_var['goods']['rooms']): ?>
  <script src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/js/transport1.js"></script>
<?php else: ?>
  <script src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/js/transport.js"></script>
<?php endif; ?>
<script type="text/javascript">
var process_request = "<?php echo $this->_var['lang']['process_request']; ?>";
</script>
<div class="header">
<div class="lei_main11"  id="headClassDiv" onmouseover="cate_over()" onmouseout="cate_out()" style="display:none; position:absolute;top:28px; left:0px; z-index:999999999; width:100% " onmouseout="headClassImg_MouseOut();" onmouseover="headClassImg_MouseOver();">



<div class="block lei_main1" >
<a class="mcate_logo"  href="index.php" > </a>
<ul class="mcate-ctn">
 <?php $_from = $this->_var['categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');$this->_foreach['categories_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['categories_list']['total'] > 0):
    foreach ($_from AS $this->_var['cat']):
        $this->_foreach['categories_list']['iteration']++;
?>
  <li >
    <h4 class="mcate-item-hd">
    <a href="<?php echo $this->_var['cat']['url']; ?>"><?php echo htmlspecialchars($this->_var['cat']['name']); ?></a></h4>
    <p class="mcate-item-bd">
         <?php $_from = $this->_var['cat']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child');if (count($_from)):
    foreach ($_from AS $this->_var['child']):
?>
        <a href="<?php echo $this->_var['child']['url']; ?>" target="_blank"><?php echo htmlspecialchars($this->_var['child']['name']); ?></a>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      </p>
    
    </li>
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
  </ul>   
</div>
</div>
	<div class="block" style=" height:93px; position:relative; z-index:9999;">
	
 <a onmouseover="cate_over()" onmouseout="cate_out()" style="cursor:pointer; float:right;" id="cate_all" >所有商品分类 </a>


 


      <div class="topNav ">
        
           
		   <div class="f_r">
               <a style="cursor: pointer"  onClick="window.external.AddFavorite(location.href,document.title);">收藏本站</a> | 
               <a href="http://www.ecmoban.com">ecshop模板堂</a>   
			   
           </div>
           <div class="buy_car_bg f_r " id="ECS_CARTINFO" > 
            <a   href="flow.php"><?php 
$k = array (
  'name' => 'cart_info',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?></a>


             </div>
		   <div class="f_r log">
  <ul class="ul1" onmouseover="this.className='ul1 ul1_on'" onmouseout="this.className='ul1'">
 <a class="a1" href="user.php">我的账户</a>
  <div class="ul1_float">
  <ul> 
     <a href="user.php?act=order_list">我的订单</a>
     <a href="user.php?act=collection_list">我的收藏</a>
     <a href="user.php?act=profile">用户信息</a>
     <a href="user.php?act=address_list">收货地址</a>    
 </ul>    
  </div>
    <div class="dang"></div>
 </ul>
 </div>
           <div class="f_r" style=" margin-top:0;_margin-top:7px;">
              <?php echo $this->smarty_insert_scripts(array('files'=>'utils.js')); ?>
               <font id="ECS_MEMBERZONE"><?php 
$k = array (
  'name' => 'member_info',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?> </font>
                  <?php if ($this->_var['navigator_list']['top']): ?>
                  <?php $_from = $this->_var['navigator_list']['top']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav');$this->_foreach['nav_top_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_top_list']['total'] > 0):
    foreach ($_from AS $this->_var['nav']):
        $this->_foreach['nav_top_list']['iteration']++;
?>  
                  <a href="<?php echo $this->_var['nav']['url']; ?>" <?php if ($this->_var['nav']['opennew'] == 1): ?> target="_blank" <?php endif; ?>><?php echo $this->_var['nav']['name']; ?></a>
                  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> <?php endif; ?>
          </div>

		 
 

         </div>
		 
   
<div style="position:absolute; left:0px; top:14px;"><a href="index.php"><img src="themes/tmall/images/logo.gif" width="301" height="75" /></a></div>
 
<div id="search"  style="position:absolute; right:0px; bottom:17px;">
   
  <form id="searchForm" name="searchForm" method="get" action="search.php" onSubmit="return checkSearchForm()"  >
  <div class="B_input_box">
   <input name="keywords" type="text" id="keyword" value="搜索  商品" onclick="javascript:this.value=''" class="B_input"/>
   </div>
   <input name="imageField" type="submit" value="" class="go" style="cursor:pointer;" />
  
   </form>
   
</div>
 </div>
 </div>
 <script src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/js/HeadAnimation.js"></script>