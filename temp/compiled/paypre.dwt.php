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
         <li class="<?php if ($this->_var['pre']['onlinepay'] == 1): ?>step_cur<?php else: ?>step_default<?php endif; ?>"><em class="order_ico"></em><strong>3.在线支付</strong></li>
         <li class="<?php if ($this->_var['pre']['onlinepay'] == 1): ?>step_default<?php else: ?>step_cur<?php endif; ?> last"><em class="order_ico"></em><strong>4.完成订单</strong></li>
    </ul>
</div>


<div class="block yuding-wrap">
  <div class="yuding-main">
      <?php if ($this->_var['pre']['onlinepay'] == 1): ?>
      <h1 class="order-title">请核实订单</h1>
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
        <div class="order-info">
            <div class="order-hd">
              <strong>请选择支付方式</strong>
            </div>
            <div class="order-bd clearfix">
                选择银行，进行支付
            </div>
        </div>
        <div class="form-item" style="margin-left:20px;">
            <button type="submit" class="btn btn-tmall">提交支付</button>
        </div>

      </form>
      <?php else: ?>
       <div class="order-yuding-success">
         <h2>您已成功预订了该项服务</h2>
         <div class="boxm center"><i class="iconfont">&#x34e7;</i>稍后请查收手机短信，客服也会将会联系你进行确认.</div>
         <div class="box-tip boxm box-grey">
           <strong>温馨提示您</strong> 
           <p>提交订单后，我们通常会在20分钟内通过短信或电话告知预订结果；每晚19:00点后提交的订单会在次日上午尽快得到处理，请您耐心等候，不便处敬请谅解。</p>
         </div>
       </div>
      <?php endif; ?>
  </div>
</div>
 <div class="blank"></div>
 <div class="blank"></div> 
 <div class="blank"></div>

<?php echo $this->fetch('library/page_footer.lbi'); ?>

</body>
</html>

