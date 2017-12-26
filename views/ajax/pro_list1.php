<?php for ($i=0; $i < 6 ; $i++) { ?>
	<div class="li hvr-left-b" data-id="1">
		<div class="img">
			<img src="<?php echo static_file('web/img/img16-2.jpg'); ?> " alt="">
		</div>
		<p>Sawn cut emboss</p>
	</div>
<?php } ?>
<?php for ($i=0; $i < 3 ; $i++) { ?>
	<div class="li hvr-left-b" data-id="2">
		<div class="img">
			<img src="<?php echo static_file('web/img/img16-3.jpg'); ?> " alt="">
		</div>
		<p>Sawn cut emboss</p>
	</div>
<?php } ?>
<div class="video-ajax-s"></div>
<script>
	$(function(){
		url4 = SITE_URL + '/ajax/news_info_ajax';
	    $(".por-list-t .li").on('click',function(){
	        $(".video-ajax-s").fadeIn(0);
	        $(".video-ajax-s").addClass("hide-a");
	        var id = $(this).attr("data-id");
	        $(".video-ajax-s").load(url4+'/'+id,function(){
		        $(".n-pro-info .dlbox .p-text .p").mCustomScrollbar({
		           
		        });
		        $('#pro-img').owlCarousel({
			        itemsDesktop:[1920,8],
			        itemsTablet:[1024,6],
			        itemsMobile:[768,4],
			        slideSpeed: 600,
			        autoPlay: false,
			        navigation: true,
			        pagination: false,
			        rewindNav: false,
			    });
			    $('#pro-img2').owlCarousel({
			        itemsDesktop:[1920,1],
			        itemsTablet:[1024,1],
			        itemsMobile:[768,1],
			        slideSpeed: 600,
			        autoPlay: false,
			        navigation: true,
			        pagination: false,
			        rewindNav: false,
			    });
			    $("#pro-img .owl-item").eq(0).addClass("cur");

			    var Imga = $("#pro-img .owl-item").eq(0).find("img").attr("src");
			    $(".n-pro-info .img img").attr("src",$("#pro-img .owl-item").eq(0).find("img").attr("src"));
			    $("#pro-img .owl-item").on('click',function(){
			    	var k = $(this).index(); 
			    	console.log(k)
			    	var Imgb = $("#pro-img .owl-item").eq(k).find("img").attr("src");
			    	console.log(Imgb)
			    	$(this).addClass("cur").siblings().removeClass("cur");
			    	$(".dlbox .img img").attr("src",Imgb);
			    })
	      	});
	      	setTimeout(function(){
	          	$(".video-ajax-s").addClass("hidetwo");
	      	},400)
	    })
		$(".video-ajax-s").on('click','.bg-close',function(){
	        setTimeout(function(){
	          $(".video-ajax-s").removeClass("hide-a");
	        },400);
	        $(".video-ajax-s").removeClass("hidetwo");
	          setTimeout(function(){
	              $(".video-ajax-s").fadeOut();
	        },800);
	    })
	    $(".video-ajax-s").on('click','.closex',function(){
	        setTimeout(function(){
	            $(".video-ajax-s").removeClass("hide-a");
	        },400);
	        $(".video-ajax-s").removeClass("hidetwo");
	          setTimeout(function(){
	              $(".video-ajax-s").fadeOut();
	        },800);
	    })
	})
</script>