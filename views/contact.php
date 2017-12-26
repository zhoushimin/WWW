<!DOCTYPE html>
<html>
<head>
<?php include_once VIEWS.'inc/head.php'; ?>
</head>

<body>
    <?php include_once VIEWS.'inc/header.php'; ?>
    <div class="n-banner" style="background:url(<?php echo static_file('web/img/nbanner5.jpg'); ?> ) no-repeat center center;">
    	<img src="<?php echo static_file('web/img/nbanner5.jpg'); ?> " alt="" class="img-m">
    	<div class="w1200">
    		<img class="img-wen" src="<?php echo static_file('web/img/img11-4.png'); ?> " alt="">
    	</div>
    </div>
    <div class="n-contact">	
    	<div class="w1200">
	    	<div class="dlbox f-cb">
	    		<div class="dd">
	    			<div class="p">
	    				If you have any questions and  suggestions, please refer to the following contact us,  we will be the first time for you to answer
	    			</div>
	    			<div class="ul">
	    				<div class="li li1 f-cb">
	    					<span class="sp">Address：</span>
	    					<p>No.2 Tingchao Road, Jianshan New Zone, Haining city, Zhejiang Province China</p>
	    				</div>
	    				<div class="li li2 f-cb">
	    					<span class="sp">Tel：</span>
	    					<p>+86-573-87760778</p>
	    				</div>
	    				<div class="li li3 f-cb">
	    					<span class="sp">Email：</span>
	    					<p>flooring@halead.com</p>
	    				</div>
	    			</div>
	    		</div>
	    		<div class="dt">
	    			<img src="<?php echo static_file('web/img/img27.jpg'); ?> " alt="">
	    		</div>
	    	</div>
	    	<div class="form-box">
	    		<div class="top">
	    			Get in Touch
	    		</div>
	    		<div class="form">
	    			<form action="">
						<div width="100%" border="0" align="center" cellpadding="0" cellspacing="0" class="msg-tb">
						    <div class="tr f-cb">
						        <div class="td fl">
						        	<div class="sp">Name</div>
						        	<input type="text" class="msg-input" value="" name="Name" id="Name" placeholder="Name">
						        </div>
						        <div class="td fr">
						        	<div class="sp">Email</div>
						        	<input type="text" class="msg-input" value="" name="Email" id="Email" placeholder="Email">
						        </div>
						    </div>
						    <div class="tr f-cb">
						        <div class="td fl">
						        	<div class="sp">Subject</div>
						        	<input type="text" class="msg-input" value="" name="Subject" id="Subject" placeholder="Subject">
						        </div>
						        <div class="td fr">
						        	<div class="sp">Message</div>
						        	<input type="text" class="msg-input" value="" name="Message" id="Message" placeholder="Message">
						        </div>
						    </div>
						    <div class="tr f-cb">
						        <div class="tdc fl">
									<input class="code msg-input" type="text" value="" name="captchas" id="captchas">
									<!-- <img src="<?php //echo static_file('web/img/img22.jpg'); ?> " alt="" title="点击刷新" class="captchas"> -->
						        </div>
						    </div>
						    <div class="tr2 f-cb">
						    	<div class="tda">
						        	<input class="submit" type="submit" value="Send Message">
						        </div>
						    </div>
						</div>
					</form>
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
	$(".header1 .nav li").eq(6).addClass("cur");
})
</script>
</body>
</html>