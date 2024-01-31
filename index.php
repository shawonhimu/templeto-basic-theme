

<?php 
	get_header();
	
	global $basictheme;
?>

<!-- home section -->
<div id="home">
	<div class="container">
		<div class="row">
			<div class="col-md-5 col-sm-3"></div>
			<div class="col-md-7 col-sm-9">
				<h3>welcome to</h3>
				<h1>Onetel Design Studio</h1>
			</div>
		</div>
	</div>
</div>

<!-- divider section -->
<div class="divider">
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-sm-6">
				<div class="divider-wrapper divider-one">
					<i class="fa fa-laptop"></i>
					<h2>Responsive</h2>
					
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.</p>
				</div>
			</div>
			<div class="col-md-4 col-sm-6">
				<div class="divider-wrapper divider-two">
					<i class="fa fa-mobile"></i>
					<h2>Easy to use</h2>
					
					
					
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.</p>
				</div>
			</div>
			<div class="col-md-4 col-sm-12">
				<div class="divider-wrapper divider-three">
					<i class="fa fa-life-ring"></i>
					<h2>Quick Support</h2>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.</p>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- about section -->
<div id="about">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-sm-12">
				<img src="<?php echo esc_url(get_template_directory_uri());?>/images/about-img.jpg" class="img-responsive" alt="about img">
			</div>
			<div class="col-md-6 col-sm-12 about-des">
				<h2>Startup Business</h2>

				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet. Dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet.</p>
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet. Dolore magna aliquam erat volutpat.</p>
				<a href="about.html" class="btn btn-default">LEARN MORE</a>
			</div>
		</div>
	</div>
</div>

<!-- portfolio section -->
<div id="portfolio">
	<div class="container">
		<div class="row">
			<div class="col-md-offset-2 col-md-8 col-sm-12">
				<h2>Recent Projects</h2>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet. Dolore magna aliquam erat volutpat.</p>
			</div>
         </div>
         
         <div class="row mt30">
			<?php
			
				$add_slides = $basictheme['portfolio_gallery'];
				
				foreach($add_slides as $slide_image):
			
			?>
			
			<div class="col-md-4 col-sm-4 col-xs-6">
				<a href="<?php echo $slide_image['image']; ?>" data-lightbox-gallery="portfolio-gallery"><img src="<?php echo $slide_image['image']; ?>" alt="portfolio img"></a>
			</div>
			<?php endforeach; ?>
			
            <!---- this section for type => gallery
			<?php /*
					
					$add_more_txt = explode(',', $basictheme['portfolio_gallery']);
					
					foreach($add_more_txt as $images):
			?>
			
			<div class="col-md-4 col-sm-4 col-xs-6">
				<a href="<?php echo wp_get_attachment_url($images); ?>" data-lightbox-gallery="portfolio-gallery"><img src="<?php echo wp_get_attachment_url($images); ?>" alt="portfolio img"></a>
			</div>
			
			<?php endforeach; */?>
			---->
			<!--- **** this section is for simple connection********
			<div class="col-md-4 col-sm-4 col-xs-6">
				<a href="<?php echo esc_url(get_template_directory_uri());?>/images/portfolio-img2.jpg" data-lightbox-gallery="portfolio-gallery"><img src="<?php echo esc_url(get_template_directory_uri());?>/images/portfolio-img2.jpg" alt="portfolio img"></a>
			</div>
			<div class="col-md-4 col-sm-4 col-xs-6">
				<a href="<?php echo esc_url(get_template_directory_uri());?>/images/portfolio-img3.jpg" data-lightbox-gallery="portfolio-gallery"><img src="<?php echo esc_url(get_template_directory_uri());?>/images/portfolio-img3.jpg" alt="portfolio img"></a>
			</div>
            
			<div class="col-md-3 col-sm-6 col-xs-6">
				<a href="<?php echo esc_url(get_template_directory_uri());?>/images/portfolio-img4.jpg" data-lightbox-gallery="portfolio-gallery"><img src="<?php echo esc_url(get_template_directory_uri());?>/images/portfolio-img4.jpg" alt="portfolio img"></a>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-6">
				<a href="<?php echo esc_url(get_template_directory_uri());?>/images/portfolio-img5.jpg" data-lightbox-gallery="portfolio-gallery"><img src="<?php echo esc_url(get_template_directory_uri());?>/images/portfolio-img5.jpg" alt="portfolio img"></a>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-6">
				<a href="<?php echo esc_url(get_template_directory_uri());?>/images/portfolio-img6.jpg" data-lightbox-gallery="portfolio-gallery"><img src="<?php echo esc_url(get_template_directory_uri());?>/images/portfolio-img6.jpg" alt="portfolio img"></a>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-12">
				<a href="<?php echo esc_url(get_template_directory_uri());?>/images/portfolio-img7.jpg" data-lightbox-gallery="portfolio-gallery"><img src="<?php echo esc_url(get_template_directory_uri());?>/images/portfolio-img7.jpg" alt="portfolio img"></a>
			</div>
			
			--->
			
			<div class="col-md-12 col-sm-12">
				<a rel="nofollow" href="#" class="btn btn-default">View More</a>
			
			</div>
		</div>
	</div>
</div>		

<!-- footer section -->




	
	<?php 
		get_footer();
	?>
	



