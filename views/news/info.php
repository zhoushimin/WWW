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
    <div class="n-news-info">	
    	<div class="w1200">
	    	<div class="infobox">
				<div class="info-top">
					<div class="h">Jiaxing Customs Commissioner</div>
					<div class="time">Time&nbsp;&nbsp;|&nbsp;&nbsp;2017-06-27</div>
				</div>
				<div class="text">
					<p>In 2017 we invested 50 million USD to build a brand new flooring factory to meet the fast growing demand from our global customers</p>
					<p>&nbsp;</p>
					<p>In 2017 we invested 50 million USD to build a brand new flooring factory to meet the fast growing demand from our global customers</p>
					<p>&nbsp;</p>
					<p>In 2017 we invested 50 million USD to build a brand new flooring factory to meet the fast growing demand from our global customers</p>
					<p>&nbsp;</p>
					<p>In 2017 we invested 50 million USD to build a brand new flooring factory to meet the fast growing demand from our global customers</p>
					<p>&nbsp;</p>
					<p>In 2017 we invested 50 million USD to build a brand new flooring factory to meet the fast growing demand from our global customers</p>
					<p>&nbsp;</p>
					<img src="<?php echo static_file('web/img/nbanner1.jpg'); ?> " alt="">
					<p>&nbsp;</p>
				</div>
				<div class="bot f-cb">
					<div class="bot-l fl">
						<span><a class="t-jh" href="<?php echo site_url('news/info'); ?> " title="">Prve:Jiaxing Customs Commissioner</a></span>
						<span><a class="t-jh" href="<?php echo site_url('news/info'); ?> " title="">Next:Jiaxing Customs Commissioner</a></span>
					</div>
					<div class="bot-r fr">
						<a class="t-jh" href="<?php echo site_url('news'); ?>" title="">Back</a>
					</div>
				</div>
			</div>
    	</div>
    </div>	
    <?php include_once VIEWS.'inc/footer.php'; ?>
<?php
	echo static_file('web/js/main.js');
?>
<script>
$(function(){
	$(".header1 .nav li").eq(5).addClass("cur");
})
</script>
</body>
</html>