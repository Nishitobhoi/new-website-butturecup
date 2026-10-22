
<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>
<head class="test">
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

<meta name="author" content="">
<link rel="icon" href="<?php echo get_template_directory_uri();?>/images/favicon.png">
<meta property="og:image" content="https://buttercup.in/images/logo.png">

<!-- Bootstrap core CSS -->
<link href="<?php echo get_template_directory_uri();?>/css/style.css" rel="stylesheet">
<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/full-menu.css">
<link rel="stylesheet" media="all" type="text/css" href="<?php echo get_template_directory_uri();?>/fontawesome-free-5.0.7/css/fontawesome-all.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet"> 
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100&display=swap" rel="stylesheet"> 
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/icofont/icofont.min.css">
<?php wp_head(); ?>
<script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "Organization",
  "url": "https://buttercup.in/",
  "logo": "https://buttercup.in/images/logo.png"
}
</script>
<script type="application/ld+json">
{
    "@context": "www.schema.org",
    "@type": "Organization",
    "name": "Buttercup Advertising Studio",
    "url": "https://buttercup.in/",
    "logo": "https://buttercup.in/images/logo.png",
    "sameAs": [
        "https://www.facebook.com/buttercupadvertisingstudio",
        " https://www.instagram.com/buttercup.in/",
        "https://www.youtube.com/channel/UC3BB-5MYwVldbIhZ64q-Gsw",
        "https://www.linkedin.com/company/buttercup-advertising-studio"
    ]
}
</script>
<script type="application/ld+json">
        {
                "@context" : "http://schema.org",
                "@type" : "LocalBusiness",
                "name" : "Buttercup Advertising Studio",
                "image" : "https://buttercup.in/images/logo.png",
                "telephone" : "+91 99250 34404",
                "email" : "info@buttercup.in",
                "address" : {
                "@type" : "PostalAddress", 
                "streetAddress" : "404, 4th Floor, 6th Avenue Building, Opp Textile Traders, Maharashtra Society, Ellisbridge",
                "addressLocality" : "Ahmedabad",
                "addressCountry" : "India",
                "postalCode" : "380009"
                },
                "openingHoursSpecification": [
        {
            "@type": "OpeningHoursSpecification",
            "dayOfWeek": [
                "Monday",
                "Tuesday",
                "Wednesday",
                "Thursday",
                "Friday",
                "Saturday"
            ],
            "opens": "10:00",
            "closes": "19:00"
        }

    ],
                "url" : "https://buttercup.in/"
        }
</script>
<script type="application/ld+json">
{
  "@context": "https://schema.org/",
  "@type": "Product",
  "name": "Buttercup Advertising Studio",
  "image": "https://www.buttercup.in/images/logo.png",
  "description": "Buttercup Advertising Studio is a top branding agency and brand building company in India. Being a leading branding agency in India, we offer digital-focused design, global strategic corporate branding, and creative services.",
  "brand": {
    "@type": "Brand",
    "name": "Buttercup"
  },
  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "4.9",
   "bestRating": "5",
   "reviewCount": "137"
  }
}
</script>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TF26JM44');</script>
<!-- End Google Tag Manager -->


</head>

<body <?php body_class(); ?>>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TF26JM44"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<?php wp_body_open(); ?>
<!-- Header -->
<nav class="navbar navbar-inverse navbar-fixed-top cbp-af-header home">
	<div class="container-fluid">
    	<div class="navbar-header">
     		<a href="/" class="navbar-brand wow fadeIn" data-wow-delay="0.5s"><img src="<?php echo get_template_directory_uri();?>/images/logo.png" alt="Logo" title="Logo"></a>
   		</div>
   		<div class="top-right">
   		<a class="quoterequest" href="#" class="js-anchor-link" data-toggle="modal" data-target=".bd-example-modal-lg">Request a free quote</a>
   		<div class="top-call"><a href="tel:91 99250 34404"><img src="<?php echo get_template_directory_uri();?>/images/phone.png" alt="Phone " title="Phone " class="icon">+91 99250 34404</a> </div>
   		<div class="menu">
			<div class="hamburger"><img src="<?php echo get_template_directory_uri();?>/images/hamburger.png" alt="Hamburger icon" title="Hamburger icon">
			    <span></span>
			    <span></span>
			    <span></span>
			    <span></span><!-- <img src="<?php echo get_template_directory_uri();?>/images/hamburger.png"> -->
		  	</div>
		</div>
        <div class="menuBg"></div>
		<div class="mobileNav">
		  	<div class="container">
				<div class="row">
					<div class="col-md-3 links">
						<a href="#" class="sitemap-sub-title">Quick Links</a>
						<ul class="sitemap-main-ul">
							<li><a href="/">Home</a></li>
							<li><a href="/aboutus.php">About us</a></li>
							<li><a href="/services.php">Services</a></li>
							<li><a href="/projects.php">Projects</a></li>
							<li><a href="/casestudies/">Case studies</a></li>
							<li><a href="#quote" class="js-anchor-link">Request a free quote</a></li>
							<li><a href="/contactus.php">Contact us</a></li>
							<li><a href="/blog/">Blogs</a></li>
							<li><a href="/career.php">Career</a></li>
							<li><a href="/sitemap.php">Sitemap</a></li>
						</ul>
					</div>	
					
					<div class="col-md-3 links">
		    		<a href="#" class="sitemap-sub-title">What we do</a>
		    		<ul class="sitemap-main-ul">
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
		    	<div class="col-md-3 links">
		    		<a href="#" class="sitemap-sub-title">Our Work</a>
		    		<ul class="sitemap-main-ul">
								<li><a href="https://buttercup.in/advertising-design-portfolio.php">Creating New Brands with Complete Identity</a></li>
								<li><a href="https://buttercup.in/logodesignportfolio.php">Unique Logo Designs and Corporate Identity</a></li>
								<li><a href="https://buttercup.in/packagingdesignportfolio.php">Attractive Packaging Designs</a></li>
								<li><a href="https://buttercup.in/brochuredesignportfolio.php">Brochure Designs for enhanced Corporate Image</a></li>
								<li><a href="https://buttercup.in/socialmediaportfolio.php">Social Media Marketing for multiple product categories</a></li>
								<li><a href="https://buttercup.in/outdoorcampaignportfolio.php">Exhibition and Event Design for Industry Events</a></li>
								<li><a href="https://buttercup.in/websitedesignportfolio.php">Website Design with a professional touch</a></li>
							</ul>
		    	</div>
		    	<div class="col-md-3 social">
		    		<a href="#" class="sitemap-sub-title">Follow us on</a>
		    		<ul class="sitemap-main-ul">
					<li><a href="https://www.facebook.com/buttercupadvertisingstudio" target="_blank"><i class="icofont-facebook"></i></a></li>
					<li><a href="https://buttercup.in" target="_blank"><i class="icofont-instagram"></i></a></li>
					<li><a href="https://www.youtube.com/c/ButtercupAdvertisingStudio" target="_blank"><i class="icofont-youtube-play"></i></a></li>
	    			<li><a href="https://www.linkedin.com/home" target="_blank"><i class="icofont-linkedin"></i></a></li>	    			
	    		</ul>
		    	</div>				
					
					
					
					<!-- <div class="col-md-5">
						<a href="https://www.360technosoft.com/our-services" class="sitemap-sub-title sitemap-sub-title-hover">Services</a>
						<ul class="sitemap-sub-ul">
							<li><a href="https://www.360technosoft.com/services/mobile-application-development">Mobile Application Development</a></li>
							<li><a href="https://www.360technosoft.com/services/android-application-development">Android Application Development</a></li>
							<li><a href="https://www.360technosoft.com/services/iphone-application-development">iPhone Application Development</a></li>
							<li><a href="https://www.360technosoft.com/services/mobile-app-maintenance">Mobile Application Maintenance</a></li>
							<li><a href="https://www.360technosoft.com/services/mobile-ui-design">Mobile UI Design</a></li>
							<li><a href="https://www.360technosoft.com/services/ionic-app-development">Ionic Application Development</a></li>
							<li><a href="https://www.360technosoft.com/services/react-native-app-development">React Native Application Development</a></li>
							<li><a href="https://www.360technosoft.com/services/startup-mobile-app-development">Startup Mobile Application Development</a></li>
						</ul>
					</div>
					<div class="col-md-4">
						<a class="sitemap-sub-title">About Us</a>
						<ul class="sitemap-sub-ul">
							<li><a href="https://www.360technosoft.com/aboutus">Company Overview</a></li>
							<li><a href="https://www.360technosoft.com/outsourcing-models">Outsourcing Models / Partnership</a></li>
							<li><a href="https://www.360technosoft.com/client-testimonials">Client Testimonials</a></li>
						</ul>
					</div> -->
				</div>
			</div>
		</div>
		</div>
	</div>
</nav>
<!-- Header END -->
<!-- Content -->
<div id="content">
	
