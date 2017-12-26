<!DOCTYPE html>
<html>
<head>
<?php include_once VIEWS.'inc/head.php'; ?>
</head>

<body>
    <?php include_once VIEWS.'inc/header.php'; ?>
    <div class="n-banner" style="background:url(<?php echo static_file('web/img/nbanner3.jpg'); ?> ) no-repeat center center;">
    	<img src="<?php echo static_file('web/img/nbanner3.jpg'); ?> " alt="" class="img-m">
    	<div class="w1200">
    		<img class="img-wen" src="<?php echo static_file('web/img/img11-2.png'); ?> " alt="">
    	</div>
    </div>
    <div class="n-man">	
    	<div class="lista">
	    	<div class="w1200">
				<div class="title-top f-cb">
					<div class="tit-img fl">
						<img src="<?php echo static_file('web/img/img3-11.png'); ?> " alt="">
					</div>
				</div>
				<div class="dl f-cb">
					<div class="dd fl">
						<div class="p-text ma80">
							<div class="h">Manufacture ability</div>
							<div class="p">
								<img src="<?php echo static_file('web/img/img22-2.jpg'); ?> " alt="">
							</div>
						</div>
						<div class="img pc-img">
							<img src="<?php echo static_file('web/img/img22-3.jpg'); ?> " alt="">
						</div>
					</div>
					<div class="dd-two fr">
						<div class="img pc-img ma80">
							<img src="<?php echo static_file('web/img/img22-4.jpg'); ?> " alt="">
						</div>
						<div class="p-text">
							<div class="h">New capacity</div>
							<div class="flexslider">
								<ul class="slides">
									<li class="p">
										<p>
											In 2017 we invested 50 million USD to build a brand new flooring factory to meet the fast growing demand from our global customers, HALEAD flooring is becoming global top Vinyl flooring brand.

										</p>
										<p>
											1
										</p>
									</li>
									<li class="p">
										<p>
											In 2017 we invested 50 million USD to build a brand new flooring factory to meet the fast growing demand from our global customers, HALEAD flooring is becoming global top Vinyl flooring brand.
										</p>
										<p>
											2
										</p>
									</li>
									<li class="p">
										<p>
											In 2017 we invested 50 million USD to build a brand new flooring factory to meet the fast growing demand from our global customers, HALEAD flooring is becoming global top Vinyl flooring brand.
										</p>
										<p>
											3
										</p>
									</li>
								</ul>
							</div>
						</div>
						<div class="img m-img">
							<img src="<?php echo static_file('web/img/img22-4.jpg'); ?> " alt="">
						</div>
					</div>
				</div>
		    </div>
	    </div>
	    <div class="listb">
	    	<div class="w1200">
	    		<div class="title-top f-cb">
					<div class="tit-img fl">
						<img src="<?php echo static_file('web/img/img3-12.png'); ?> " alt="">
					</div>
				</div>
				<div class="flexslider-two">
					<ul class="slides">
						<li class="p">
							<p>
								In 2017 we invested 50 million USD to build a brand new flooring factory to meet the fast growing demand from our global customers, HALEAD flooring is becoming global top Vinyl flooring brand.

							</p>
						</li>
						<li class="p">
							<p>
								In 2017 we invested 50 million USD to build a brand new flooring factory to meet the fast growing demand from our global customers, HALEAD flooring is becoming global top Vinyl flooring brand.
							</p>
						</li>
						<li class="p">
							<p>
								In 2017 we invested 50 million USD to build a brand new flooring factory to meet the fast growing demand from our global customers, HALEAD flooring is becoming global top Vinyl flooring brand.
							</p>
						</li>
					</ul>
				</div>
	    	</div>
	    </div>
	    <div class="listc">
	    	<div class="w1200">
				<div class="ul f-cb">
					<div class="li li1">
						<div class="h">Quality Philosophy</div>
						<div class="p">
							Aim to satisfy our target customers, Seek development by internal continuous improvement
						</div>
					</div>
					<div class="li li2">
						<div class="h">Quality Principles</div>
						<div class="p">
							Providing customers with highest quality products and services; Achieve first-class level with excellent products; Meet customers' satisfaction with sincere service and continuous improvement
						</div>
					</div>
				</div>
	    	</div>
	    </div>
	    <div class="listd">
	    	<div class="w1200">
	    		<div class="title-top f-cb">
					<div class="tit-img fl">
						Physical & Chemical Testing Laboratory
					</div>
				</div>
				<div class="carousel">
	                <ul class="ul f-cb" id="phyimg">
	                	<?php for ($i=0; $i < 8 ; $i++) { ?>
	                		<li class="li f-cb">
	                            <img src="<?php echo static_file('web/img/img24.jpg'); ?> " alt="">
	                        </li>
	                	<?php } ?>
	                </ul>
	            </div>
				
	    	</div>
	    </div>
    </div>	
    <?php include_once VIEWS.'inc/footer.php'; ?>
<?php
	echo static_file('web/js/main.js');

	echo static_file('web/flexslider/flexslider.css');
	echo static_file('web/flexslider/jquery.flexslider-min.js');

	echo static_file('web/owl.carousel/owl.carousel.css'); 
	echo static_file('web/owl.carousel/owl.carousel.js'); 
?>
<script>
$(function(){
	$(".flexslider").flexslider({
        slideshowSpeed: 4000, //展示时间间隔ms
        animationSpeed: 400, //滚动时间ms
        touch: true, //是否支持触屏滑动
        animation:"slide",
        animationLoop:true,
        slideshow:true,
        directionNav:false,
        pauseOnHover:true,
    });
    $(".listb .flexslider-two").flexslider({
        slideshowSpeed: 4000, //展示时间间隔ms
        animationSpeed: 400, //滚动时间ms
        touch: true, //是否支持触屏滑动
        animation:"slide",
        animationLoop:true,
        slideshow:true,
        directionNav:false,
        pauseOnHover:true,
    });

     $('#phyimg').owlCarousel({
        itemsDesktop:[1920,3],
        itemsDesktopSmall:[1024,2],
        itemsTablet:[768,1],
        itemsMobile:[425,1],
        slideSpeed: 600,
        autoPlay: false,
        navigation: false,
        pagination: true,
        rewindNav: false,
    });

    $(".header1 .nav li").eq(4).addClass("cur");
})
</script>
</body>
</html>