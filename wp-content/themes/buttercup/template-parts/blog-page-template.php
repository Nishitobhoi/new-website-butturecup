<?php
/**
 * Template Name: blog Listing Template 
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();

/* Start the Loop */
while ( have_posts() ) :
	the_post();?>

  <div class="container-fluid home-ban ban-in pb-0">
    <!-- <div class="bottom-img wow slideInRight" data-wow-delay="2.8s"><img src="images/mind-img.png"></div> -->
    <div class="container">
      <div class="ban-text mb-0"> 
        <h1><span class="heading-primary-main" data-wow-delay="0.8s"><span class="tag-text"><?php the_title();?></span></span></h1>
        <p>Here are a few stories about our inspirations, designs and work. Each design that we craft has a deep value and meaning hidden behind it. The following stories show how we put these core values in a beautiful picture that goes on to become a <br> brand’s prime identity.</p>

      </div>
      
    </div>
  </div>
  <!-- Section 2 -->  
  <section class="row-am  pt-5" id="gallery">
<div class="container">
  <div id="image-gallery">
    <div class="row">
      <?php 
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $all_args = array(  
          'post_type' => 'post',
          'post_status' => 'publish',
          'paged' => $paged,
          'order' => 'DESC',
          'posts_per_page' => 6,
        );
        $the_query = new WP_Query( $all_args ); 

        if ( $the_query->have_posts() ) : 
          while ( $the_query->have_posts() ) : $the_query->the_post(); 
            $featured_img = get_the_post_thumbnail_url($the_query->ID, 'medium');
            $image_id = get_post_thumbnail_id($the_query->ID);
            $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true);
            $title = get_the_title($the_query->ID);
            $categories = get_the_category();
            $image_alt = !empty($image_alt) ? esc_attr($image_alt) : 'Blog Image';
      ?>
      <div class="col-lg-4 col-md-6 col-sm-12 mb-4">

        <div class="custom-card">
          <a href="<?php echo get_the_permalink(); ?>">
            <img src="<?php echo $featured_img; ?>" alt="<?php echo $image_alt; ?>" title="<?php echo $image_alt; ?>" class="img-fluid">
          </a>
          <div class="custom-card-body">
            <?php if (!empty($categories)) : ?>
              <p class="post-category"><?php echo esc_html($categories[0]->name); ?></p>
            <?php endif; ?>
            <h5 class="post-title"><a href="<?php echo get_the_permalink(); ?>"><?php echo wp_trim_words($title, 7, '...'); ?></a></h5>
            <p class="post-excerpt"><?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?></p>

            <div class="post-meta">
              <p class="post-date"><i class="fas fa-calendar-alt"></i><?php echo get_the_date(); ?></p>
              <p class="post-author"><i class="fas fa-user"></i><?php the_author(); ?></p>
            </div>

            <div class="social-icons">
              <a href="https://www.facebook.com/buttercupadvertisingstudio" target="_blank"><i class="fab fa-facebook-f"></i></a>
              <a href="https://www.instagram.com/buttercup.in/" target="_blank"><i class="fab fa-instagram"></i></a>
              <a href="https://www.linkedin.com/company/buttercup-advertising-studio" target="_blank"><i class="fab fa-linkedin-in"></i></a>
              <a href="https://www.youtube.com/channel/UC3BB-5MYwVldbIhZ64q-Gsw" target="_blank"><i class="fab fa-youtube"></i></a>
            </div>
            <div>
                <a href="<?php the_permalink(); ?>" class="btn btn-primary read-more-btn">Read More</a>
            </div>
          </div>
        </div>
      </div>
      <?php endwhile; wp_reset_postdata(); endif; ?>

      <div class="col-md-12">
  <nav class="navigation pagination" role="navigation">
    <div class="nav-links">
      <?php 
        $big = 999999999; 
        echo paginate_links( array(
          'base' => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
          'format' => '?paged=%#%',
          'current' => max( 1, get_query_var('paged') ),
          'total' => $the_query->max_num_pages,
          'prev_text' => '<i class="icofont-rounded-left"></i>',
          'next_text' => '<i class="icofont-rounded-right"></i>',
        ) ); 
      ?>
    </div>
  </nav>
</div>

    </div>
  </div>
</div>

<style>

.navigation.pagination {
  text-align: center;
  margin: 20px 0;
}

.nav-links {
  display: inline-block;
  list-style: none;
}

.page-numbers {
  font-size: 16px;
  color: #EC3137 !important;
  padding: 8px 12px;
  margin: 0 5px;
  border: 1px solid #EC3137;
  border-radius: 5px;
  text-decoration: none;
  transition: all 0.3s ease;
}

.page-numbers:hover {
  background-color: #EC3137;
  color: #fff !important;
}

.page-numbers.current {
  background-color: #EC3137;
  color: #fff !important;
  font-weight: 700;
}

.page-numbers.dots {
  color: #EC3137;
}

.next.page-numbers {
  font-size: 18px;
  color: #EC3137;
  border: none;
}

.next.page-numbers:hover {
  background-color: #EC3137;
  color: #fff;
  transform: scale(1.1);
}

.page-numbers:focus, .next.page-numbers:focus {
  outline: none;
}

.read-more-btn {
  display: inline-block;
  padding: 5px 10px;
  margin-top: 15px;
  background-color: #EC3137;
  color: #fff;
  border: none;
  border-radius: 5px;
  text-decoration: none;
  font-weight:500;
  transition: all 0.3s;
}

.read-more-btn:hover {
  background-color: #c0282d;
  transform: scale(1.1);
}
.post-excerpt {
  font-size: 14px;
  color: #555;
  line-height: 1.5em;
  height: 3em; 
  overflow: hidden;
  text-overflow: ellipsis;
  margin-bottom: 15px;
}

.custom-card {
  background: #fff;
  border-radius: 10px;
  box-shadow: 0 8px 25px rgba(0, 0, 0, 0.08);
  overflow: hidden;
  transition: all 0.3s ease-in-out;
}

.custom-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 15px 30px rgba(236, 49, 55, 0.2);
}

.custom-card img {
  width: 100%;
  height: auto;
  display: block;
}

.custom-card-body {
  padding: 20px;
  text-align: left;
}

.post-category {
  font-size: 15px;
  color: #EC3137;
  margin-bottom: 8px;
  font-weight: 600;
}

.post-title {
  font-size: 18px;
  font-weight: 700;
  color: #333;
  margin-bottom: 15px;
}

.post-title a {
  color: #333;
  text-decoration: none;
}

.post-meta {
  font-size: 14px;
  color: #777;
  text-align: left;
  margin-bottom: 15px;
}

.post-meta p {
  margin: 5px 0;
}

.post-meta i {
  color: #EC3137;
  margin-right: 8px;
}

.social-icons {
  display: flex;
  justify-content: left;
  gap: 15px;
}

.social-icons a {
  background: #EC3137;
  color: #fff;
width: 30px;
    height: 30px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  transition: all 0.3s;
  font-size: 15px;
}

.social-icons a:hover {
  background: #c0282d;
  transform: scale(1.1);
}
</style>
<!--<section class="row-am contact-form home-contact pt-0 home-contact1" id="quote">-->
<!--    <div class="container">-->
<!--        <form method="post" name="form_contact_common" id="form" action="<?php echo site_url();?>/feedback.php" enctype="multipart/form-data">-->
<!--            <h2 class="text-center">Request A Free Quote</h2>-->
<!--            <p class="text-center">Fill up form below, our team will get back soon</p>-->
<!--            <input type="hidden" name="config" value="0">-->
<!--            <div class="row">-->
<!--                <div class="col-md-6">-->
<!--                    <div class="form-group">-->
<!--                        <input type="text" class="form-control" name="name" id="name" placeholder="Name"-->
<!--                            onkeypress="return allowLettersOnly(event)">-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-md-6">-->
<!--                    <div class="form-group">-->
<!--                        <input type="email" class="form-control" name="email" id="email" placeholder="example@gmail.com"-->
<!--                            onkeypress="return allowSpecialCharacters(event)">-->
<!--                    </div>-->
<!--                </div>-->

<!--                <div class="col-md-6">-->
<!--                    <div class="form-group">-->
<!--                        <input type="tel" class="form-control" name="phone" id="phone" placeholder="Phone"-->
<!--                            onkeypress="return allowNumbersOnly(event)">-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-md-6">-->
<!--                    <div class="form-group">-->
<!--                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"-->
<!--                            onkeypress="return allowLettersOnly(event)">-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-md-12">-->
<!--                    <div class="form-group">-->
<!--                        <textarea class="form-control" type="text" name="message" id="message"-->
<!--                            placeholder="Your message" onkeypress="return allowLettersOnly(event)"></textarea>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->

<!--            <div class="row">-->
                <!-- <div class="col-md-12 m-0">
<!--                    <div class="form-group">-->
<!--                        <div class="captcha">-->
<!--                            <label>We respect your privacy</label>-->
<!--                            <script src="https://www.google.com/recaptcha/api.js" async defer></script>-->
<!--                            <div class="g-recaptcha" data-sitekey="6Leys3oiAAAAAHrfuWTioORmjHWK7-CSCSrfYevi">-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div> -->

<!--                <div class="col-md-12 m-0">-->
<!--                    <div class="form-group">-->
<!--                        <div class="captcha">-->
                            
<!--                            <label>We respect your privacy</label>-->
<!--                            <div class="g-recaptcha" data-sitekey="6Ldz758UAAAAAPH1feKIjlsKkRK2XWSSIX3fqNT_"-->
<!--                            id="RecaptchaField2" data-callback="correctCaptcha_form2" style="margin-left:50px">-->
<!--                            </div>-->
<!--                            <input type="hidden" class="hiddenRecaptcha required" name="form2_hiddenRecaptcha"-->
<!--                                id="form2_hiddenRecaptcha">-->
<!--                            <div id='html_element'></div>-->
<!--                            <small style="display: none; margin-right:584px;" data-bv-validator="notEmpty"-->
<!--                                data-bv-validator-for="g-recaptcha" id="g-recaptcha-error" class="help-block">-->
<!--                                Please verify you are humann!.-->
<!--                            </small>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->

<!--                <div class="col-md-12 m-0">-->
<!--                    <div class="form-group">-->
<!--                        <div class="contact-submit"><input type="submit" value="SUBMIT" name="submit" id="submit"-->
<!--                                class="btn btn_pink"></div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </form>-->
<!--    </div>-->
<!--</section>-->

<section class="row-am contact-form home-contact pt-0 home-contact1" id="quote">
    <div class="container Request-Form">
  
        <div style="padding:40px 18px 0px;">
              <h2 class="text-center">Request Free Quote home</h2>
              <p class="text-center">Fill up the form below, our team will get back soon</p>
            </div>
            
            <iframe
  src="https://api.leadconnectorhq.com/widget/form/z2Q0d4dOLInEId4o54hV"
  style="width:100%;height:100%;border:none;border-radius:3px"
  id="inline-z2Q0d4dOLInEId4o54hV" 
  data-layout="{'id':'INLINE'}"
  data-trigger-type="alwaysShow"
  data-trigger-value=""
  data-activation-type="alwaysActivated"
  data-activation-value=""
  data-deactivation-type="neverDeactivate"
  data-deactivation-value=""
  data-form-name="Request Free Quote - footer"
  data-height="504"
  data-layout-iframe-id="inline-z2Q0d4dOLInEId4o54hV"
  data-form-id="z2Q0d4dOLInEId4o54hV"
  title="Request Free Quote - footer"
      >
</iframe>
<script src="https://link.msgsndr.com/js/form_embed.js"></script>
    </div>
</section>
  <section class="contacts">
	<div class="container">
		<!-- <img src="images/contacts-img.png" class="img"> -->
		<h2>Let’s talk for new branding</h2>
		<div class="row">
			<div class="col-md-3">
				<div class="box">
					<div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/images/email-icon.png" alt="Email icon" title="Email icon"></div>
					<div class="text">
						<p><span>Email us</span><a href="mailto:info@buttercup.in">info@buttercup.in</a></p>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="box">
					<div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/images/phone-icon.png" alt="Phone icon" title="Phone icon"></div>
					<div class="text">
						<p><span>Call us</span><a href="tel:+91-99250 34404">+91-99250 34404</a></p>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="box">
					<div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/images/location-icon.png" alt="Location icon" title="Location icon"></div>
					<div class="text">
						<p><span>Our location</span>404, 4th Floor, 6th Avenue Building, Opp Textile Traders, Maharashtra Society, Ellisbridge, Ahmedabad, Gujarat 380009</p>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="box">
					<div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/images/usa-icon.png" alt="USA icon" title="USA icon"></div>
					<div class="text">
						<p>61 W 62nd st Apt25E NY, <br> NY 10023</p>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="box">
				    <div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/images/usa-icon.png" alt="USA icon" title="USA icon"></div>
					<div class="text">
						<p>6545 Simon avenue, Frisco <br> Texas 75035</p>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="box">
					<div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/images/canada-icon.png" alt="Canada icon" title="Canada icon"></div>
					<div class="text">
						<p>27 Scammel Road, Winnipeg <br> MB, R2N 4P7. Canada.</p>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="box">
					<div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/images/uk-icon.png" alt="UK icon" title="UK icon"></div>
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
<style>
    a#btn-contact{
        color:#000;
    }
    a#btn-contact:hover{
        color:#fff;
    }
</style>
<?php 

endwhile; // End of the loop.

get_footer();
