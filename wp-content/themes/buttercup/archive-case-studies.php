<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();

/* Start the Loop */
while (have_posts()) :
	the_post(); ?>
  
	<!-- Section 1 -->
	<div class="container-fluid home-ban ban-in pb-0">
	  <!-- <div class="bottom-img wow slideInRight" data-wow-delay="2.8s"><img src="<?php echo get_template_directory_uri(); ?>/images/mind-img.png"></div> -->
	  <div class="container">
		<div class="ban-text">
		  <h1><span class="heading-primary-main" data-wow-delay="0.8s"><span class="tag-text">Case Study</span></span></h1>
  
		</div>
  
	  </div>
	</div>
  
	<!-- Section 2 -->
	<section class="row-am project-list  pt-0" id="gallery">
	  <div class="container-fluid">
		<div id="image-gallery" class="casestudy-image-gallary">
		  <div class="row">
			<?php
			$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
  
			$all_args = array(
			  'post_type' => 'case-studies',
			  'post_status' => 'publish',
			  'paged' => $paged,
			  'order' => 'DESC',
			  'posts_per_page' => 4,
			);
			$the_query = new WP_Query($all_args);
  
			// The Loop
			if ($the_query->have_posts()) :
  
			  while ($the_query->have_posts()) : $the_query->the_post();
				$featured_img = get_the_post_thumbnail_url($the_query->ID);
				$image_id = get_post_thumbnail_id($the_query->ID);
				$image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', TRUE);
				$image_title = get_the_title($image_id);
			?>
				<div class="col-md-6 col-sm-12 image">
				  <div class="img-wrapper project-img">
					<a href="<?php the_permalink($the_query->ID); ?>"><img src="<?php echo $featured_img; ?>" class="img-responsive" alt="<?php echo $image_alt; ?>" title="<?php echo $image_title; ?>"></a>
				  </div>
				</div>
			<?php endwhile;
			  wp_reset_postdata();
			endif; ?>
  
			<div class="col-md-12">
  
			  <nav class="navigation pagination" role="navigation">
				<div class="nav-links">
				  <?php
  
				  $big = 999999999;
				  echo paginate_links(array(
					'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
					'format' => '?paged=%#%',
					'current' => max(1, get_query_var('paged')),
					'total' => $the_query->max_num_pages,
					'prev_text' => '<i class="icofont-rounded-left"></i>',
					'next_text' => '<i class="icofont-rounded-right"></i>'
				  ));
				  ?>
				</div>
			  </nav>
			</div>
		  </div><!-- End row -->
		</div><!-- End image gallery -->
	  </div><!-- End container -->
	</section>
  
	<section class="row-am contact-form home-contact pt-0 home-contact1" id="quote">
	  <div class="container">
		<form method="POST" name="form_contact2" id="form" action="<?php echo site_url(); ?>/feedback.php" enctype="multipart/form-data">
		  <h2 class="text-center">Request A Free Quote</h2>
		  <p class="text-center">Fill up form below, our team will get back soon</p>
		  <input type="hidden" name="config" value="0">
		  <div class="row">
			<div class="col-md-6">
			  <div class="form-group">
				<input type="text" class="form-control" name="name" id="name" placeholder="Name" onkeypress="return lettersOnly(event)">
			  </div>
			</div>
			<div class="col-md-6">
			  <div class="form-group">
				<input type="email" class="form-control" name="email" id="email" placeholder="example@gmail.com" onkeypress="return lettersOnly(event)">
			  </div>
			</div>
			<div class="col-md-6">
			  <div class="form-group">
				<input type="text" class="form-control" name="phone" id="phone" placeholder="Phone" onkeypress="return lettersOnly(event)">
			  </div>
			</div>
			<div class="col-md-6">
			  <div class="form-group">
				<input type="text" class="form-control" name="project" id="project" placeholder="Subject" onkeypress="return lettersOnly(event)">
			  </div>
			</div>
			<div class="col-md-12">
			  <div class="form-group">
				<textarea class="form-control" type="text" name="message" id="message" placeholder="Your message" onkeypress="return lettersOnly(event)"></textarea>
			  </div>
			</div>
		  </div>
  
		  <div class="row">
			<div class="col-md-12 m-0">
			  <div class="form-group">
				<div class="captcha">
				  <label>We respect your privacy</label>
				  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
				  <div class="g-recaptcha" data-sitekey="6Leys3oiAAAAAHrfuWTioORmjHWK7-CSCSrfYevi">
				  </div>
				  <span class="error"></span>
				</div>
			  </div>
			</div>
			<div class="col-md-12 m-0">
			  <div class="form-group">
				<div class="contact-submit"><input type="submit" value="SUBMIT" name="submit" id="submit" class="btn btn_pink"></div>
			  </div>
			</div>
		  </div>
		</form>
	  </div>
	</section>
  
	<section class="contacts">
	  <div class="container">
		<!-- <img src="images/contacts-img.png" class="img"> -->
		<h2>Let’s talk for new branding</h2>
		<div class="row">
		  <div class="col-md-3">
			<div class="box">
			  <div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/images/email-icon.png"></div>
			  <div class="text">
				<p><span>Email us</span><a href="mailto:info@buttercup.in">info@buttercup.in</a></p>
			  </div>
			</div>
		  </div>
		  <div class="col-md-3">
			<div class="box">
			  <div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/images/phone-icon.png"></div>
			  <div class="text">
				<p><span>Call us</span><a href="tel:+91-99250 34404">+91-99250 34404</a></p>
			  </div>
			</div>
		  </div>
		  <div class="col-md-6">
			<div class="box">
			  <div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/images/location-icon.png"></div>
			  <div class="text">
				<p><span>Our location</span>404, 4th Floor, 6th Avenue Building, Opp Textile Traders, Maharashtra Society, Ellisbridge, Ahmedabad, Gujarat 380009</p>
			  </div>
			</div>
		  </div>
		  <div class="col-md-3">
			<div class="box">
			  <div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/images/usa-icon.png"></div>
			  <div class="text">
				<p>61 W 62nd st Apt25E NY, <br> NY 10023</p>
			  </div>
			</div>
		  </div>
		  <div class="col-md-3">
			<div class="box">
			    <div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/images/usa-icon.png"></div>
			  <div class="text">
				<p>6545 Simon avenue, Frisco <br> Texas 75035</p>
			  </div>
			</div>
		  </div>
		  <div class="col-md-3">
			<div class="box">
			  <div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/images/canada-icon.png"></div>
			  <div class="text">
				<p>27 Scammel Road, Winnipeg <br> MB, R2N 4P7. Canada.</p>
			  </div>
			</div>
		  </div>
		  <div class="col-md-3">
			<div class="box">
			  <div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/images/uk-icon.png"></div>
			  <div class="text">
				<p>5 Wesley Drive,Egham, <br> tw20 9ja</p>
			  </div>
			</div>
		  </div>
		</div>
		<a id="btn-contact" class="btn" href="#" class="js-anchor-link" data-toggle="modal" data-target=".bd-example-modal-lg">Request a
			Free Quote <i class="icofont-long-arrow-right"></i></a>
	  </div>
	</section>
  
  <?php
  
  endwhile; // End of the loop.


get_footer();
