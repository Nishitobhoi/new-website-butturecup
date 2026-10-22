<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

$author_id = get_post_field( 'post_author',$post->ID);
?>

<!-- Section 1 -->
	<section class="row-am terms">
		<div class="container">
			<div class="row1 blog1">
		<div class="container">
			
			<div class="row">
				<div class="col-md-9">
					<!-- 1 -->
					<div class="blog-detail blog-list">
						<div class="blog-text blog-title">							
							<h1><a href="<?php the_permalink();?>"><?php the_title();?></a></h1>
							 <div class="post-meta">
      <?php
      $categories = get_the_category();
      if (!empty($categories)) {
        echo '<span class="post-category">' . esc_html($categories[0]->name) . '</span>';
      }
        $thumb_id  = get_post_thumbnail_id();
        $thumb_url = wp_get_attachment_image_url( $thumb_id, 'full' );
        $thumb_alt = get_post_meta( $thumb_id, '_wp_attachment_image_alt', true );
        $alt_attr    = $thumb_alt !== '' ?  esc_attr( $thumb_alt )  : 'Image';
      ?>
    </div>
						</div>						
						<div class="post-meta">
                          <p class="post-date"><i class="fas fa-calendar-alt"></i><?php echo get_the_date(); ?></p>
                          <p class="post-author"><i class="fas fa-user"></i><?php the_author(); ?></p>
                        </div>
						<div class="blog-img"><img src="<?php echo esc_url( $thumb_url ); ?>" alt="<?php echo esc_attr( $alt_attr ); ?>" title="<?php echo esc_attr( $alt_attr ); ?>"></div>
						<div class="blog-text"><?php the_content();?></div>	
                        <?php
$tags = get_the_tags();
if ($tags) {
    echo '<div class="post-tags"><br>';
    foreach ($tags as $tag) {
        echo '<span class="tag">' . esc_html($tag->name) . '</span><br>';
    }
    echo '</div>';
}
?>



						<div class="social-icon d-flex gap-3">
                <a href="https://www.facebook.com/buttercupadvertisingstudio" target="_blank"><i class="fab fa-facebook-f" style="color:#fff;"></i></a>
                <a href="https://www.instagram.com/buttercup.in/" target="_blank"><i class="fab fa-instagram " style="color:#fff;"></i></a>
                <a href="https://www.linkedin.com/company/buttercup-advertising-studio" target="_blank"><i class="fab fa-linkedin-in " style="color:#fff;"></i></a>
                <a href="https://www.youtube.com/channel/UC3BB-5MYwVldbIhZ64q-Gsw" target="_blank"><i class="fab fa-youtube " style="color:#fff;"></i></a>
              </div>
<div class="vc-author-box">
    <div class="vc-author-logo">
        <img src="https://buttercup.in/wp-content/themes/buttercup/images/logo.png" alt="Buttercuplogo">
    </div>

    <div class="vc-author-text">
        <h3 class="vc-author-name">Buttercup Advertising Studio
</h3>

        <p class="vc-author-desc">
            Buttercup Advertising Studio is a creative branding and advertising agency in Ahmedabad helping businesses build impactful brand identities, digital presence, packaging designs, and marketing strategies across India.
        </p>
    </div>
</div>
<style>
/* ===== AUTHOR BOX ===== */
.vc-author-box{
    margin:30px 0 20px;
    padding:20px;
    background:#fff;
    border:2px solid #EC3137;
    border-radius:18px;
    display:flex;
    align-items:center;
    gap:18px;
    box-shadow:0 8px 25px rgba(0,0,0,0.06);
    transition:0.3s ease;
}

.vc-author-box:hover{
    transform:translateY(-2px);
    box-shadow:0 12px 30px rgba(0,0,0,0.10);
}

/* ===== LOGO ===== */
.vc-author-logo{
    flex-shrink:0;
    background:#fff;
    border-radius:12px;
    padding:10px;
    border:1px solid rgba(236,49,55,0.15);
}

.vc-author-logo img{
    width:160px;
    max-width:100%;
    height:auto;
    display:block;
    object-fit:contain;
}

/* ===== CONTENT ===== */
.vc-author-text{
    flex:1;
}

.vc-author-name{
    font-size:24px;
    font-weight:700;
    margin:0 0 8px;
    color:#000;
    line-height:1.2;
}

.vc-author-name::after{
    content:"";
    display:block;
    width:60px;
    height:3px;
    background:#EC3137;
    margin-top:8px;
    border-radius:20px;
}

.vc-author-desc{
    margin:0;
    font-size:15px;
    line-height:1.8;
    color:#444;
}

/* ===== MOBILE RESPONSIVE ===== */
@media (max-width:767px){

    .vc-author-box{
        flex-direction:column;
        text-align:center;
        padding:18px 16px;
        gap:14px;
    }

    .vc-author-logo img{
        width:140px;
    }

    .vc-author-name{
        font-size:20px;
    }

    .vc-author-name::after{
        margin:8px auto 0;
    }

    .vc-author-desc{
        font-size:14px;
        line-height:1.7;
    }
}
</style>
					</div>
						
					</div>
				<div class="col-md-3">
					<div class="side-bar">
					    	<form action="#" method="post">
		               		<div class="input-group search">
		                   		<input type="text" class="form-control" placeholder="Search blog...">
		                 		<button class="btn search-btn" type="button">Go!</button>
		                	</div>
		             	</form>
		             	    <div class="container Request-Form">
  
        <div style="padding:40px 18px 0px;">
              <h2 class="text-center">Request Free Quote</h2>
            </div>
            
            <iframe
    src="https://api.leadconnectorhq.com/widget/form/viPqXMPe25kV2NCEJg6p"
    style="width:100%;height:100%;border:none;border-radius:3px"
    id="inline-viPqXMPe25kV2NCEJg6p" 
    data-layout="{'id':'INLINE'}"
    data-trigger-type="alwaysShow"
    data-trigger-value=""
    data-activation-type="alwaysActivated"
    data-activation-value=""
    data-deactivation-type="neverDeactivate"
    data-deactivation-value=""
    data-form-name="Request Free Quote -blog"
    data-height="443"
    data-layout-iframe-id="inline-viPqXMPe25kV2NCEJg6p"
    data-form-id="viPqXMPe25kV2NCEJg6p"
    title="Request Free Quote -blog"
    
        >
</iframe>
<script src="https://link.msgsndr.com/js/form_embed.js"></script>
    </div>
					    <div class="posts">
		             		<h3>Recent Post</h3>
		             		<ul>
		             			<?php     
									$post_args = array (
									'post_type' => 'post',
									'order' => 'ASC',
									'post_status'    => 'publish',
									'posts_per_page'   => 3
								);
								$query = new WP_Query( $post_args );
								// The Loop
								if ( $query->have_posts() ) : 
									while ( $query->have_posts() ) : $query->the_post(); ?>
		             			<li>
		             				<!-- <div class="posts-img left"><img src="<?php echo get_template_directory_uri();?>/images/post-img1.jpg" alt=""></div> -->
	                                <div class="posts-text">
	                   					<a href="<?php echo esc_url( get_permalink($query->ID) ); ?>" class="p-title"><?php echo get_the_title($query->ID);?></a>
	                               		<div class="p-date"><?php echo the_date('d M Y',$query->ID);?></div>
	                             	</div>
	                           	</li>
	                           	<?php 
									endwhile; wp_reset_postdata(); 
								endif; 
								?>          
		             		</ul>
		             	</div>
					
		             	
		             	<div class="blogs">
		                    <h3>Our Services</h3>
		                    <ul>
                        <li><a href="https://buttercup.in/brand-strategy-consulting-agency.php">Strategy</a></li>
                        <li><a href="https://buttercup.in/branding-agency-ahmedabad.php">Branding</a></li>
                        <li><a href="https://buttercup.in/brand-naming-agency-india.php">Brand Name Creation</a></li>
                        <li><a href="https://buttercup.in/digital-marketing.php">Digital Marketing</a></li>
                        <li><a href="https://buttercup.in/packaging-design-company-ahmedabad.php">Graphic Design</a></li>
                        <li><a href="https://buttercup.in/packaging-design-company-ahmedabad.php">Logo Design</a></li>
                        <li><a href="https://buttercup.in/packaging-design-company-ahmedabad.php">Packaging Design</a></li>
                        <li><a href="https://buttercup.in/packaging-design-company-ahmedabad.php">Brochure Design</a></li>
                        <li><a href="https://buttercup.in/exhibitionstalldesignindia.php">Exhibition and event design</a></li>
                        <li><a href="https://buttercup.in/webdesignservicesindia.php">Website Design</a></li>
                        <li><a href="https://buttercup.in/printmediaadvertisementindia.php">Print and media advertisement</a></li>
                        <li><a href="https://buttercup.in/animated-motion-graphics-video-agency.php">Motion Videos</a></li>
                    </ul>
		             	</div>
		             	
		             	<div class="category">
		                    <h3>Categories</h3>
		                    <ul>
		                    	<li>Creating New Brands with Complete Identity</li>
						<li>Unique Logo Designs and Corporate Identity</li>
						<li>Attractive Packaging Designs</li>
						<li>Brochure Designs for enhanced Corporate Image</li>
						<li>Social Media Marketing for multiple product categories</li>
						<li>Exhibition and Event Design for Industry Events</li>
						<li>Website Design with a professional touch</li> 
		                    </ul>
		             	</div>
		             	
		             	
					</div>
				</div>
			</div>
			
		</div>
  	</div>	</div>	
  	</section>
  	<style>
  	    .home-usp {
    padding: 50px 0 50px 0 !important;
    display: inline-block;
    width: 100%;
}
.container.Request-Form {
    padding:10px !important;
    position: relative;
    z-index: 0;
    background: #f3f3f3;
    border-radius: 18px;
}
  	</style>
  	<section class="row-am home-usp">
			<div class="container">
				<ul id="counter">
					<li>
						<h3>
							<div class="counter-count counter" data-count="400">400</div><span>Projects Completed</span>
						</h3>
						<img src="https://buttercup.in/images/project-bg.png" alt="Project background" title="Project background" class="bg-img">
					</li>
					<li>
						<h3>
							<div class="counter-count counter" data-count="30">30</div><span>Services industries</span>
						</h3>
						<img src="https://buttercup.in/images/service-bg.png" alt="Service background" title="Service background" class="bg-img">
					</li>
					<li>
						<h3>
							<div class="counter-count counter" data-count="50">50</div><span>Products Categories</span>
						</h3>
						<img src="https://buttercup.in/images/categories-bg.png" alt="Categories background" title="Categories background" class="bg-img">
					</li>
					<li>
						<h3>
							<div class="counter-count counter" data-count="150">150</div><span>Happy Clients</span>
						</h3>
						<img src="https://buttercup.in/images/client-bg2.png" class="bg-img" alt="Buttercup Advertising Studio" title="Buttercup Advertising Studio">
					</li>
					<li class="ratingusp">
						<h3>4.8<sub>/5</sub> <span><img src="https://buttercup.in/images/rating-img.png" alt="Rating image" title="Rating image"> </span></h3>
						<img src="https://buttercup.in/images/google-img.png" alt="Google image" title="Google image" class="bg-img">
					</li>
				</ul>
			</div>
		</section>
		<div class="contact-strip" style="margin-bottom:50px;">

  <!-- brand watermark SVG -->
  <svg class="strip-wm" viewBox="0 0 720 110" xmlns="http://www.w3.org/2000/svg" width="720" height="110" aria-hidden="true">
    <text y="76" font-size="50" letter-spacing="3">BUTTERCUP</text>
    <text x="360" y="104" font-size="18" letter-spacing="20" text-anchor="middle">Advertising Studio</text>
  </svg>

  <div class="strip-content">
    <div class="strip-badge">
      <span class="dot"></span>TRUSTED BRANDING COMPANY IN AHMEDABAD
    </div>
    <h2>Smart Branding Solutions <br><span>for Modern Businesses</span></h2>
    <p>Strong branding helps businesses improve recognition, customer loyalty, and market visibility. Buttercup Advertising Studio creates branding strategies and creative designs that help Indian businesses stand out in competitive industries.</p>
    <div class="strip-trust">
      <div class="trust-item">Creative Branding Strategies</div>
      <div class="trust-item">Modern Advertising Solutions</div>
      <div class="trust-item">Consistent Brand Communication</div>
    </div>
  </div>

  <div class="strip-action">
      <a class="quoterequest btn-cta" href="#" data-toggle="modal" data-target=".bd-example-modal-lg">Request a free quote</a>
      <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
    </a>
  </div>

</div>
<style>
    .contact-strip {
    width: 100%;
    max-width: 1200px;
    background: #000;
    border-radius: 6px;
    padding: 48px 64px 44px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 36px;
    position: relative;
    overflow: hidden;
    box-shadow: 0 12px 48px rgba(6,8,31,.28);
    border-radius: 60px;
    margin:0 auto;
  }

  /* teal left accent — hidden when fully rounded */
  .contact-strip::before {
    content: '';
    position: absolute;
    left: 0; top: 0; bottom: 0;
    width: 0;
    background: transparent;
  }

  /* ── BRAND WATERMARK ── */
  .strip-wm {
    position: absolute;
    right: 175px;
    top: 36%;
    transform: translateY(-50%);
    pointer-events: none;
    user-select: none;
    opacity: .1;
    line-height: 1;
  }
  .strip-wm text {
    font-family: Verdana, sans-serif;
    font-weight: 700;
    fill: #ffffff;
  }

  /* badge */
  .strip-badge {
    display: inline-flex;
    align-items: center;
    gap: 7px;
    background: rgba(104,174,199,.15);
    border: 1px solid #FCBD2C;
    color: #FCBD2C;
    font-family: Verdana, sans-serif;
    font-size: 9px;
    font-weight: 700;
    letter-spacing: .12em;
    text-transform: uppercase;
    padding: 5px 13px;
    border-radius: 2px;
    margin-bottom: 14px;
  }
  .strip-badge .dot {
    width: 6px; height: 6px;
    background:  #FCBD2C;
    border-radius: 50%;
    animation: blink 1.8s infinite;
  }
  @keyframes blink { 0%,100%{opacity:1} 50%{opacity:.25} }

  .strip-content { position: relative; z-index: 1; }

  .strip-content h2 {
    font-family: Verdana, sans-serif;
    font-size: clamp(18px, 2.6vw, 26px);
    font-weight: 700;
    color: #fff !important;
    line-height: 1.25;
    margin-bottom: 10px;
    letter-spacing: -.01em;
  }
  .strip-content h2 span { color: #FCBD2C; }

  .strip-content p {
    font-family: Verdana, sans-serif;
    font-size: 13px;
    color: #fff;
    max-width: 420px;
    line-height: 1.7;
  }

  /* trust row */
  .strip-trust {
    display: flex;
    align-items: center;
    gap: 20px;
    margin-top: 18px;
    flex-wrap: wrap;
  }
  .trust-item {
    display: flex;
    align-items: center;
    gap: 6px;
    font-family: Verdana, sans-serif;
    font-size: 10px;
    color: #fff;
  }
  .trust-item::before {
    content: '✓';
    color: #FCBD2C;
    font-size: 11px;
    font-weight: 700;
  }

  .strip-action { position: relative; z-index: 1; flex-shrink: 0; }

  .btn-cta {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    background: #9780D0;
    color: #fff;
    /* font-family: Verdana, sans-serif; */
    font-weight: 500;
    font-size: 16px;
    padding: 16px 30px;
    border-radius: 50px;
    border: none;
    cursor: pointer;
    white-space: nowrap;
    letter-spacing: .01em;
    transition: background .18s, transform .18s, box-shadow .18s;
    /* box-shadow: 0 6px 22px rgba(91,102,226,.35); */
}
  .btn-cta:hover {
    background: #FCBD2C;
    transform: translateY(-2px);
    color:#000;
  }
  .btn-cta svg { flex-shrink: 0; }
  

  .demo-label {
    font-size: 10px;
    font-weight: 700;
    letter-spacing: .1em;
    text-transform: uppercase;
    color: var(--mid-grey);
  }
    .single-post-layout2{
        display: flex;
            flex-direction: column;
            align-items: center;
            max-width:80%;
            margin: auto;
    }
    </style>
			<!-- Bootstrap core JavaScript
================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
	<script>
		window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')
	</script>

	<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery.touchswipe/1.6.4/jquery.touchSwipe.min.js'></script>

	
	<script>
		new WOW().init();
	</script>
	<script src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>
	<script src="https://www.google.com/recaptcha/api.js"></script>


	<script>
		$(document).ready(function() {
			$(".testimonial .indicators li").click(function() {
				var i = $(this).index();
				var targetElement = $(".testimonial .tabs li");
				targetElement.eq(i).addClass('active');
				targetElement.not(targetElement[i]).removeClass('active');
			});
			$(".testimonial .tabs li").click(function() {
				var targetElement = $(".testimonial .tabs li");
				targetElement.addClass('active');
				targetElement.not($(this)).removeClass('active');
			});
		});
		$(document).ready(function() {
			$(".slider .swiper-pagination span").each(function(i) {
				$(this).text(i + 1).prepend("0");
			});
		});
	</script>
	<script>
		$('.js-anchor-link').click(function(e) {
			e.preventDefault();
			var target = $($(this).attr('href'));
			if (target.length) {
				var scrollTo = target.offset().top;
				$('body, html').animate({
					scrollTop: scrollTo + 'px'
				}, 800);
			}
		});
	</script>
	<script>
		$(document).ready(function() {
			var windowsize = $(window).width();
			var containerSize = $('.right').width();
			var maxSlides = 3;
			var slideWidth = containerSize / 3;
			if (windowsize >= 768) {
				maxSlides = 3;
				slideWidth = containerSize / 3;
			} else if (windowsize < 768 && windowsize >= 480) {
				maxSlides = 1;
				slideWidth = containerSize / 1;
			} else if (windowsize < 480) {
				maxSlides = 1;
				slideWidth = containerSize / 1;
			}
			var bx = $('.bxslider').bxSlider({
				pager: true,
				nextText: '',
				prevText: '',
				minSlides: 1,
				slideMargin: 25,
				maxSlides: maxSlides,
				slideWidth: slideWidth,
				auto: true,
				autoControls: true,
				stopAutoOnClick: true,
				moveSlides: 1,
				touchEnabled: false
			});

			/* On BxSlider resize Code */
			$(window).resize(function() {

				var windowsize = $(window).width();
				var containerSize = $('.right').width();
				var maxSlides = 3;

				var slideWidth = containerSize / 3;


				if (windowsize >= 768) {
					maxSlides = 3;
					slideWidth = containerSize / 3;
				} else if (windowsize < 768 && windowsize >= 480) {
					maxSlides = 1;
					slideWidth = containerSize / 1;
				} else if (windowsize < 480) {
					maxSlides = 1;
					slideWidth = containerSize / 1;
				}

				bx.destroySlider();
				bx = $('.bxslider').bxSlider({
					pager: true,
					nextText: '',
					prevText: '',
					minSlides: 1,
					slideMargin: 25,
					maxSlides: maxSlides,
					slideWidth: slideWidth,
					auto: true,
					autoControls: true,
					stopAutoOnClick: true,
					moveSlides: 1,
					touchEnabled: false
				});
			});
		});
	</script>
	<script>
		$(document).ready(function() {
			var windowsize = $(window).width();
			var containerSize = $('.casestudy .container').width();
			var maxSlides = 3;
			var slideWidth = containerSize / 3;
			if (windowsize >= 768) {
				maxSlides = 3;
				slideWidth = containerSize / 3;
			} else if (windowsize < 768 && windowsize >= 480) {
				maxSlides = 1;
				slideWidth = containerSize / 1;
			} else if (windowsize < 480) {
				maxSlides = 1;
				slideWidth = containerSize / 1;
			}
			var bx = $('.bxslider1').bxSlider({
				pager: true,
				nextText: '',
				prevText: '',
				minSlides: 1,
				slideMargin: 25,
				maxSlides: maxSlides,
				slideWidth: slideWidth,
				auto: true,
				autoControls: true,
				stopAutoOnClick: true,
				moveSlides: 1,
				touchEnabled: false
			});

			/* On BxSlider resize Code */
			$(window).resize(function() {

				var windowsize = $(window).width();
				var containerSize = $('.casestudy .container').width();
				var maxSlides = 3;

				var slideWidth = containerSize / 3;


				if (windowsize >= 768) {
					maxSlides = 3;
					slideWidth = containerSize / 3;
				} else if (windowsize < 768 && windowsize >= 480) {
					maxSlides = 1;
					slideWidth = containerSize / 1;
				} else if (windowsize < 480) {
					maxSlides = 1;
					slideWidth = containerSize / 1;
				}

				bx.destroySlider();
				bx = $('.bxslider1').bxSlider({
					pager: true,
					nextText: '',
					prevText: '',
					minSlides: 1,
					slideMargin: 25,
					maxSlides: maxSlides,
					slideWidth: slideWidth,
					auto: true,
					autoControls: true,
					stopAutoOnClick: true,
					moveSlides: 1,
					touchEnabled: false
				});
			});
		});
	</script>
	<script>
		jQuery(document).ready(function() {

			$.validator.addMethod("alpha", function(value, element) {
				var val = $.trim(value);
				return this.optional(element) || val == val.match(/^[a-zA-Z\s]+$/);
			});

			$.validator.addMethod("customemail",
				function(value, element) {
					var email = $.trim(value);
					return /^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/.test(email);
				},

			);

			//  $.validator.addMethod("phonenumber", function(value, element) {

			//  	phone_number = $.trim(value.replace(/\s+/g, ""));
			//    return this.optional(element) || phone_number.length > 9 && 
			//    phone_number.match(/^(\+?1-?)?(\([2-9]\d{2}\)|[2-9]\d{2})-?[2-9]\d{2}-?\d{4}$/);

			// });

			jQuery.validator.addMethod("phonenumber", function(phonenumber, element) {
				phone_number1 = phonenumber.replace(/\s+/g, "");
				var phone_number = $.trim(phone_number1);
				return this.optional(element) || phone_number.length > 9 &&
					phone_number.match(/^((\+[1-9]{1,4}[ \-]*)|(\([0-9]{2,3}\)[ \-]*)|([0-9]{2,4})[ \-]*)*?[0-9]{3,4}?[ \-]*[0-9]{3,4}?$/);
			});

			function recaptchaCallback() {
				jQuery('#hiddenRecaptcha').valid();
			};

			$("form[name='form_contact']").validate({
				ignore: ".ignore",
				rules: {

					name: {
						required: true,
						alpha: true,
						number: false,
					},

					company: {
						required: true,
						alpha: true,
						number: false,
					},


					email: {
						required: {
							depends: function() {
								$(this).val($.trim($(this).val()));
								return true;
							}
						},
						customemail: true
					},

					phone: {
						required: true,
						phonenumber: true,
						minlength: 10,
						maxlength: 20
					},

					lastname: {
						required: true,
						alpha: true,
						number: false,
					},

					legalname: {
						required: true,
						alpha: true,
						number: false,
					},

					businesstype: {
						required: true,
						alpha: true,
						number: false,
					},

					mailadress: {
						required: {
							depends: function() {
								$(this).val($.trim($(this).val()));
								return true;
							}
						},
						customemail: true
					},

					"hiddenRecaptcha": {
						required: function() {
							if (grecaptcha.getResponse() == '') {
								return true;
							} else {
								return false;
							}
						}
					}

				},
				messages: {
					name: {
						required: "First Name is required",
						alpha: "Name is required",
						minlength: "Name is required",
					},
					company: {
						required: "company Name is required",
						alpha: "company Name is required",
						minlength: "company Name is required",
					},

					email: {
						required: "Email id is required",
						customemail: "Email id is required",
					},

					phone: {
						required: "Phone number is required",
						phonenumber: "Phone number is required",
						minlength: "Phone number is required",
						maxlength: "Phone number is required",
					},
					lastname: "Last Name is required",
					legalname: "Leagal Name is required",
					businesstype: "Business type is required",
					mailadress: "Mail Address is required",
					hiddenRecaptcha: "Captcha is required"
				},

				submitHandler: function(form) {

					// if (grecaptcha.getResponse()) {
					form.submit();
					// } else {
					// 	$('#hiddenRecaptcha').html('');
					//    	$('#hiddenRecaptcha').append('<p class="error">Captcha is required</p>');
					// }
				}
			});

		});
	</script>

	<script type="text/javascript">
		function lettersOnly() {
			var charCode = event.keyCode;
			if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123) || charCode == 8)
				return true;
			else
				return false;
		}
	</script>
	<script>
		$(document).ready(function() {
			$('.bxslider3').bxSlider({
				auto: true,
				autoControls: true,
				stopAutoOnClick: true,
				touchEnabled: false
			});
		});
	</script>
	<script>
		$(document).ready(function() {
			$('.our-clients-slider').bxSlider({
				maxSlides: 1,
				minSlides: 6

			});
		});
	</script>
	<script>
		var a = 0;
		$(window).scroll(function() {

			var oTop = $('#counter').offset().top - window.innerHeight;
			if (a == 0 && $(window).scrollTop() > oTop) {
				$('.counter-count').each(function() {
					var $this = $(this),
						countTo = $this.attr('data-count');
					$({
						countNum: $this.text()
					}).animate({
							countNum: countTo
						},

						{

							duration: 1000,
							easing: 'swing',
							step: function() {
								$this.text(Math.floor(this.countNum));
							},
							complete: function() {
								$this.text(this.countNum);
								//alert('finished');
							}

						});
				});
				a = 1;
			}

		});
	</script>
		<link rel="stylesheet" href="https://buttercup.in/css/stylehome.css">
<!--	  <section class="row-am contact-form home-contact pt-0 home-contact1" id="quote">-->
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
<!--</section>		-->
<!--	  	<section class="row-am contact-form home-contact pt-0 home-contact1" id="quote">-->
<!--    <div class="container Request-Form">-->
  
<!--        <div style="padding:40px 18px 0px;">-->
<!--              <h2 class="text-center">Request Free Quote home</h2>-->
<!--              <p class="text-center">Fill up the form below, our team will get back soon</p>-->
<!--            </div>-->
            
<!--            <iframe-->
<!--  src="https://api.leadconnectorhq.com/widget/form/z2Q0d4dOLInEId4o54hV"-->
<!--  style="width:100%;height:100%;border:none;border-radius:3px"-->
<!--  id="inline-z2Q0d4dOLInEId4o54hV" -->
<!--  data-layout="{'id':'INLINE'}"-->
<!--  data-trigger-type="alwaysShow"-->
<!--  data-trigger-value=""-->
<!--  data-activation-type="alwaysActivated"-->
<!--  data-activation-value=""-->
<!--  data-deactivation-type="neverDeactivate"-->
<!--  data-deactivation-value=""-->
<!--  data-form-name="Request Free Quote - footer"-->
<!--  data-height="504"-->
<!--  data-layout-iframe-id="inline-z2Q0d4dOLInEId4o54hV"-->
<!--  data-form-id="z2Q0d4dOLInEId4o54hV"-->
<!--  title="Request Free Quote - footer"-->
<!--      >-->
<!--</iframe>-->
<!--<script src="https://link.msgsndr.com/js/form_embed.js"></script>-->
<!--    </div>-->
<!--</section>-->
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
						<p><span>Our location</span>6th Floor, Karma Tower, Paldi, Ahmedabad - 380007</p>
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
		<div class="btn"><a href="#" class="js-anchor-link" data-toggle="modal" data-target=".bd-example-modal-lg">Request a Free Quote <i class="icofont-long-arrow-right"></i></a> </div>
	</div>
</section> 			