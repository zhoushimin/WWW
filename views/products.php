<!DOCTYPE html>
<html>
<head>
<?php include_once VIEWS.'inc/head.php'; ?>
</head>

<body>
    <?php include_once VIEWS.'inc/header.php'; ?>
    <div class="n-banner" style="background:url(<?php echo static_file('web/img/img15.jpg'); ?> ) no-repeat center center;">
    	<img src="<?php echo static_file('web/img/img15.jpg'); ?> " alt="" class="img-m">
    	<div class="w1200">
    		<img class="img-wen" src="<?php echo static_file('web/img/img11.png'); ?> " alt="">
    	</div>
    </div>
    <div class="n-products">	
    	<div class="w1200">
	    	<div class="top f-cb">
	    		<div class="ul f-cb fl">
	    			<div class="li li1 hvr-left" data-id="1">All Products</div>
	    			<div class="li li1 hvr-left" data-id="1">LVT</div>
	    			<div class="li li1 hvr-left" data-id="1">Loose Lay</div>
	    			<div class="li li1 hvr-left" data-id="1">WPC</div>
	    			<div class="li li1 hvr-left" data-id="1">RLVT</div>
	    			<div class="li li2 hvr-left" data-id="1">Decor Show</div>
	    		</div>
	    		<div class="top-r fr">
	    			<span class="sp">1</span>
	    			products
	    		</div>
	    	</div>
	    	<div class="por-list"></div>
    	</div>
    </div>	
    <?php include_once VIEWS.'inc/footer.php'; ?>
<?php
	echo static_file('web/js/main.js');
	echo static_file('web/mCustomScrollbar/mCustomScrollbar.css');
    echo static_file('web/mCustomScrollbar/mCustomScrollbar.js'); 

	echo static_file('web/owl.carousel/owl.carousel.js'); 
	echo static_file('web/owl.carousel/owl.carousel.css'); 
?>
<script>
$(function(){
	var url1= SITE_URL +'/ajax/pro_list';
	var url2= SITE_URL +'/ajax/pro_list_t';
	var url3= SITE_URL +'/ajax/pro_list1';
	$(".n-products .top .ul .li").eq(0).addClass("cur");
	$(".por-list").load(url1);
	
	$(".top .li1").click(function(){
		$(this).addClass("cur").siblings().removeClass("cur");
		var id = $(this).attr("data-id");
		$(".por-list").load(url1+'/'+id,function(){
    		$(".n-products .top-r .sp").html($(".por-list .dl").length);
		});
	})
	$(".top .li2").click(function(){
		$(this).addClass("cur").siblings().removeClass("cur");
		var id = $(this).attr("data-id");
		$(".por-list").load(url2+'/'+id,function(){
    		$(".por-sub .sp").eq(0).addClass("cur");
    		$(".por-list-t").load(url3,function(){
    			$(".n-products .top-r .sp").html($(".por-list-t .li").length);
    		})
    		$(".por-sub .sp").on('click',function(){
    			$(this).addClass("cur").siblings().removeClass("cur");
    			$(".n-products .top-r .sp").html($(".por-list-t .li").length);
    			$(".por-list-t").load(url3+'/'+id);
    		});
		});
	})	
	$(".header1 .nav li").eq(2).addClass("cur");
})
</script>
</body>
</html>