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
<link href="themes/tmall/style.css" rel="stylesheet" type="text/css" />
 


<?php echo $this->smarty_insert_scripts(array('files'=>'common.js')); ?>

<script type=text/javascript>
window.pageConfig={
	compatible:true,
	navId:"home"
};
</script>
</head>

<body>
 
<?php echo $this->fetch('library/page_header.lbi'); ?>
 
<?php echo $this->fetch('library/ur_here.lbi'); ?>
 
<link rel="stylesheet" href="themes/tmall/yuding.css">
<link rel="stylesheet" href="themes/tmall/ui.css">
<div class="blank"></div>
 
<div class="block order_step">
    <ul class="clearfix">
        <li class="step_ok"><em class="order_ico"></em><strong>1.选择商户</strong></li>
        <li class="step_ok"><em class="order_ico"></em><strong>2.填写订单</strong></li>
        <li class="step_cur"><em class="order_ico"></em><strong>3.在线支付</strong></li>
        <li class="step_default last"><em class="order_ico"></em><strong>4.完成订单</strong></li>
    </ul>
</div>


<div class="block yuding-wrap">
  <div class="yuding-main">
      <h1 class="order-title"><?php if ($this->_var['pre']['onlinepay'] == 1): ?>请核实订单<?php else: ?>您已成功预定<?php endif; ?></h1>
      <div class="order-info">
          <div class="order-hd red">
            <strong>订单信息</strong>
          </div>
          <div class="order-bd clearfix">
          </div>
      </div>
      
      <form id="J_yuyueForm" action="" method="post">
          <div class="form-item clearfix">
              <label><i class="iconfont require">&#x35e2;</i><b>商户</b></label>
              <div class="item-control">
                  <?php echo $this->_var['pre']['goods_name']; ?>
              </div>
          </div>
          <div class="form-item clearfix">
              <label><i class="iconfont require">&#x35e2;</i><b>下单时间</b></label>
              <div class="item-control">
                  <?php echo $this->_var['pre']['created']; ?>
              </div>
          </div>
          <div class="form-item clearfix">
              <label><i class="iconfont require">&#x35e2;</i><b>入住时间</b></label>
              <div class="item-control">
                  <?php echo $this->_var['pre']['startdate']; ?> <?php echo $this->_var['pre']['hour']; ?>时 <?php echo $this->_var['pre']['minute']; ?>分
              </div>
          </div>
          <div class="form-item clearfix">
              <label><i class="iconfont require">&#x35e2;</i><b>离店时间</b></label>
              <div class="item-control">
                  <?php echo $this->_var['pre']['enddate']; ?>
              </div>
          </div>
          <div class="form-item clearfix">
              <label><i class="iconfont require">&#x35e2;</i><b>人&emsp;&emsp;数</b></label>
              <div class="item-control">
                  <?php echo $this->_var['pre']['num']; ?>
              </div>
          </div>
          <div class="form-item clearfix">
              <label><i class="iconfont require">&#x35e2;</i><b>房&emsp;&emsp;间</b></label>
              <div class="item-control">
                  <?php echo $this->_var['pre']['rooms']; ?>
              </div>
          </div>
            <div class="form-item clearfix">
              <label><i class="iconfont require">&#x35e2;</i><b>订金</b></label>
              <div class="item-control">
                  总金额：￥<?php echo $this->_var['pre']['totalprice']; ?>，线上支付：￥<?php echo $this->_var['pre']['onlineprice']; ?>，实体店支付：￥<?php echo $this->_var['pre']['shopprice']; ?>
              </div>
          </div>
        <div class="order-info">
            <div class="order-hd">
              <strong>预订人信息</strong>
            </div>
            <div class="order-bd clearfix">
              <div class="form-item clearfix">
                  <label><i class="iconfont require">&#x35e2;</i><b>手机号</b></label>
                  <div class="item-control">
                      <?php echo $this->_var['pre']['phone']; ?>
                  </div>
              <div class="info-wrap">              
              </div>
              </div>
              <div class="form-item clearfix">
                  <label><i class="iconfont require">&#x35e2;</i><b>姓名</b></label>
                  <div class="item-control">
                      <?php echo $this->_var['pre']['name']; ?>
                  </div>
                <div class="info-wrap">              
                </div>
              </div>

            </div>
        </div>
        <?php if ($this->_var['pre']['onlinepay'] == 1): ?>
        <div class="order-info">
            <div class="order-hd">
              <strong>请选择支付方式</strong>
            </div>
            <div class="order-bd clearfix">
                这里是支付宝包。。。。。。。。。。。。。。。。。。。。。
            </div>
        </div>
        <div class="form-item" style="margin-left:20px;">
            <button type="submit" class="btn btn-tmall">提交表单</button>
        </div>
        <?php else: ?>
        <div class="form-item" style="margin-left:20px;">
            <button class="btn btn-tmall">返回</button>
        </div>
        <?php endif; ?>
      </form>
  </div>
</div>
 <div class="blank"></div>
 <div class="blank"></div> 
 <div class="blank"></div>

<?php echo $this->fetch('library/page_footer.lbi'); ?>

</body>
</html>

