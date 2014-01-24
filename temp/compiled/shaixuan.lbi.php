
 <script>
var isvisible=false;
function showAll(){
if(!isvisible){
document.getElementById("b").style.height="auto";
document.getElementById("btn").style.background="background: url(themes/tmall/images/biao9b.gif)  no-repeat right center;";
document.getElementById("btn").innerHTML="收起";
} else
{
document.getElementById("b").style.height="60px";
document.getElementById("btn").style.background="background: url(themes/tmall/images/biao9.gif)  no-repeat right center;";
document.getElementById("btn").innerHTML="更多";
}
isvisible=!isvisible;
}

</script>


 <?php if ($this->_var['brands']['1'] || $this->_var['price_grade']['1'] || $this->_var['filter_attr_list']): ?>
  <div class="Select">
  	<?php if ($this->_var['brands']['1']): ?>
        <dl class="brandAttr">
            <dt><?php echo $this->_var['lang']['brand']; ?>：</dt>
            <dd id="b" class="b_box" >
			<a href="javascript:showAll()" id="btn" class="btn">更多</a>
                <?php $_from = $this->_var['brands']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'brand');if (count($_from)):
    foreach ($_from AS $this->_var['brand']):
?>
                <?php if ($this->_var['brand']['selected']): ?>
                <div class="select_all"><?php echo $this->_var['brand']['brand_name']; ?></div>
                <?php else: ?>
                <div> <a href="<?php echo $this->_var['brand']['url']; ?>"><?php echo $this->_var['brand']['brand_name']; ?></a> </div>
                <?php endif; ?>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            </dd>
        </dl>
        <div style=" clear:both"></div>
    <?php endif; ?>
    
    	<?php if ($this->_var['price_grade']['1']): ?>     
 	   <dl style="border-top:none">
            <dt><?php echo $this->_var['lang']['price']; ?>：</dt>
            <dd>
                <?php $_from = $this->_var['price_grade']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'grade');if (count($_from)):
    foreach ($_from AS $this->_var['grade']):
?>
                <?php if ($this->_var['grade']['selected']): ?>
                <div class="select_all"><?php echo $this->_var['grade']['price_range']; ?></div>
                <?php else: ?>
                <div>  <a href="<?php echo $this->_var['grade']['url']; ?>"><?php echo $this->_var['grade']['price_range']; ?></a> </div>
                <?php endif; ?>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            </dd>
        </dl>
          <div style=" clear:both"></div>
         <?php endif; ?>  
          
          
         <?php $_from = $this->_var['filter_attr_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'filter_attr_0_48001200_1390559755');if (count($_from)):
    foreach ($_from AS $this->_var['filter_attr_0_48001200_1390559755']):
?>  
        <dl>
            <dt><?php echo htmlspecialchars($this->_var['filter_attr_0_48001200_1390559755']['filter_attr_name']); ?>：</dt>
            <dd>
                 <?php $_from = $this->_var['filter_attr_0_48001200_1390559755']['attr_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'attr');if (count($_from)):
    foreach ($_from AS $this->_var['attr']):
?>
      <?php if ($this->_var['attr']['selected']): ?>
                <div class="select_all"><?php echo $this->_var['attr']['attr_value']; ?></div>
                <?php else: ?>
                <div>   <a href="<?php echo $this->_var['attr']['url']; ?>"><?php echo $this->_var['attr']['attr_value']; ?></a>  </div>
                <?php endif; ?>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            </dd>
        </dl>
          <div style=" clear:both"></div>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
 


	</div>

 
<div class="blank"></div>


	  <?php endif; ?>




