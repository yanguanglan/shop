 
 <div class="globalGoodsListMenu">
       <b><?php echo $this->_var['lang']['goods_list']; ?></b>
      <form method="GET" class="sort" name="listform">
     <span style="float: right; margin-top:-30px;" >
                  <span class="globalGoodsListMenuDisplay">
               <?php echo $this->_var['lang']['btn_display']; ?>：  <a href="javascript:;" onclick="javascript:display_mode('list')"><img src="themes/tmall/images/btn_display_mode_list<?php if ($this->_var['pager']['display'] == 'list'): ?>_act<?php endif; ?>.gif" alt="<?php echo $this->_var['lang']['display']['list']; ?>" /></a> <a href="javascript:;" onClick="javascript:display_mode('grid')"><img src="themes/tmall/images/btn_display_mode_grid<?php if ($this->_var['pager']['display'] == 'grid'): ?>_act<?php endif; ?>.gif" alt="<?php echo $this->_var['lang']['display']['grid']; ?>" /></a>
             </span>
                <select name="sort">
              <?php echo $this->html_options(array('options'=>$this->_var['lang']['sort'],'selected'=>$this->_var['pager']['search']['sort'])); ?>
              </select>
              <select name="order">
              <?php echo $this->html_options(array('options'=>$this->_var['lang']['order'],'selected'=>$this->_var['pager']['search']['order'])); ?>
              </select>
             <input type="image" name="imageField" src="themes/tmall/images/btn_submit.gif" />
              <input type="hidden" name="page" value="<?php echo $this->_var['pager']['page']; ?>" />
              <input type="hidden" name="display" value="<?php echo $this->_var['pager']['display']; ?>" id="display" />
              <?php $_from = $this->_var['pager']['search']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
              <?php if ($this->_var['key'] != "sort" && $this->_var['key'] != "order"): ?>
                <?php if ($this->_var['key'] == 'keywords'): ?>
                  <input type="hidden" name="<?php echo $this->_var['key']; ?>" value="<?php echo urldecode($this->_var['item']); ?>" />
                <?php else: ?>
                  <input type="hidden" name="<?php echo $this->_var['key']; ?>" value="<?php echo $this->_var['item']; ?>" />
                <?php endif; ?>
              <?php endif; ?>
              <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
              </span>
      </form>
    </div>

    <form name="compareForm" method="post">
    <?php if ($this->_var['pager']['display'] == 'list'): ?>
      <div class="goodsList">
      <?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['goods_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['goods_list']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['goods_list']['iteration']++;
?>
        <ul class="clearfix bgcolor"<?php if (($this->_foreach['goods_list']['iteration'] - 1) % 2 == 0): ?>id=""<?php else: ?>id="bgcolor"<?php endif; ?>>
          <li class="thumb"><a href="<?php echo $this->_var['goods']['url']; ?>"><img src="<?php echo $this->_var['goods']['goods_thumb']; ?>" alt="<?php echo $this->_var['goods']['goods_name']; ?>" /></a></li>
          <li class="goodsName">
            <a href="<?php echo $this->_var['goods']['url']; ?>" class="f6">
            <?php if ($this->_var['goods']['goods_style_name']): ?>
              <?php echo $this->_var['goods']['goods_style_name']; ?><br />
            <?php else: ?>
              <?php echo $this->_var['goods']['goods_name']; ?><br />
            <?php endif; ?>
            </a>
            <?php if ($this->_var['goods']['goods_brief']): ?>
              <?php echo $this->_var['lang']['goods_brief']; ?><?php echo $this->_var['goods']['goods_brief']; ?><br />
            <?php endif; ?>
          </li>
          <li>
            <?php echo $this->_var['lang']['exchange_integral']; ?><font class="shop_s"><?php echo $this->_var['goods']['exchange_integral']; ?></font>
          </li>
        </ul>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      </div>

    <?php elseif ($this->_var['pager']['display'] == 'grid'): ?>
          <div class="clearfix goodsBox" style="border:none; padding:11px 0 10px 0px;">
        <?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['goods_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['goods_list']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['goods_list']['iteration']++;
?>
          <?php if ($this->_var['goods']['goods_id']): ?>
                  <div class="goodsItem2" onmouseover="this.className='goodsItem2 goodsItem2_on'" onmouseout="this.className='goodsItem2'">
     
     <div class="img_box">
           <a href="<?php echo $this->_var['goods']['url']; ?>"><img src="<?php echo $this->_var['goods']['goods_thumb']; ?>" alt="<?php echo $this->_var['goods']['goods_name']; ?>" class="goodsimg" /></a> 
        </div>   
           <p class="name"><a href="<?php echo $this->_var['goods']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>"><?php echo $this->_var['goods']['goods_name']; ?></a></p>
               <p class="price"> <?php echo $this->_var['lang']['exchange_integral']; ?><font class="shop_s"><?php echo $this->_var['goods']['exchange_integral']; ?></font></p>
            </div>
          <?php endif; ?>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </div>


    <?php elseif ($this->_var['pager']['display'] == 'text'): ?>
      <div class="goodsList">
      <?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>
        <ul class="clearfix bgcolor" <?php if (($this->_foreach['goods_list']['iteration'] - 1) % 2 == 0): ?>id=""<?php else: ?>id="bgcolor"<?php endif; ?>>
          <li class="goodsName">
            <a href="<?php echo $this->_var['goods']['url']; ?>" class="f6 f5">
            <?php if ($this->_var['goods']['goods_style_name']): ?>
              <?php echo $this->_var['goods']['goods_style_name']; ?><br />
            <?php else: ?>
              <?php echo $this->_var['goods']['goods_name']; ?><br />
            <?php endif; ?>
            </a>
            <?php if ($this->_var['goods']['goods_brief']): ?>
              <?php echo $this->_var['lang']['goods_brief']; ?><?php echo $this->_var['goods']['goods_brief']; ?><br />
            <?php endif; ?>
          </li>
          <li>
            <?php echo $this->_var['lang']['exchange_integral']; ?><font class="shop_s"><?php echo $this->_var['goods']['exchange_integral']; ?></font>
          </li>
        </ul>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      </div>
    <?php endif; ?>
    </form>

 
<div class="blank "></div>
<script type="text/javascript">
  window.onload = function()
  {
    Compare.init();
    fixpng();
  }
  var button_compare = '';
</script>