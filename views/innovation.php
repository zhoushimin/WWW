<!DOCTYPE html>
<html>
<head>
<?php include_once VIEWS.'inc/head.php'; ?>
</head>

<body>
    <?php include_once VIEWS.'inc/header.php'; ?>
    <div class="n-banner" style="background:url(<?php echo static_file('web/img/nbanner2.jpg'); ?> ) no-repeat center center;">
    	<img src="<?php echo static_file('web/img/nbanner2.jpg'); ?> " alt="" class="img-m">
    	<div class="w1200">
    		<img class="img-wen" src="<?php echo static_file('web/img/img11-1.png'); ?> " alt="">
    	</div>
    </div>
    <div class="n-innovation">	
    	<div class="w1200">
			<div class="title-top f-cb">
				<div class="tit-img fl">
					<img src="<?php echo static_file('web/img/img3-10.png'); ?> " alt="">
				</div>
			</div>
			<div class="dl f-cb">
				<div class="dd fl">
					<div class="img pc-img ma80">
						<img src="<?php echo static_file('web/img/img22.jpg'); ?> " alt="">
					</div>
					<div class="p-text">
						<div class="h">INNOVATION</div>
						<div class="p">
							We pride ourselves in flooring businesses with relentless innovation in technologies, approaches, methodologies and processes. we have a research institute consist of 5 Physics Labs and 2 chemistry labs, which makes Halead one of the world’s most research-intensive flooring enterprises
						</div>
					</div>
				</div>
				<div class="dd-two fr">
					<div class="img m-img ma80">
						<img src="<?php echo static_file('web/img/img22-1.jpg'); ?> " alt="">
					</div>
					<div class="p-text ma80">
						<div class="h">INNOVATION</div>
						<div class="p">
							We pride ourselves in flooring businesses with relentless innovation in technologies, approaches, methodologies and processes. we have a research institute consist of 5 Physics Labs and 2 chemistry labs, which makes Halead one of the world’s most research-intensive flooring enterprises
						</div>
					</div>
					<div class="img pc-img">
						<img src="<?php echo static_file('web/img/img22-1.jpg'); ?> " alt="">
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
	$(".header1 .nav li").eq(3).addClass("cur");
})
</script>
</body>
</html>