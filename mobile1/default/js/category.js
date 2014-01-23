/**
** ec模板堂  by Leah
*/
//切换浏览模式: 列表  详情  详情列表
    function changeCl( cls ){
            var vl = cls.getAttribute('class') ;
            var lst = document.getElementById('J_ItemList');
            switch(vl){
            case "sb-switchBtn sb-switchBtn-list":
                cls.setAttribute('class', 'sb-switchBtn sb-switchBtn-album') ;
                lst.setAttribute('class' , 'srp j_autoResponsive_container m-ks-autoResponsive-container m-animation album');
                break;
            case "sb-switchBtn sb-switchBtn-album":
                cls.setAttribute('class', 'sb-switchBtn sb-switchBtn-grid') ;
                lst.setAttribute('class' , 'srp j_autoResponsive_container m-ks-autoResponsive-container m-animation grid');
                break;
            case "sb-switchBtn sb-switchBtn-grid":
                cls.setAttribute('class', 'sb-switchBtn sb-switchBtn-list') ;
                lst.setAttribute('class' , 'srp j_autoResponsive_container m-ks-autoResponsive-container m-animation list');
                break;
        }

    }                  
// 右侧菜单显示与隐藏
	function mtShowMenu(){
		if(parseInt($("#page").css('right'))<=0){
			$("#page").animate({right:275 , left:-275},"fast").css({"display":"block" , "height":"640px","overflow":"hidden"});
			$("#J_Nav").animate({right:0},"fast");
		}else{
			$("#page").animate({right:0 , left : 0 },"fast").css('display','block');
			$("#J_Nav").animate({right: -275 },"fast");
		}
	}
	
	//查看更多品牌：
	function more_brands( obj ){
               if( obj.className== 'j_More avo-more avo-more-down'){
                    var i = $('#av_brands li').size();
                    var h = Math.round( i/2)*40;
                    $("#av_brands").css('max-height', h) ;
                    obj.innerHTML = '收起更多<i></i>';
                    obj.className = "j_More avo-more avo-more-up";
               }
                else{
                     $("#av_brands").css('max-height','') ;
                    obj.innerHTML = '查看更多<i></i>';
                    obj.className = "j_More avo-more avo-more-down";
                }

		}
        //查看更多分类：
	function more_category( obj ){
                    if( obj.className== 'j_More avo-more avo-more-down'){//
                         var i = $('#av_category li').size();
                         var h = Math.round( i/2)*40;
                         $("#av_category").css('max-height', h) ;
                         obj.innerHTML = '收起更多<i></i>';
                         obj.className = "j_More avo-more avo-more-up";
                    }
                    else{
                         $("#av_category").css('max-height','') ;
                        obj.innerHTML = '查看更多<i></i>';
                        obj.className = "j_More avo-more avo-more-down";
                    }

		}
      /**
       * jquery Begin
       * @returns {undefined}
       */          
      $(function(){
          /**
           * 点击筛选品牌
           */
         $('#av_brands li').click(function(){
             if($(this).attr('class') == 'av-selected'){
                $(this).attr('class' , '');
             }
             else{ 
                //$('#av_brands li').attr('class','');
                $(this).attr('class','av-selected');
                $(this).next().attr('name' , 'brand');
             }
         });
         /**
          * 点击类目
          */
          $('#av_category li').click(function(){
             if($(this).attr('class') == 'av-selected'){
                $(this).attr('class' , '');
             }
             else{ 
               //  $('#av_category li').attr('class','');
                 $(this).attr('class','av-selected');
                 $(this).next().attr('name' , 'category');
             }
         }); 
		
		/**
          * 点击属性
          */
          $('#av_attr li').click(function(){
             if($(this).attr('class') == 'av-selected'){
                $(this).attr('class' , '');
             }
             else{ 
                 //$('#av_attr li').attr('class','');
                 $(this).attr('class','av-selected');
                 $(this).next().attr('name' , 'filter_attr');
             }
         }); 

         /**
          * 商品分类页跳转页面
          */
         $('.pagenav-select').change(function(){
             //alert($(this).val());
             window.location.href= $(this).val();
         });
          
      })