<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<head>
<meta name="Generator" content="ECSHOP v2.7.3" /><meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />

<title><?php echo $this->_var['page_title']; ?></title>

<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="<?php echo $this->_var['ecs_css_path']; ?>" rel="stylesheet" type="text/css" />
<?php if ($this->_var['cat_style']): ?>
<link href="<?php echo $this->_var['cat_style']; ?>" rel="stylesheet" type="text/css" />
<?php endif; ?>

<?php echo $this->smarty_insert_scripts(array('files'=>'jquery.js')); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,global.js,compare.js')); ?>
  <SCRIPT type=text/javascript>
window.pageConfig={
	compatible:true,
	navId:"home"
};
</SCRIPT>
</head>
<body>
<?php echo $this->fetch('library/page_header.lbi'); ?>
<?php echo $this->fetch('library/ur_here_category.lbi'); ?>
<div class="block950 clearfix"> 

 
  <?php echo $this->fetch('library/shaixuan.lbi'); ?>
 
  
  
   
   
<?php echo $this->fetch('library/goods_list.lbi'); ?>
<?php echo $this->fetch('library/pages.lbi'); ?>



  
  <div  class="blank" ></div>
		 <?php echo $this->fetch('library/cate_hot.lbi'); ?>
   <div  class="blank" ></div>

		 <?php echo $this->fetch('library/bottom_search.lbi'); ?>
</div>

<?php echo $this->fetch('library/page_footer.lbi'); ?>
</body>
</html>
