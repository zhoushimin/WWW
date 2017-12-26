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
    <div class="pro-info">	
    	<div class="w1200">
	    	<div class="nav-sub">
				<a href="<?php echo site_url('welcome'); ?>" title="">Home</a><i>></i><a href="<?php echo site_url('products'); ?>" title="">Products</a><i>></i><span>LVT</span><i>></i><span class="sp">Dry back</span>
				<div class="tab-btn f-cb">
					<a href="###" class="prve-btn"></a>
					<a href="###" class="next-btn"></a>
				</div>
			</div>
			<div class="p-text">
				<div class="list">
					<img src="<?php echo static_file('web/img/img16-4.jpg'); ?> " alt="">
				</div>
				<div class="list">
					<div class="h">Product introduction :</div>
					<div class="p">
						<p>
							Dry back is constructed of solid vinyl PVC. It’s direct stick installation method requires the vinyl to be glued down using a permanent bond directly to the subfloor to ensure stability The direct stick process overall provides a more solid feel and reduces rebound noise that is often associated with other methods.
						</p>
						<p>
							Luxury dry back vinyl is a perfect design choice for high traffic spaces due to its incredible durability and resilience but most importantly its impressive realistic appearance. Not only does this flooring provide the perfect balance between aesthetics and performance, but the distinct design elements ensure the suitability for both commercial and residential spaces
						</p>
					</div>
				</div>
				<div class="list">
					<div class="h">Product Structure :</div>
					<img src="<?php echo static_file('web/img/img17.jpg'); ?> " alt="">
				</div>
				<div class="list">
					<div class="h">Main Performance :</div>
					<div class="ul">
						<div class="li">
							<img src="<?php echo static_file('web/img/img20.jpg'); ?> " alt="">
							<p>Fire resistant</p>
						</div>
						<div class="li">
							<img src="<?php echo static_file('web/img/img20-1.jpg'); ?> " alt="">
							<p>Anti-slip</p>
						</div>
						<div class="li">
							<img src="<?php echo static_file('web/img/img20-2.jpg'); ?> " alt="">
							<p>Antistatic</p>
						</div>
						<div class="li">
							<img src="<?php echo static_file('web/img/img20-3.jpg'); ?> " alt="">
							<p>Abrasion resistant</p>
						</div>
						<div class="li">
							<img src="<?php echo static_file('web/img/img20-4.jpg'); ?> " alt="">
							<p>Impact resistant</p>
						</div>
						<div class="li">
							<img src="<?php echo static_file('web/img/img20-5.jpg'); ?> " alt="">
							<p>Waterproof</p>
						</div>
					</div>
				</div>
				<div class="list">
					<div class="h">Dry back spec. :</div>
					<div class="ul-t">
						<div class="sp">
							<div class="tit"  style="background:url(<?php echo static_file('web/img/img12.png'); ?> ) no-repeat left top;">Thickness(mm)：1.5/2.0/2.5/3.0/4.0/5.0；</div>
						</div>
						<div class="sp">
							<div class="tit" style="background:url(<?php echo static_file('web/img/img12-1.png'); ?> ) no-repeat left top;">Thickness of wear layer(mm) ：0.12/0.2/0.3/0.5/0.55/0.7</div>
						</div>
						<div class="sp">
							<div class="tit" style="background:url(<?php echo static_file('web/img/img12-2.png'); ?> ) no-repeat left top;">UV coating :：NC coating / RC coating / anti-microbial coating / stain-  resistant coating / slip resistance coating</div>
						</div>
						<div class="sp">
							<div class="tit" style="background:url(<?php echo static_file('web/img/img12-3.png'); ?> ) no-repeat left top;">Dimension(mm)：</div>
							<img src="<?php echo static_file('web/img/img21.jpg'); ?> " alt="">
						</div>
					</div>
					<a href="###" class="morex 	hvr-left-bg"><p>Detail spec download</p></a>
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
	$(".header1 .nav li").eq(2).addClass("cur");
})
</script>
</body>
</html>