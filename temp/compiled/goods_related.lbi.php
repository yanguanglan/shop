<?php if ($this->_var['related_goods']): ?>
      <div class="clearfix">
      <?php $_from = $this->_var['related_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'releated_goods_data');if (count($_from)):
    foreach ($_from AS $this->_var['releated_goods_data']):
?>
        <div class="goodsItem3" >
          <a href="<?php echo $this->_var['releated_goods_data']['url']; ?>"><img src="<?php echo $this->_var['releated_goods_data']['goods_thumb']; ?>" alt="<?php echo $this->_var['releated_goods_data']['goods_name']; ?>"   /></a> 
           
       
        <?php if ($this->_var['releated_goods_data']['promote_price'] != 0): ?>
       <div class="ald-wf-em "><font class="ui-price"><?php echo $this->_var['releated_goods_data']['formated_promote_price']; ?></font></div>
        <?php else: ?>
        <div class="ald-wf-em "><font class="ui-price"><?php echo $this->_var['releated_goods_data']['shop_price']; ?></font></div>
        <?php endif; ?>
         
     </div>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      </div>
    
<div class="blank5"></div>
<?php endif; ?>
