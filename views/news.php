<!DOCTYPE html>
<html>
<head>
<?php include_once VIEWS.'inc/head.php'; ?>
</head>

<body>
    <?php include_once VIEWS.'inc/header.php'; ?>
    <div class="n-banner" style="background:url(<?php echo static_file('web/img/nbanner4.jpg'); ?> ) no-repeat center center;">
    	<img src="<?php echo static_file('web/img/nbanner4.jpg'); ?> " alt="" class="img-m">
    	<div class="w1200">
    		<img class="img-wen" src="<?php echo static_file('web/img/img11-3.png'); ?> " alt="">
    	</div>
    </div>
    <div class="n-news">	
    	<div class="w1200">
			<div class="ulbox" id="container">
				<div class="libox f-cb">
					<a href="<?php echo site_url('news/info'); ?> " title="">
						<img height="523" class="imgbox" src="<?php echo static_file('web/img/img25.jpg'); ?> " alt="">
						<div class="imgbot f-cb">
							<h2>Jiaxing Customs Commissioner...</h2>
							<div class="p">
								<p>In 2017 we invested 50 million USD to build a brand new flooring factory to meet the fast growing demand from our global customers...</p>
							</div>
							<em>2016.11.27</em>
						</div>
					</a>
				</div>
				<div class="libox f-cb">
					<a href="<?php echo site_url('news/info'); ?> " title="">
						<img height="283" class="imgbox" src="<?php echo static_file('web/img/img25-1.jpg'); ?> " alt="">
						<div class="imgbot f-cb">
							<h2>Jiaxing Customs Commissioner...</h2>
							<div class="p">
								<p>In 2017 we invested 50 million USD to build a brand new flooring factory to meet the fast growing demand from our global customers...</p>
							</div>
							<em>2016.11.27</em>
						</div>
					</a>
				</div>
				<div class="libox f-cb">
					<a href="<?php echo site_url('news/info'); ?> " title="">
						<img height="406" class="imgbox" src="<?php echo static_file('web/img/img25-2.jpg'); ?> " alt="">
						<div class="imgbot f-cb">
							<h2>Jiaxing Customs Commissioner...</h2>
							<div class="p">
								<p>In 2017 we invested 50 million USD to build a brand new flooring factory to meet the fast growing demand from our global customers...</p>
							</div>
							<em>2016.11.27</em>
						</div>
					</a>
				</div>
				<div class="libox f-cb">
					<a href="<?php echo site_url('news/info'); ?> " title="">
						<img height="283" class="imgbox" src="<?php echo static_file('web/img/img25-1.jpg'); ?> " alt="">
						<div class="imgbot f-cb">
							<h2>Jiaxing Customs Commissioner...</h2>
							<div class="p">
								<p>In 2017 we invested 50 million USD to build a brand new flooring factory to meet the fast growing demand from our global customers...</p>
							</div>
							<em>2016.11.27</em>
						</div>
					</a>
				</div>
				<div class="libox f-cb">
					<a href="<?php echo site_url('news/info'); ?> " title="">
						<img height="406" class="imgbox" src="<?php echo static_file('web/img/img25-2.jpg'); ?> " alt="">
						<div class="imgbot f-cb">
							<h2>Jiaxing Customs Commissioner...</h2>
							<div class="p">
								<p>In 2017 we invested 50 million USD to build a brand new flooring factory to meet the fast growing demand from our global customers...</p>
							</div>
							<em>2016.11.27</em>
						</div>
					</a>
				</div>
				<div class="libox f-cb">
					<a href="<?php echo site_url('news/info'); ?> " title="">
						<img height="523" class="imgbox" src="<?php echo static_file('web/img/img25.jpg'); ?> " alt="">
						<div class="imgbot f-cb">
							<h2>Jiaxing Customs Commissioner...</h2>
							<div class="p">
								<p>In 2017 we invested 50 million USD to build a brand new flooring factory to meet the fast growing demand from our global customers...</p>
							</div>
							<em>2016.11.27</em>
						</div>
					</a>
				</div>
			</div>
			<!-- <div class="morebox">
	            加载更多
	        </div> -->
	    </div>
    </div>	
    <?php include_once VIEWS.'inc/footer.php'; ?>
<?php
	echo static_file('web/js/main.js');
	echo static_file('web/js/blocksit.min.js')
?>
<script>
$(function(){
	function Imgbox(){
		if ($(window).width()>1023) {
	    	$("#container").BlocksIt({
		        numOfCol:3,
		        offsetX: 6,
		        offsetY: 6
		    });
	    }else if ($(window).width()<=1023 && $(window).width()>785){
	    	$("#container").BlocksIt({
		        numOfCol:2,
		        offsetX: 6,
		        offsetY: 6
		    });
	    }else if ($(window).width()<785){
	    	$("#container").BlocksIt({
		        numOfCol:1,
		        offsetX: 0,
		        offsetY: 6
		    });
	    }
	}
	Imgbox();
    var k = $(".n-news .libox").length;
    //Enter($('.n-news .libox:eq(0)'),"Y","0",k,800,300)
    var flagPage=true;
    var url = SITE_URL + "/ajax/news_ajax";
    var p = 1; //记录第几页
    var allpage = 3;
   $(window).scroll( function(event){
    //当内容滚动到底部时加载新的内容 100当距离最底部100个像素时开始加载. 
    if ($(this).scrollTop() + $(window).height() + 400 >= $(document).height() && $(this).scrollTop() > 10 && flagPage==true) {
       		var _this = $(this);
        	flagPage=false;
        	p += 1; //下一页
            $.ajax({
            url: url,
            data: { page: p, reg: allpage },
            cache: false,
            dataType: 'html',
            beforeSend: function(){
            	//$(".morebox").html("加载更多...");
            },
            success: function (html) {
        	 	var k = $(".n-news .libox").length;
        	 	var k2 = k-1;
        	 	console.log(k2)
                $('.n-news .ulbox').append(html);
                Imgbox()
                //console.log(p);
                Enter($('.n-news .libox').eq(k2),"Y","0",4,800,300)
	            if (p > allpage) {
	                $('.morebox').hide();
	                flagPage=false;
	            }else{
	                setTimeout(function(){
		                   flagPage=true;
		                },300)
		            } 
                }
            });
        	return false;
      	}
  	});
	$(window).resize(function(){
       Imgbox();
    })
    $(".header1 .nav li").eq(5).addClass("cur");
})
</script>
</body>
</html>