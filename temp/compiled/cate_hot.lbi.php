<?php if ($this->_var['hot_goods']): ?>

<div class="cate_hot">
<div class="recommend-hd">商家热卖：</div>

<div  style="padding:30px 0 20px 0;">
<?php $_from = $this->_var['hot_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_92562300_1390558769');$this->_foreach['hot'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['hot']['total'] > 0):
    foreach ($_from AS $this->_var['goods_0_92562300_1390558769']):
        $this->_foreach['hot']['iteration']++;
?>
 <?php if ($this->_foreach['hot']['iteration'] < 7): ?>



<div class="item hot_item2">
      <p  class="pic"><a href="<?php echo $this->_var['goods_0_92562300_1390558769']['url']; ?>"><img style="width:160px; height:160px;margin:0 auto; float:none; text-align:center" src="<?php echo $this->_var['goods_0_92562300_1390558769']['thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods_0_92562300_1390558769']['name']); ?>"/></a></p>
      
      <div class="hot_item2_2">
      <p align="center" class="price">
    <font class="shop_s"><?php if ($this->_var['goods_0_92562300_1390558769']['promote_price'] != ""): ?><?php echo $this->_var['goods_0_92562300_1390558769']['promote_price']; ?><?php else: ?><?php echo $this->_var['goods_0_92562300_1390558769']['shop_price']; ?>
        <?php endif; ?>
        </font>
      </p>
      <p  class="name"><a href="<?php echo $this->_var['goods_0_92562300_1390558769']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods_0_92562300_1390558769']['name']); ?>"><?php echo $this->_var['goods_0_92562300_1390558769']['short_style_name']; ?><span><?php echo $this->_var['goods_0_92562300_1390558769']['brief']; ?></span></a></p>       
      </div>
      
      
     </div>
     <?php endif; ?>
 <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</div>  


</div>

<div class="blank"></div>



<?php endif; ?>