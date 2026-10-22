<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();?>

<!-- Content -->
<div id="content">

<?php 
/* Start the Loop */
while ( have_posts() ) :
	the_post();
	//get_template_part( 'template-parts/content/case_studies-single' );

?>
	<!-- Section 1 -->
	<div class="container-fluid home-ban ban-in branding-main-banner pb-0 casestudy-ban">
		<div class="container">
			<div class="ban-text">	
				<h1><span class="heading-primary-main" data-wow-delay="0.8s"><span class="tag-text"><?php the_title();?></span> </span></h1>
			</div>
		</div>
	</div>
  <section class="row-am  pt-5" id="gallery">
		<div class="container">
			<div class="case-study-pdf row">
			<?php if( have_rows('casestudy_image_repeater') ){
			while( have_rows('casestudy_image_repeater') ) { the_row();
			$image = get_sub_field('image');
			if (is_array($image) && isset($image['url'])) {
				$image = $image['url'];
			} elseif (is_numeric($image)) {
				$image = wp_get_attachment_url($image);
			}
			if (is_string($image)) {
				$image = preg_replace('#^https?://(www\.)?buttercup\.in/#i', '/', $image);
			}
			?>
				<div class="col-lg-12 pdf-box">
					<img src="<?php echo esc_url($image);?>" alt="<?php the_title_attribute();?>">
				</div>
				<?php }}?>			
			</div>
		</div>
	</section>

<!--	<section class="row-am contact-form home-contact pt-0 home-contact1" id="quote">-->
<!--    <div class="container">-->
<!--	<form method="POST" name="form_contact2" id="form" action="<?php echo site_url();?>/feedback.php" enctype="multipart/form-data">-->
<!--            <h2 class="text-center">Request A Free Quote</h2>-->
<!--            <p class="text-center">Fill up form below, our team will get back soon</p>-->
<!--            <input type="hidden" name="config" value="0">-->
<!--            <div class="row">-->
<!--                <div class="col-md-6">-->
<!--                    <div class="form-group">-->
<!--                        <input type="text" class="form-control" name="name" id="name" placeholder="Name"-->
<!--                            onkeypress="return lettersOnly(event)">-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-md-6">-->
<!--                    <div class="form-group">-->
<!--                        <input type="email" class="form-control" name="email" id="email"-->
<!--                            placeholder="example@gmail.com" onkeypress="return lettersOnly(event)">-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-md-6">-->
<!--                    <div class="form-group">-->
<!--                        <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone"-->
<!--                            onkeypress="return lettersOnly(event)">-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-md-6">-->
<!--                    <div class="form-group">-->
<!--                        <input type="text" class="form-control" name="project" id="project"-->
<!--                            placeholder="Subject" onkeypress="return lettersOnly(event)">-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-md-12">-->
<!--                    <div class="form-group">-->
<!--                        <textarea class="form-control" type="text" name="message" id="message"-->
<!--                            placeholder="Your message" onkeypress="return lettersOnly(event)"></textarea>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->

<!--            <div class="row">-->
<!--                <div class="col-md-12 m-0">-->
<!--                    <div class="form-group">-->
<!--                        <div class="captcha">-->
<!--                            <label>We respect your privacy</label>-->
<!--                            <script src="https://www.google.com/recaptcha/api.js" async defer></script>-->
<!--                            <div class="g-recaptcha" data-sitekey="6Ldz758UAAAAAPH1feKIjlsKkRK2XWSSIX3fqNT_">-->
<!--                            </div>-->
<!--							<span class="error"></span>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-md-12 m-0">-->
<!--                    <div class="form-group">-->
<!--                        <div class="contact-submit"><input type="submit" value="SUBMIT" name="submit"-->
<!--                                id="submit" class="btn btn_pink"></div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </form>-->
<!--    </div>-->
<!--</section>	-->
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
					<div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/images/phone-icon.png" alt="Phone Icon" title="Phone Icon"></div>
					<div class="text">
						<p><span>Call us</span><a href="tel:+91-99250 34404">+91-99250 34404</a></p>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="box">
					<div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/images/location-icon.png" alt="Location Icon" title="Location Icon"></div>
					<div class="text">
						<p><span>Our location</span>404, 4th Floor, 6th Avenue Building, Opp Textile Traders, Maharashtra Society, Ellisbridge, Ahmedabad, Gujarat 380009</p>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="box">
					<div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/images/usa-icon.png" alt="USA Icon" title="USA Icon"></div>
					<div class="text">
						<p>61 W 62nd st Apt25E NY, <br> NY 10023</p>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="box">
				    <div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/images/usa-icon.png" alt="USA Icon" title="USA Icon"></div>
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
					<div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/images/uk-icon.png" alt="UK Icon" title="UK Icon"></div>
					<div class="text">
						<p>5 Wesley Drive,Egham, <br> tw20 9ja</p>
					</div>
				</div>
			</div>
		</div>
		<a class="btn" href="#" class="js-anchor-link" data-toggle="modal" data-target=".bd-example-modal-lg">Request a Free Quote <i class="icofont-long-arrow-right"></i></a>
	</div>
</section> 	
<?php endwhile; // End of the loop.

get_footer();
