 
 

<UL id=hot_xiangshui class=porboxul>
      <?php $_from = $this->_var['cat_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['cat_goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['cat_goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['cat_goods']['iteration']++;
?>
	  
      <LI class="porboxul_li" onmouseover="this.className='porboxul_li porboxul_li_on'" onmouseout="this.className='porboxul_li'" >
    <DL>
    <DT><a href="<?php echo $this->_var['goods']['url']; ?>"><IMG  alt="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>"  src="<?php echo $this->_var['goods']['thumb']; ?>" class="goodsimg"></A> </DT>
	<DD class=pf_price> 
	
	<SPAN class=" ll" ><?php if ($this->_var['goods']['promote_price'] != ""): ?><?php echo $this->_var['goods']['promote_price']; ?><?php else: ?><?php echo $this->_var['goods']['shop_price']; ?><?php endif; ?></SPAN> 
	<SPAN  class=" rr" ><s><?php echo $this->_var['goods']['market_price']; ?></s></SPAN>
    </DD>
	<DD class=title><a href="<?php echo $this->_var['goods']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>"><?php echo htmlspecialchars($this->_var['goods']['short_name']); ?></a></DD>
    
	
 
    </DL> 
</LI>

      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	 
   
     </ul>
  
  
  