/**
 *  ecmoban by Leah
 * @returns {undefined}
 * 
 */
$(function() {

    /**
     * 筛选商品属性
     */
        $(".ui-more").click(function(){
           
            if( $('.s-buy .fields').css('height') == '0px'){
                
                $('.s-buy .fields').css('height', 'auto'); 
            }
            else{
                $('.s-buy .fields').css('height', '0px'); 
                
            }
        });

})

 function changenum(diff)
    {
        var num = parseInt(document.getElementById('goods_number').value);

        var goods_number = num + Number(diff);
        if( goods_number >= 1){
         document.getElementById('goods_number').value = goods_number;//更新数量
            changePrice();
            }

    }
               