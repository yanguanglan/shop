<script src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/js/transport.js"></script>
<script src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/js/common.js"></script>
<script src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/js/js.js"></script>
<script type="text/javascript">
var process_request = "<?php echo $this->_var['lang']['process_request']; ?>";
</script>





<div class="header">
<div class="block" style=" height:93px; position:relative ">
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
   

 
<div style="position:absolute; left:0px; top:45px;"><a href="index.php"><img src="themes/tmall/images/logo_flow.gif" width="191" height="30" /></a></div>
 

 </div>
 </div>


 

 