<?php

/**
 * Template Name: Case Study Template 
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();?>
<style type="text/css">

.pagination{display: inline-block;}
.pagination a {color: black;float: left;padding: 8px 16px;text-decoration: none;}
.pagination a.active{background-color: #000;color: white;}
.pagination a.next,.pagination a.previous{background-color: #ddd;color: #fff;padding: 8px 16px;}
.pagination a:hover{color: #fff;}
.pagination a:hover:not(.active) {background-color: #000;}
nav.navigation.pagination{/*margin-left: 710px;*/}

</style>
<?php 
/* Start the Loop */
while (have_posts()) :
  the_post(); ?>

  <!-- Section 1 -->
  <div class="container-fluid home-ban ban-in pb-0" id="home_ban_sec">
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

     <!--  <div class="pagination d-flex align-items-center justify-content-center">
        <div class="row">
          <div class="col-md-12">
            <nav class="navigation pagination" role="navigation">
              <div class="nav-links"></div>
            </nav>
          </div>
        </div>
      </div> -->


      <div id="image-gallery" class="casestudy-image-gallary">
        <div class="row">
          <?php
          $init_args = array(
            'post_type' => 'casestudies',
            'order' => 'DESC',
            'posts_per_page' => 4,
            'post_status' => 'publish'
          );
          $init_loop = new WP_Query($init_args);
          while ($init_loop->have_posts()) : $init_loop->the_post();
            $featured_img = get_the_post_thumbnail_url(get_the_ID(), 'large');
            if (!$featured_img) $featured_img = get_the_post_thumbnail_url(get_the_ID(), 'full');
          ?>
            <div class="col-md-6 col-sm-12 image">
              <div class="img-wrapper project-img">
                <a href="<?php the_permalink(); ?>"><img src="<?php echo esc_url($featured_img); ?>" class="img-responsive" alt="<?php the_title_attribute(); ?>" title="<?php the_title_attribute(); ?>"></a>
              </div>
            </div>
          <?php endwhile; wp_reset_postdata(); ?>
        </div><!-- End row -->
      </div><!-- End image gallery -->

      <div class="pagination d-flex align-items-center justify-content-center">
        <div class="row">
          <div class="col-md-12">
            <nav class="navigation pagination" role="navigation">
              <div class="nav-links"></div>
            </nav>
          </div>
        </div>
      </div> 

    </div><!-- End container -->
  </section>

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

<?php 
$currentpage = 1;
if(isset($_REQUEST['PAGE'])){
  $currentpage = $_REQUEST['PAGE'];
}
$nav_args = array( 'post_type' => 'casestudies', 'posts_per_page' => -1 );
$nav_query = new WP_Query( $nav_args );
$total_post = $nav_query->post_count;
$limit_per_page = 4;
$total_pages = ceil($total_post/$limit_per_page);

/*echo 'total pages : '.$total_pages;
echo 'total posts : '.$total_post;*/

?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script type="text/javascript">
var ajaxUrl = "<?php echo admin_url('admin-ajax.php'); ?>";
function load_post(page){
    $.ajax({
        url: ajaxUrl,
        method: "POST",
            data: {
              action: "more_post_ajax",
              page_no: page
            },
          success: function(data){
            $('.casestudy-image-gallary .row').empty();
            $('.casestudy-image-gallary .row').html(data);

               $('html, body').animate({
                  scrollTop: $("#home_ban_sec").offset().top
              }, 500);

          }
    });
    
    // pagination pages dynamic
    $.ajax({
        url: ajaxUrl,
        method: "POST",
            data: {
              action: "ajax_pagination_links",
              page_no: page
            },
          success: function(data){
            $('.nav-links').html(data);
             $('#page'+page).addClass('active');
             setTimeout(function () {
                $('#page'+page).addClass('active');
             }, 800);
          }
    });


    // end
}

var currentpagea = '<?php echo $currentpage; ?>';
var clickset = 0;
$(document).ready(function(){
  //alert(currentpagea);
  load_post(currentpagea);
  $(document).on("click",".nav-links a",function(e){
    e.preventDefault();
    var page_id = $(this).attr('data-pageid');
   // alert('page : '+page_id);
    load_post(page_id);
   // changeurl(page_id,click);


    //url start 
    var pageset = page_id;
    var currentUrl = window.location.href;

    // Create a new URLSearchParams object from the current URL
    var urlParams = new URLSearchParams(currentUrl);

    // Check if the 'param' parameter exists in the URL
    if (urlParams.has('PAGE')) {
      
    } else {
      if(clickset == 0){
        // Add the parameter to the URL
        var newUrl = currentUrl + '?PAGE='+pageset;

        // Use pushState() to add the new URL to the browser history
        history.pushState({}, null, newUrl);
        clickset = 1;
      }else{

        var newUrl = currentUrl.replace(/(\?|\&)PAGE=.*?(&|$)/, '$1PAGE='+pageset+'$2');

      // Use pushState() to replace the current URL with the new URL
      history.pushState({}, null, newUrl);

      }
        
    }


    //url end 



  });
});


function changeurl(pageset,clickset){
  // Get the current URL
    var currentUrl = window.location.href;

    // Create a new URLSearchParams object from the current URL
    var urlParams = new URLSearchParams(currentUrl);

    // Check if the 'param' parameter exists in the URL
    if (urlParams.has('PAGE')) {
      var newUrl = currentUrl.replace(/(\?|\&)PAGE=.*?(&|$)/, '$1PAGE='+pageset+'$2');

      // Use pushState() to replace the current URL with the new URL
      history.pushState({}, null, newUrl);
    } else {
      
        // Add the parameter to the URL
        var newUrl = currentUrl + '?PAGE='+pageset;

        // Use pushState() to add the new URL to the browser history
        history.pushState({}, null, newUrl);
    }
}
</script>
<?php

endwhile; // End of the loop.

get_footer();
