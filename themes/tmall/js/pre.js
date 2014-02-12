  $(function() {
      /*时间控件*/
        var dayNames = ["日","一","二","三","四","五","六"];
        var roomTotal = {};
        var pickerOpts = 
          {
              showButtonPanel: false,
                // changeMonth: true,
                // changeYear: true,
                dateFormat: "yy-mm-dd",
                dayNamesMin:["日","一","二","三","四","五","六"],
                firstDay: 0,
                nextText: "下一月",
                prevText: "上一月",
                closeText: "关闭",
                currentText: "今天",
                monthNames: ["一月", "二月", "三月", "四月", "五月", "六月", "七月", "八月", "九月", "十月", "十一月", "十二月"],
                monthNamesShort: ["一月", "二月", "三月", "四月", "五月", "六月", "七月", "八月", "九月", "十月", "十一月", "十二月"],
                isRTL: false,
                yearRange: "-0:+5",
                minDate:'-0',
                onSelect: function(date) {
                  var day = new Date(date.replace(/\-/gi,"/"))
                  var week = day.getDay();
                  $('#startWeek').html('星期' + dayNames[week]);
                  var endWeek;
                  if ( $('#endDate').length ) {
                    endWeek = $('#endDate').val();
                  }
                  // if (!endWeek){
                     $('#startWeek').parents('.item-control').next('.info-wrap').hide();
                     // return;
                  // }
                  if (endWeek) {
                      var endDate = new Date(endWeek.replace(/\-/gi,"/")).getTime();
                      if (day.getTime() >= endDate) {
                         $('#endWeek').parents('.item-control').next('.info-wrap').show();
                         calNum({dayNum: 0});
                      } else {
                         $('#endWeek').parents('.item-control').next('.info-wrap').hide();
                         var num = (endDate - day.getTime())/(3600*24*1000);
                         calNum({dayNum: num});
                      }
                      calPrice();                  
                  }
                }
            };
            var pickerOptsOut = {
                showButtonPanel: false,
                //changeMonth: true,
                //changeYear: true,
                dateFormat: "yy-mm-dd",
                dayNamesMin:["日","一","二","三","四","五","六"],
                firstDay: 0,
                nextText: "下一月",
                prevText: "上一月",
                closeText: "关闭",
                currentText: "今天",
                monthNames: ["一月", "二月", "三月", "四月", "五月", "六月", "七月", "八月", "九月", "十月", "十一月", "十二月"],
                monthNamesShort: ["一月", "二月", "三月", "四月", "五月", "六月", "七月", "八月", "九月", "十月", "十一月", "十二月"],
                isRTL: false,
                yearRange: "-0:+5",
                minDate:'+1',
                onSelect: function(date) {
                  var day = new Date(date.replace(/\-/gi,"/"))
                  var week = day.getDay();
                  $('#endWeek').html('星期' + dayNames[week]);
                  var startWeek = $('#startDate').val();
                  if (!startWeek){
                     $('#endWeek').parents('.item-control').next('.info-wrap').hide();
                     return;
                  }
                  var startDate = new Date(startWeek.replace(/\-/gi,"/")).getTime();
                  if (day.getTime() <= startDate) {
                     $('#endWeek').parents('.item-control').next('.info-wrap').show();
                  } else {
                     $('#endWeek').parents('.item-control').next('.info-wrap').hide();
                     var num = (day.getTime() - startDate)/(3600*24*1000);
                     calNum({dayNum: num});
                     calPrice();
                  }
                }
            };
      function initRoom() {
         if (!room || !room.catroom) {
           return;
         }
         // if (!room.catroom) {
         //    return;
         // }
         var data = room.catroom;
         var htmls = '';
         var index = 1;
         if ($('#J_room').length) {
           for (var key in data) {
              var tag = data[key] + '|' + key;
              htmls += '<li><a id="room'+(++index)+'" data-value="'+tag+'">'+key+' <i>'+data[key].split('|')[0]+'元</i></a></li>';
           }
           $('#J_room').html('<ul class="clearfix">'+htmls+'</ul>');        
         } else if ($('#J_room_2').length) {
            htmls += '<select name="rooms">';
            for (var key in data) {
                htmls += '<option value="'+key+'">'+key+'</option>';
            }
            $('#J_room_2').html(htmls + '</select>');
         }
      }
      initRoom();
      function calNum(obj) {
          $('#dayNum').html(obj.dayNum || 0);
      }
      function getRoomNum(){
          return parseInt($('#dayNum').text(), 10);
      }
      function showPrice(obj){
        // $('#roomNum').html(obj.roomNum || 0);
        $('#totalPrice').html(obj.totalPrice || 0);
        $('#onlinePrice').html(obj.onlinePrice || 0);
        $('#shopPrice').html(obj.shopPrice || 0);
      }
      function getPrice(obj){
        $('#totalPrice').html(obj.totalPrice || 0);
        $('#onlinePrice').html(obj.onlinePrice || 0);
        $('#shopPrice').html(obj.shopPrice || 0);
      }
      function calPrice() {
         var num = getRoomNum();
         var total = 0
           , online = 0
           , shop = 0;
         for(var key in roomTotal) {
           var o = roomTotal[key];
           total += + o[0];
           online += + o[1];
         }
         shop = total - online;
         var last = {
            totalPrice: total * num,
            onlinePrice: online * num,
            shopPrice: shop * num
         };
         if (arguments.length) {
            return last;
         } else {
           showPrice(last);
         }
      }
      //日历初始化
      $( "#startDate").datepicker(pickerOpts);
      $( "#endDate").datepicker(pickerOptsOut);
      $('#startWeek').on('click',function(){
         $('#startDate').focus();
      });
      $('#endWeek').on('click',function(){
         $('#endDate').focus();
      });
      $('#txtNum').spinner({min: 1});
      $('#txtNum2').length && $('#txtNum2').spinner({min: 1});
      //房间选择
      $('#J_room').on('click', 'li', function(e) {
         var target = e.currentTarget;
         var id = $(target).children('a').attr('id');
         $(target).toggleClass('checked');
         var prices = $(target).children('a').attr('data-value').split('|');

         if (roomTotal[id]) {
            delete roomTotal[id];
         } else {
            roomTotal[id] = [ prices[0],prices[1],prices[2] ];
         }
         var i = 0;
         for(var key in roomTotal){
            i++;
         }
         if (!i) {
            $('#theroom').show();
         } else{
            $('#theroom').hide();
         }
        $('#roomNum').html(i);
         calPrice();
      });

      $('#phone').on('blur', function() {
          var val = $(this).val();
          var m = /^(1(([35][0-9])|(47)|[8][01256789]))\d{8}$/.test(val);
          if (!!m) {
             $(this).parent().next().hide();
          } else{
             $(this).parent().next().show();
          }
      });
      $('#phone2').length && (function() {
        $('#phone2').on('blur', function() {
            var val = $(this).val();
            var m = /^(1(([35][0-9])|(47)|[8][01256789]))\d{8}$/.test(val);
            if (!!m) {
               $(this).parent().next().hide();
            } else{
               $(this).parent().next().show();
            }
        });
      }());
      $('#name').on('blur', function() {
          var val = $(this).val();
          if (val.length) {
             $(this).parent().next().hide();
          }else{
             $(this).parent().next().show();
          }
      });
      $('#name2').length && (function() {
        $('#name2, #address2').on('blur', function() {
            var val = $(this).val();
            if (val.length) {
               $(this).parent().next().hide();
            }else{
               $(this).parent().next().show();
            }
        });
      }());
      $('#phone,#name').trigger('blur');
      var validateNum = $('.info-wrap').length;
      $('#J_yuyueForm').on('submit', function(e) {

          var noTips = $('.info-wrap:hidden').length;
          if (noTips != validateNum) {
             alert('请正确填写预订信息~!');
             return false;
          }
          if(!$('#order-code').val().length){
             alert('验证码不能为空!');
             return false;
          }
          var rooms = [];
          for(var key in roomTotal) {
             rooms.push(roomTotal[key][2]);
          }
          $('#J_rooms').val(rooms.join(','));
          $('#J_total').val( $('#totalPrice').text() );
          $('#J_online').val( $('#onlinePrice').text() );
          $('#J_shop').val( $('#shopPrice').text() );
      });

      $('#txtNum2Pirce').length && (function() {
          var price = parseInt( $('#flowerPrice').text(), 10);
          var resultPrice = $('#txtNum2Pirce');
          $('#txtNum2').bind('blur', function() {
              var num = parseInt( $(this).val(), 10);
              var last = (num * price).toFixed(2);
              resultPrice.text(last);
              $('#J_flowerLastPirce, #J_total').val(last);
          });
      }());
  });
