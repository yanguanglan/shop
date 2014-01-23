// JavaScript Document
$(function(){
	$(".tm_slide1 .tm_slide_nav li:eq(0)").mouseover(function(){
		$(this).parents(".tm_slide_nav").prev(".tm_slide_img").stop();
		$(".tm_slide_nav li").not(this).animate({width:'180px'},"slow");
		$(this).dequeue();
		$(this).animate({width:'200px'},"slow");
		$(this).parents(".tm_slide_nav").prev(".tm_slide_img").animate({left:'0px'},"slow");
	})
	$(".tm_slide1 .tm_slide_nav li:eq(1)").mouseover(function(){	
		$(this).parents(".tm_slide_nav").prev(".tm_slide_img").stop();	
		$(".tm_slide_nav li").not(this).animate({width:'180px'},"slow");
		$(this).animate({width:'200px'},"slow");
		$(this).dequeue();
		$(this).parents(".tm_slide_nav").prev(".tm_slide_img").animate({left:'-200px'},"slow");
	})
	$(".tm_slide1 .tm_slide_nav li:eq(2)").mouseover(function(){
		$(this).parents(".tm_slide_nav").prev(".tm_slide_img").stop();		
		$(".tm_slide_nav li").not(this).animate({width:'180px'},"slow");
		$(this).animate({width:'200px'},"slow");
		$(this).dequeue();
		$(this).parents(".tm_slide_nav").prev(".tm_slide_img").animate({left:'-400px'},"slow");
	})
	
	
	
		$(".tm_slide2 .tm_slide_nav li:eq(0)").mouseover(function(){
		$(this).parents(".tm_slide_nav").prev(".tm_slide_img").stop();
		$(".tm_slide2 .tm_slide_nav li").not(this).animate({width:'180px'},"slow");
		$(this).dequeue();
		$(this).animate({width:'200px'},"slow");
		$(this).parents(".tm_slide_nav").prev(".tm_slide_img").animate({left:'0px'},"slow");
	})
	$(".tm_slide2 .tm_slide_nav li:eq(1)").mouseover(function(){	
		$(this).parents(".tm_slide_nav").prev(".tm_slide_img").stop();	
		$(".tm_slide2 .tm_slide_nav li").not(this).animate({width:'180px'},"slow");
		$(this).animate({width:'200px'},"slow");
		$(this).dequeue();
		$(this).parents(".tm_slide_nav").prev(".tm_slide_img").animate({left:'-200px'},"slow");
	})
	$(".tm_slide2 .tm_slide_nav li:eq(2)").mouseover(function(){
		$(this).parents(".tm_slide_nav").prev(".tm_slide_img").stop();		
		$(".tm_slide2 .tm_slide_nav li").not(this).animate({width:'180px'},"slow");
		$(this).animate({width:'200px'},"slow");
		$(this).dequeue();
		$(this).parents(".tm_slide_nav").prev(".tm_slide_img").animate({left:'-400px'},"slow");
	})
	
	
	
		$(".tm_slide3 .tm_slide_nav li:eq(0)").mouseover(function(){
		$(this).parents(".tm_slide_nav").prev(".tm_slide_img").stop();
		$(".tm_slide3 .tm_slide_nav li").not(this).animate({width:'180px'},"slow");
		$(this).dequeue();
		$(this).animate({width:'200px'},"slow");
		$(this).parents(".tm_slide_nav").prev(".tm_slide_img").animate({left:'0px'},"slow");
	})
	$(".tm_slide3 .tm_slide_nav li:eq(1)").mouseover(function(){	
		$(this).parents(".tm_slide_nav").prev(".tm_slide_img").stop();	
		$(".tm_slide3 .tm_slide_nav li").not(this).animate({width:'180px'},"slow");
		$(this).animate({width:'200px'},"slow");
		$(this).dequeue();
		$(this).parents(".tm_slide_nav").prev(".tm_slide_img").animate({left:'-200px'},"slow");
	})
	$(".tm_slide3 .tm_slide_nav li:eq(2)").mouseover(function(){
		$(this).parents(".tm_slide_nav").prev(".tm_slide_img").stop();		
		$(".tm_slide3 .tm_slide_nav li").not(this).animate({width:'180px'},"slow");
		$(this).animate({width:'200px'},"slow");
		$(this).dequeue();
		$(this).parents(".tm_slide_nav").prev(".tm_slide_img").animate({left:'-400px'},"slow");
	})
	
	
	
			$(".tm_slide4 .tm_slide_nav li:eq(0)").mouseover(function(){
		$(this).parents(".tm_slide_nav").prev(".tm_slide_img").stop();
		$(".tm_slide4 .tm_slide_nav li").not(this).animate({width:'180px'},"slow");
		$(this).dequeue();
		$(this).animate({width:'200px'},"slow");
		$(this).parents(".tm_slide_nav").prev(".tm_slide_img").animate({left:'0px'},"slow");
	})
	$(".tm_slide4 .tm_slide_nav li:eq(1)").mouseover(function(){	
		$(this).parents(".tm_slide_nav").prev(".tm_slide_img").stop();	
		$(".tm_slide4 .tm_slide_nav li").not(this).animate({width:'180px'},"slow");
		$(this).animate({width:'200px'},"slow");
		$(this).dequeue();
		$(this).parents(".tm_slide_nav").prev(".tm_slide_img").animate({left:'-200px'},"slow");
	})
	$(".tm_slide4 .tm_slide_nav li:eq(2)").mouseover(function(){
		$(this).parents(".tm_slide_nav").prev(".tm_slide_img").stop();		
		$(".tm_slide4 .tm_slide_nav li").not(this).animate({width:'180px'},"slow");
		$(this).animate({width:'200px'},"slow");
		$(this).dequeue();
		$(this).parents(".tm_slide_nav").prev(".tm_slide_img").animate({left:'-400px'},"slow");
	})
	
	
	
			$(".tm_slide5 .tm_slide_nav li:eq(0)").mouseover(function(){
		$(this).parents(".tm_slide_nav").prev(".tm_slide_img").stop();
		$(".tm_slide5 .tm_slide_nav li").not(this).animate({width:'180px'},"slow");
		$(this).dequeue();
		$(this).animate({width:'200px'},"slow");
		$(this).parents(".tm_slide_nav").prev(".tm_slide_img").animate({left:'0px'},"slow");
	})
	$(".tm_slide5 .tm_slide_nav li:eq(1)").mouseover(function(){	
		$(this).parents(".tm_slide_nav").prev(".tm_slide_img").stop();	
		$(".tm_slide5 .tm_slide_nav li").not(this).animate({width:'180px'},"slow");
		$(this).animate({width:'200px'},"slow");
		$(this).dequeue();
		$(this).parents(".tm_slide_nav").prev(".tm_slide_img").animate({left:'-200px'},"slow");
	})
	$(".tm_slide5 .tm_slide_nav li:eq(2)").mouseover(function(){
		$(this).parents(".tm_slide_nav").prev(".tm_slide_img").stop();		
		$(".tm_slide5 .tm_slide_nav li").not(this).animate({width:'180px'},"slow");
		$(this).animate({width:'200px'},"slow");
		$(this).dequeue();
		$(this).parents(".tm_slide_nav").prev(".tm_slide_img").animate({left:'-400px'},"slow");
	})
})