<div class="body-content">
	<div class="container">
		<div class="sign-in-page">
			<div class="row">
				<!-- Sign-in -->			
<div class="col-md-6 col-sm-6 sign-in">
	<h4 class="">Sign In</h4>
	<p class="">Hello, Welcome to your account.</p>
	<!-- <div class="social-sign-in outer-top-xs">
		<a href="#" class="facebook-sign-in"><i class="fa fa-facebook"></i> Sign In with Facebook</a>
		<a href="#" class="twitter-sign-in"><i class="fa fa-twitter"></i> Sign In with Twitter</a>
	</div> -->
	<form class="register-form outer-top-xs" role="form">
		<div class="form-group">
		    <label class="info-title" for="frontend_user_email">Email Address <span>*</span></label>
		    <input type="email" class="form-control unicase-form-control text-input" id="frontend_user_email" required>
		</div>
	  	<div class="form-group">
		    <label class="info-title" for="frontend_user_password">Password <span>*</span></label>
		    <input type="password"  class="form-control unicase-form-control text-input" id="frontend_user_password" required>
		</div>
		<div class="radio outer-xs">
		  	<label>
		    	<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">Remember me!
		  	</label>
		  	<a href="#" class="forgot-password pull-right">Forgot your Password?</a>
		</div>
	  	<button type="submit" class="btn-upper btn btn-primary checkout-page-button">Login</button>
	</form>					
</div>
<!-- Sign-in -->

<!-- create a new account -->
<div class="col-md-6 col-sm-6 create-new-account">
	<h4 class="checkout-subtitle">Sign Up</h4>
	<p class="text title-tag-line">Create your new account.</p>
	<form class="register-form outer-top-xs" role="form" action="<?php echo base_url()?>frontend/sign_up_customer" method="post">
		<div class="form-group">
	    	<label class="info-title" for="customer_email">Email Address <span>*</span></label>
	    	<input type="email" class="form-control unicase-form-control text-input" name="customer_email" id="customer_email" >
	  	</div>
        <div class="form-group">
		    <label class="info-title" for="customer_name">Name <span>*</span></label>
		    <input type="email" class="form-control unicase-form-control text-input" name="customer_name" id="customer_name" >
		</div>
        <div class="form-group">
		    <label class="info-title" for="customer_phone">Phone Number <span>*</span></label>
		    <input type="email" class="form-control unicase-form-control text-input" name="customer_phone" id="customer_phone" >
		</div>
        <div class="form-group">
		    <label class="info-title" for="customer_password">Password <span>*</span></label>
		    <input type="email" class="form-control unicase-form-control text-input" name="customer_password" id="customer_password" >
		</div>
	  	<div type="submit" class="btn-upper btn btn-primary checkout-page-button">Sign Up</div>
	</form>
	
	
</div>	
<!-- create a new account -->			</div><!-- /.row -->
		</div><!-- /.sigin-in-->
		<!-- ============================================== BRANDS CAROUSEL ============================================== -->
<div id="brands-carousel" class="logo-slider wow fadeInUp">

		<div class="logo-slider-inner">	
			<div id="brand-slider" class="owl-carousel brand-slider custom-carousel owl-theme">
				<div class="item m-t-15">
					<a href="#" class="image">
						<img data-echo="<?php echo base_url()?>assets/frontend/images/brands/brand1.png" src="<?php echo base_url()?>assets/frontend/images/blank.gif" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item m-t-10">
					<a href="#" class="image">
						<img data-echo="<?php echo base_url()?>assets/frontend/images/brands/brand2.png" src="<?php echo base_url()?>assets/frontend/images/blank.gif" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="<?php echo base_url()?>assets/frontend/images/brands/brand3.png" src="<?php echo base_url()?>assets/frontend/images/blank.gif" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="<?php echo base_url()?>assets/frontend/images/brands/brand4.png" src="<?php echo base_url()?>assets/frontend/images/blank.gif" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="<?php echo base_url()?>assets/frontend/images/brands/brand5.png" src="<?php echo base_url()?>assets/frontend/images/blank.gif" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="<?php echo base_url()?>assets/frontend/images/brands/brand6.png" src="<?php echo base_url()?>assets/frontend/images/blank.gif" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="<?php echo base_url()?>assets/frontend/images/brands/brand2.png" src="<?php echo base_url()?>assets/frontend/images/blank.gif" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="<?php echo base_url()?>assets/frontend/images/brands/brand4.png" src="<?php echo base_url()?>assets/frontend/images/blank.gif" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="<?php echo base_url()?>assets/frontend/images/brands/brand1.png" src="<?php echo base_url()?>assets/frontend/images/blank.gif" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="<?php echo base_url()?>assets/frontend/images/brands/brand5.png" src="<?php echo base_url()?>assets/frontend/images/blank.gif" alt="">
					</a>	
				</div><!--/.item-->
		    </div><!-- /.owl-carousel #logo-slider -->
		</div><!-- /.logo-slider-inner -->
	
</div><!-- /.logo-slider -->
<!-- ============================================== BRANDS CAROUSEL : END ============================================== -->	</div><!-- /.container -->
</div><!-- /.body-content -->