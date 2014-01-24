  <div class="brandMain_min">
  <?php if ($this->_var['brand_list']): ?>
<div id="brandList" >
    <?php $_from = $this->_var['brand_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'brand');$this->_foreach['brand_foreach'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['brand_foreach']['total'] > 0):
    foreach ($_from AS $this->_var['brand']):
        $this->_foreach['brand_foreach']['iteration']++;
?>
	<div class="brandAd"   > 
  <ul>
  <div class="blank"></div>
  <div class="blank"></div>
   <div class="blank"></div>

  <li>
    <a href="<?php echo $this->_var['brand']['url']; ?>"><img class="brand_img" src="data/brandlogo/<?php echo $this->_var['brand']['brand_logo']; ?>" alt="<?php echo htmlspecialchars($this->_var['brand']['brand_name']); ?> (<?php echo $this->_var['brand']['goods_num']; ?>)" /></a>
 </li>
   <div class="blank"></div>
 <div class="blank"></div>
  
    <p style="padding-top:5px;"><a href="<?php echo $this->_var['brand']['url']; ?>"><?php echo htmlspecialchars($this->_var['brand']['brand_name']); ?></a>  </p>
  
	</ul>
	 </div>	 
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
   </div> 
 <?php endif; ?>   

  </div>
	
  

