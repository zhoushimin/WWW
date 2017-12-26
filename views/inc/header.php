<header class="header1 bocweb-header">
	<h1 class="logo bocweb-logo">
		<a href="<?php echo site_url('welcome'); ?> ">
			<img src="<?php echo static_file('web/img/logo.jpg'); ?> " alt="">
		</a>
	</h1>
	<div class="bocweb-nav nav">
		<ul class="f-cb">
			<li>
				<a href="<?php echo site_url('welcome'); ?> " title="">HOME</a>
			</li>
			<li>
				<a href="<?php echo site_url('about'); ?> " title="">About Halead</a>
			</li>
			<li>
				<a href="<?php echo site_url('products'); ?> " title="">Products</a>
			</li>
			<li>
				<a href="<?php echo site_url('innovation'); ?>" title="">Innovation</a>
			</li>
			<li>
				<a href="<?php echo site_url('manufacture'); ?>" title="">Manufacture</a>
			</li>
			<li>
				<a href="<?php echo site_url('news'); ?>" title="">News</a>
			</li>
			<li>
				<a href="<?php echo site_url('contact'); ?>" title="">Contact</a>
			</li>
		</ul>
	</div>
	<div class="header-r">
		<div class="top">
			<a href="###" class="a1"></a>
			<a href="###" class="a2"></a>
			<a href="###" class="a3"></a>
		</div>
		<div class="bot f-cb">
			<a href="###" class="a1">CN</a>
			<div class="a1 deng-btn"></div>
			<div class="a1 search-btn"></div>
		</div>
	</div>
</header>
<!--手机头部-->
<div class="header2 bocweb-menu">
	<div class="main-wrap f-cb">
		<h1 class="fl logo">
			<a href="<?php echo site_url('welcome'); ?> ">
				<img src="<?php echo static_file('web/img/logo.jpg'); ?> " alt="">
			</a>
		</h1>
		<div class="fr nav-btn">
			<span class="line line1"></span>
			<span class="line line2"></span>
			<span class="line line3"></span>
		</div>
		<span class="fr search-btn"></span>
		<div class="a1 deng-btn fr"></div>
		<a href="###" class="a1 fr">CN</a>
	</div>
	<div class="sub-menu bocweb-submenu">
		<ul>
			<li>
				<a class="tit" href="<?php echo site_url('welcome'); ?> " title="">
					Home
				</a>
			</li>
			<li>
				<a class="tit" href="<?php echo site_url('about'); ?> " title="">
					About Halead
				</a>
			</li>
			<li>
				<a class="tit" href="<?php echo site_url('products'); ?> " title="">
					Products
				</a>
				<!-- <div class="tit sub-tit" title="">products</div>
				<div class="sec-list">
					<p><a href="<?php echo site_url('products'); ?>" title="">All Products</a></p>
					<p><a href="<?php echo site_url('products'); ?>" title="">LVT</a></p>
				</div> -->
			</li>
			<li>
				<a class="tit" href="<?php echo site_url('Innovation'); ?> " title="">
					Innovation
				</a>
			</li>
			<li>
				<a class="tit" href="<?php echo site_url('manufacture'); ?> " title="">
					manufacture
				</a>
			</li>
			<li>
				<a class="tit" href="<?php echo site_url('news'); ?> " title="">
					News
				</a>
			</li>
			<li>
				<a class="tit" href="<?php echo site_url('town'); ?> " title="">
					Contact
				</a>
			</li>
		</ul>
	</div>
	<span class="m-close-search"></span>
	<div class="search-bg-t"></div>
	<div class="m-search-box">
		<form action="" method="get">
			<input class="fl tex" name="kw" type="text" value="Search" onblur="if(!value){value=defaultValue;}" onfocus="if(value==defaultValue){value='';}">
			<input class="fr search-btn" type="submit" value="">
		</form>
	</div>
	<span class="m-close-search"></span>
</div>
<div class="search-bg"></div>
<!--手机头部-->

<div class="video-ajax">
	<div class="bg-close"></div>
	<div class="warp-land">
		<div class="closex"></div>
		<div class="land">
			<div class="top-t f-cb">
				<div class="h">Member login</div>
				<span class="register-btn">Register now</span>
			</div>
				<div class="form">
					<form action="">
						<input type="text" class="input1 input2" placeholder="Please enter registered email">
						<input type="text" class="input1 input3" placeholder="Please enter the password">
						<div class="p"><input class="input5" type="checkbox" checked="checked">Remember the password</div>
						<input class="input4" type="submit" value="Confirm the login">
					</form>
				</div>
		</div>
	</div>
</div>

<div class="register-ajax">
	<div class="bg-close"></div>
	<div class="warp-land">
		<div class="closex"></div>
		<div class="land">
			<div class="top-t f-cb">
				<div class="h">Register a new account</div>
			</div>
				<div class="form">
					<input type="text" class="input1 input2" placeholder="* Please enter registered email">
					<input type="text" class="input1 input3" placeholder="* Please enter the phone number">
					<input type="text" class="input1 input6" placeholder="* Please enter the password">
					<!-- <div class="p"><input class="input5" type="checkbox" checked="checked">Remember the password</div> -->
					<div class="p1">
						<span class="sp">Existing account？</span><span class="landx landx-btn">Login immediately</span>
					</div>
					<input class="input4 landx-btn" type="submit" value="Register now">
				</div>
		</div>
	</div>
</div>
<script>
	$(function(){
		$(".header2 .nav-btn").on('click', function() {
			var _this = $(this);
	        if (!$(this).hasClass('hover')) {
	            $(this).addClass('hover');
	            $(this).children('.line1').stop(true,true).transition({rotate: 45}, 300);
	            $(this).children('.line2').stop(true,true).fadeOut(300);
	            $(this).children('.line3').stop(true,true).transition({rotate: -45}, 300,function(){
	                _this.addClass('active');
	            });
	            $(this).parent(".main-wrap").siblings('.sub-menu').stop().fadeIn();
	            $("header .list-cont").addClass('active');
	            $("body,html").stop(true,true).addClass('ovh-f');
	            $(".search-bg").stop(true,true).fadeIn();
	        }else{
	            $(this).removeClass('hover');
	            $(this).removeClass('active');
	            $(this).children('.line1').stop(true,true).transition({rotate: 0}, 300);
	            $(this).children('.line2').stop(true,true).fadeIn(300);
	            $(this).children('.line3').stop(true,true).transition({rotate: 0}, 300);
	            $(this).parent(".main-wrap").siblings('.sub-menu').stop().fadeOut();
	            $("header .list-cont").removeClass('active');
	            $("body,html").stop(true,true).removeClass('ovh-f');
	            $(".search-bg").stop(true,true).fadeOut();
	        }
	    });
		$(".header2 .sub-menu .sub-tit").on('click', function() {
			if ($(this).siblings('.sec-list').is(':hidden')){
				$(this).addClass('on');
				$(this).siblings('.sec-list').stop().slideDown();
				$(this).parent().siblings('li').children('.sec-list').stop().slideUp().siblings('.tit').removeClass('on');
			}else{
				$(this).removeClass('on');
				$(this).siblings('.sec-list').stop().slideUp();
			}
		});

		$(".landx-btn").on('click',function(){
	        $(".video-ajax").fadeIn(0);
	        $(".video-ajax").addClass("hide-a");
	      	setTimeout(function(){
	          	$(".video-ajax").addClass("hidetwo");
	      	},400)

	      	setTimeout(function(){
	          $(".register-ajax").removeClass("hide-a");
	        },400);
	        $(".register-ajax").removeClass("hidetwo");
	          setTimeout(function(){
	              $(".register-ajax").fadeOut();
	        },800);
	    })


		//登陆
    	$(".deng-btn").on('click',function(){
	        $(".video-ajax").fadeIn(0);
	        $(".video-ajax").addClass("hide-a");
	      	setTimeout(function(){
	          	$(".video-ajax").addClass("hidetwo");
	      	},400)
	    })
		$(".video-ajax").on('click','.bg-close',function(){
	        setTimeout(function(){
	          $(".video-ajax").removeClass("hide-a");
	        },400);
	        $(".video-ajax").removeClass("hidetwo");
	          setTimeout(function(){
	              $(".video-ajax").fadeOut();
	        },800);
	    })
	    $(".video-ajax").on('click','.closex',function(){
	        setTimeout(function(){
	            $(".video-ajax").removeClass("hide-a");
	        },400);
	        $(".video-ajax").removeClass("hidetwo");
	          setTimeout(function(){
	              $(".video-ajax").fadeOut();
	        },800);
    	})

	    //注册
    	$(".register-btn").on('click',function(){
	        $(".register-ajax").fadeIn(0);
	        $(".register-ajax").addClass("hide-a");
	      	setTimeout(function(){
	          	$(".register-ajax").addClass("hidetwo");
	      	},400)


	      	setTimeout(function(){
	            $(".video-ajax").removeClass("hide-a");
	        },400);
	        $(".video-ajax").removeClass("hidetwo");
	          setTimeout(function(){
	              $(".video-ajax").fadeOut();
	        },800);
	    })
		$(".register-ajax").on('click','.bg-close',function(){
	        setTimeout(function(){
	          $(".register-ajax").removeClass("hide-a");
	        },400);
	        $(".register-ajax").removeClass("hidetwo");
	          setTimeout(function(){
	              $(".register-ajax").fadeOut();
	        },800);
	    })
	    $(".register-ajax").on('click','.closex',function(){
	        setTimeout(function(){
	            $(".register-ajax").removeClass("hide-a");
	        },400);
	        $(".register-ajax").removeClass("hidetwo");
	          setTimeout(function(){
	              $(".register-ajax").fadeOut();
	        },800);
    	})
	})
</script>