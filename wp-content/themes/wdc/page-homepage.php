<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>
			
			<div id="content">
				<div class="top-logo">
					<div class="row">
						<div class="small-12 large-3 medium-6 small-centered large-centered medium-centered columns">
							<img src="<?php echo get_template_directory_uri(); ?>/library/images/logo.png">
						</div>	
					</div>	
				</div>
				<div class="content-wrap">
					<div class="team-back"></div>					
					<div class="header-text">
						<h2>Some things are worth the wait</h2>
						<h3>Our new website is almost ready</h3>
						<div class="button">
							
						</div>
					</div>
					<div id="inner-content" class="row clearfix">
				
					    <div id="main" class="large-12 medium-12 columns" role="main">
					
	
	    				</div> <!-- end #main -->
					    
					</div> <!-- end #inner-content -->
				</div>
				<div class="overlay"></div>
			</div> <!-- end #content -->
			
			<div class="contact-form">
				<div class="row">
					<?php echo do_shortcode( '[contact-form-7 id="7" title="Signup"]' ); ?>
				</div>	
			</div>
			<div class="lightbox"></div>
			
<?php get_footer(); ?>
