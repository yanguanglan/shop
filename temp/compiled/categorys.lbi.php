<?php if ($this->_var['cat_list']): ?>
<div class="box">
 <div class="box_1">
  <div id="category_tree">
    <?php $_from = $this->_var['cat_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat_0_56570800_1390371768');if (count($_from)):
    foreach ($_from AS $this->_var['cat_0_56570800_1390371768']):
?>
     <dl>
     <dt><a href="<?php echo $this->_var['cat_0_56570800_1390371768']['url']; ?>"><?php echo htmlspecialchars($this->_var['cat_0_56570800_1390371768']['cat_name']); ?> <?php if ($this->_var['cat_0_56570800_1390371768']['goods_num']): ?>(<?php echo $this->_var['cat_0_56570800_1390371768']['goods_num']; ?>)<?php endif; ?></a></dt>
     </dl>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
  </div>
 </div>
</div>
<div class="blank5"></div>
<?php endif; ?>