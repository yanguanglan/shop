<style type="text/css">
<!--
.STYLE1 {color: #CC6600}
-->
</style>
 
<div class="userMenu">
<h3><a href="user.php">会员中心</a></h3>
<div id="cate">
		<h1 onclick="tab(0)">
        <span>
		 订单中心
        </span>  
		 
         <img src="themes/tmall/images/user_up.gif"  >
    
		</h1>
		<ul style="display:block">
      <a href="user.php?act=order_list"<?php if ($this->_var['action'] == 'order_list' || $this->_var['action'] == 'order_detail'): ?>class="curs"<?php endif; ?>> <?php echo $this->_var['lang']['label_order']; ?></a>
      <a href="user.php?act=pre_list"<?php if ($this->_var['action'] == 'pre_list'): ?> class="curs"<?php endif; ?>> 我的预定订单</a>
      <a href="user.php?act=address_list"<?php if ($this->_var['action'] == 'address_list'): ?>class="curs"<?php endif; ?>><?php echo $this->_var['lang']['label_address']; ?></a>
       
<a href="user.php?act=booking_list"<?php if ($this->_var['action'] == 'booking_list'): ?>class="curs"<?php endif; ?>> <?php echo $this->_var['lang']['label_booking']; ?></a>
		</ul>
		<div style="clear:both"></div>
        
        
        	<h1 onclick="tab(1)">
            <span>
		会员中心
          </span>  
	   <img src="themes/tmall/images/user_up.gif"  >
		</h1>
		<ul style="display:block">
		 
<a href="user.php?act=profile"<?php if ($this->_var['action'] == 'profile'): ?>class="curs"<?php endif; ?>>  <?php echo $this->_var['lang']['label_profile']; ?></a>
 
<a href="user.php?act=collection_list"<?php if ($this->_var['action'] == 'collection_list'): ?>class="curs"<?php endif; ?>> <?php echo $this->_var['lang']['label_collection']; ?></a>

<a href="user.php?act=message_list"<?php if ($this->_var['action'] == 'message_list'): ?>class="curs"<?php endif; ?>> <?php echo $this->_var['lang']['label_message']; ?></a>

 
<a href="user.php?act=tag_list"<?php if ($this->_var['action'] == 'tag_list'): ?>class="curs"<?php endif; ?>><?php echo $this->_var['lang']['label_tag']; ?></a>

<?php if ($this->_var['affiliate']['on'] == 1): ?><a href="user.php?act=affiliate"<?php if ($this->_var['action'] == 'affiliate'): ?>class="curs"<?php endif; ?>>  <?php echo $this->_var['lang']['label_affiliate']; ?></a><?php endif; ?>

<a href="user.php?act=comment_list"<?php if ($this->_var['action'] == 'comment_list'): ?>class="curs"<?php endif; ?>> <?php echo $this->_var['lang']['label_comment']; ?></a>
		</ul>
		<div style="clear:both"></div>
        
        
        
        	<h1 onclick="tab(2)">
       <span>
账户中心
      </span>
		   <img src="themes/tmall/images/user_up.gif"  >
		</h1>
		<ul style="display:block">
		<a href="user.php?act=bonus"<?php if ($this->_var['action'] == 'bonus'): ?>class="curs"<?php endif; ?>><?php echo $this->_var['lang']['label_bonus']; ?></a>
        <!--<a href="user.php?act=group_buy"><?php echo $this->_var['lang']['label_group_buy']; ?></a>-->
<a href="user.php?act=track_packages"<?php if ($this->_var['action'] == 'track_packages'): ?>class="curs"<?php endif; ?>> <?php echo $this->_var['lang']['label_track_packages']; ?></a>
<a href="user.php?act=account_log"<?php if ($this->_var['action'] == 'account_log'): ?>class="curs"<?php endif; ?>> <?php echo $this->_var['lang']['label_user_surplus']; ?></a>
<?php if ($this->_var['show_transform_points']): ?>
<a href="user.php?act=transform_points"<?php if ($this->_var['action'] == 'transform_points'): ?>class="curs"<?php endif; ?>><?php echo $this->_var['lang']['label_transform_points']; ?></a>
<?php endif; ?>
		</ul>

</div>
  
  
 
</div>

 
	 
 
	 
 


<script type="text/javascript">
obj_h4 = document.getElementById("cate").getElementsByTagName("h4")
obj_ul = document.getElementById("cate").getElementsByTagName("ul")
obj_img = document.getElementById("cate").getElementsByTagName("img")
function tab(id)
{ 
		if(obj_ul.item(id).style.display == "block")
		{
			obj_ul.item(id).style.display = "none"
			obj_img.item(id).src = "themes/tmall/images/user_down.gif"
			return false;
		}
		else(obj_ul.item(id).style.display == "none")
		{
			obj_ul.item(id).style.display = "block"
			obj_img.item(id).src = "themes/tmall/images/user_up.gif"
		}
}
</script>