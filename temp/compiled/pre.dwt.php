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
<?php $pre = true;?>
</head>

<body>
 
<?php echo $this->fetch('library/page_header.lbi'); ?>
 
<?php echo $this->fetch('library/ur_here.lbi'); ?>
 
<link rel="stylesheet" href="themes/tmall/yuding.css">
<link rel="stylesheet" href="themes/tmall/ui.css">
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<div class="blank"></div>
 
<div class="block order_step">
    <ul class="clearfix">
        <li class="step_ok"><em class="order_ico"></em><strong>1.选择商户</strong></li>
        <li class="step_cur"><em class="order_ico"></em><strong>2.填写订单</strong></li>
        <li class="step_default"><em class="order_ico"></em><strong>3.在线支付</strong></li>
        <li class="step_default last"><em class="order_ico"></em><strong>4.完成订单</strong></li>
    </ul>
</div>


<div class="block yuding-wrap">
  <div class="yuding-main">
      <h1 class="order-title"><?php echo $this->_var['goods']['goods_name']; ?></h1>
      <div class="order-time">
          <i class="iconfont">&#x34f5;</i>
          营业时间:
          <span class="time">08:00-24:00</span>，请选择在营业时间范围之内的消费时间。
      </div>
      <div class="order-info">
          <div class="order-hd red">
            <strong>注意事项</strong>
          </div>
          <div class="order-bd red-border"><?php echo $this->_var['goods']['goods_brief']; ?></div>
      </div>
      <div class="order-info">
          <div class="order-hd red">
            <strong>商品信息</strong>
            <i class="iconfont require fl-r">&#x35e2;<b class="ml-5">此项必填<b></i>
          </div>
          <div class="order-bd clearfix">
              <div class="pics">
                 <img src="<?php echo $this->_var['goods']['goods_img']; ?>" alt="">
              </div>
              <div class="content"><?php echo $this->_var['goods']['goods_desc']; ?></div>
          </div>
      </div>
      
      <form id="J_yuyueForm" action="" method="post" autocomplete="off">
          <div class="form-item clearfix">
              <?php if ($this->_var['goods']['onlinepay'] > 0): ?>
                 <label><i class="iconfont require">&#x35e2;</i><b>到店时间</b></label>
              <?php else: ?>
                 <label><i class="iconfont require">&#x35e2;</i><b>消费时间</b></label>
              <?php endif; ?>
              <div class="item-control">
                  <div class="item-time-wrap">
                       <span id="startWeek" class="time-week"></span>
                       <input id="startDate" name="startdate" type="text" class="bootstrap">
                  </div>
                  <select name="hour" id="J_hour">
                    <?php if ($this->_var['goods']['onlinepay'] == 0): ?>
                      <option value="9">9点</option>
                      <option value="10">10点</option>
                      <option value="11">11点</option>
                      <option value="12">12点</option>
                      <option value="13">13点</option>
                    <?php endif; ?>
                      <option value="14">14点</option>
                      <option value="15">15点</option>
                      <option value="16">16点</option>
                      <option value="17">17点</option>
                      <option value="18">18点</option>
                      <option value="19">19点</option>
                      <option value="20">20点</option>
                      <option value="21">21点</option>
                      <option value="22">22点</option>
                      <option value="23">23点</option>
                  </select>
                  <select name="minute" id="J_minues">
                      <option value="0">0分</option>
                      <option value="10">10分</option>
                      <option value="20">20分</option>
                      <option value="30">30分</option>
                      <option value="40">40分</option>
                      <option value="50">50分</option>
                  </select>
              </div>
              <div class="info-wrap">
                <div class="info-tips">
                    <span><i class="iconfont">&#x34e8;</i>到店时间不能早于当前时间,请重新选择！</span>
                </div>                
              </div>
          </div>
          <?php if ($this->_var['goods']['onlinepay'] > 0): ?>
          <div class="form-item clearfix">
              <label><i class="iconfont require">&#x35e2;</i><b>离店时间</b></label>
              <div class="item-control">
                  <div class="item-time-wrap">
                       <span id="endWeek" class="time-week"></span>
                        <input id="endDate" name="enddate" type="text" class="bootstrap">                 
                  </div>
              </div>
              <div class="info-wrap">
                <div class="info-tips">
                    <span><i class="iconfont">&#x34e8;</i>离店日期不能早于到店时间,请重新选择！</span>
                </div>                
              </div>

          </div>
          <?php endif; ?>
          <div class="form-item clearfix">
              <label><i class="iconfont require">&#x35e2;</i><b>人&emsp;&emsp;数</b></label>
              <div class="item-control">
                  <input type="text" id="txtNum" name="num" value="1" readonly/>
              </div>
          </div>
          <textarea id="therooms" style="display:none;"><?php echo $this->_var['goods']['rooms']; ?></textarea>
          <?php if ($this->_var['goods']['onlinepay'] > 0): ?>
          <div class="form-item clearfix">
              <label><i class="iconfont require">&#x35e2;</i><b>房&emsp;&emsp;间</b></label>
              <div class="item-control">
                  <div id="J_room" class="pirce-check">
                  </div>
                  <input type="hidden" id="J_rooms" name="rooms" value="" />
                  <input type="hidden" id="J_total" name="totalprice" value="" />
                  <input type="hidden" id="J_online" name="onlineprice" value="" />
                  <input type="hidden" id="J_shop" name="shopprice" value="" />
                  <div class="grey-info">
                      <p class="title">房间预订成功后，定金不退</p>
                      <p class="info">您选择了 <em id="roomNum">0</em> 个房间， 入住 <em id="dayNum">0</em> 晚</p>
                      <p class="price">共需支付 <em id="totalPrice">0</em> 元（在线支付 <em id="onlinePrice">0</em> 元，到店支付 <em id="shopPrice">0</em> 元）</p>
                  </div>
              </div>
              <div id="theroom" class="info-wrap">
                <div class="info-tips">
                    <span><i class="iconfont">&#x34e8;</i>请选择房间！</span>
                </div>                
              </div>
          </div>
          <?php else: ?>
          <div class="form-item clearfix">
              <label><i class="iconfont require">&#x35e2;</i><b>预&emsp;&emsp;订</b></label>
              <div class="item-control">
                  <div id="J_room_2"></div>
              </div>
          </div>
          <?php endif; ?>
        <div class="order-info">
            <div class="order-hd">
              <strong>预订人信息</strong>
            </div>
            <div class="order-bd clearfix">
              <div class="form-item clearfix">
                  <label><i class="iconfont require">&#x35e2;</i><b>手机号</b></label>
                  <div class="item-control">
                      <input id="phone" type="text" name="phone" class="bootstrap" value="<?php echo $this->_var['user111']['mobile_phone']; ?>">
                  </div>
              <div class="info-wrap">
                <div class="info-tips">
                    <span><i class="iconfont">&#x34e8;</i>手机号码为空或格式错误，请重新输入！</span>
                </div>                
              </div>

              </div>
              <div class="form-item clearfix">
                  <label><i class="iconfont require">&#x35e2;</i><b>姓名</b></label>
                  <div class="item-control">
                      <input type="text" class="bootstrap" id="name" name="name" value="<?php echo $this->_var['user111']['user_name']; ?>">
                  </div>
                <div class="info-wrap">
                  <div class="info-tips">
                      <span><i class="iconfont">&#x34e8;</i>姓名不能为空，请重新输入！</span>
                  </div>                
                </div>

              </div>
              <div class="form-item clearfix">
                  <label><i class="iconfont require">&#x35e2;</i><b>性别</b></label>
                  <div class="item-control">
                      <label><input type="radio" name="sex" checked value="1"> 先生</label>
                      <label><input type="radio" name="sex" value="2"> 女士</label>
                  </div>
              </div>

            </div>
        </div>
        <div class="order-info">
            <div class="order-hd">
              <strong>需求留言</strong>（您还有什么要求,请写在下面）
            </div>
            <div class="order-bd clearfix">
                <textarea name="message" id="" class="liuyan"></textarea>
            </div>
        </div>
        验证码：<input id="order-code" style="width:70px;" type="text" size="8" name="captcha" class="inputBg">
        <img src="captcha.php" alt="captcha" style="vertical-align: middle;cursor: pointer;" onclick="this.src='captcha.php?'+Math.random()">
        <div class="form-item" style="margin-left:20px;">
            <button type="submit" class="btn btn-tmall">提交表单</button>
        </div>
      </form>
  </div>
</div>
<script>
  var room = JSON.parse( $('#therooms').val() );
</script>
<script src="themes/tmall/js/pre.js"></script>
 <div class="blank"></div>
 <div class="blank"></div> 
 <div class="blank"></div>

<?php echo $this->fetch('library/page_footer.lbi'); ?>

</body>
</html>

