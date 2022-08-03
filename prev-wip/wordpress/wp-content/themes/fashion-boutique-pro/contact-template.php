<?php 

/* Template Name: Contact Page Template */

get_header(); ?>

  <div id="contact">
  <div class="py-5"  id="banner">
    <div class="container py-5">
      <h1 class="post-title" style="color: <?php echo esc_attr(get_theme_mod( 'fashion_boutique_pro_color_setting_rgba', '#000000' )); ?>"><?php echo esc_html(get_theme_mod('fashion_boutique_pro_contact_page_heading'));?></h1>
    </div>
  </div>
  <div class="container py-5 text-center">
        <h2><?php echo esc_html(get_theme_mod('fashion_boutique_pro_contact_us_form_main_heading_text'));?></h2>
        <hr>
        <p class="my-4 contact-text"><?php echo esc_html(get_theme_mod('fashion_boutique_pro_contact_us_form_content_text'));?></p>
      <div class="form">
        <?php echo do_shortcode( get_theme_mod('fashion_boutique_pro_contact_us_form_shortcode')); ?>
      </div>
  </div>
  <div class="contact-enquiry">
    <div class="container text-center">
      <h5><?php echo esc_html(get_theme_mod('fashion_boutique_pro_contact_enquiry_section_heading_text'));?></h5>
      <div class="row my-5">
          <div class="col-lg-4 col-md-4 mb-3 mb-md-0">
            <div class="services-box p-3">  
              <?php $icon = get_theme_mod( 'fashion_boutique_pro_contact_enquiry_section_icon1', '' ); ?>
              <span class="dashicons dashicons-<?php echo esc_attr( $icon ); ?>"></span>
              <h6 class="my-4"><?php echo esc_html(get_theme_mod('fashion_boutique_pro_contact_enquiry_section_heading_text1'));?></h6>
              <p style="margin-bottom:0"><?php echo esc_html(get_theme_mod('fashion_boutique_pro_contact_enquiry_section_content1'));?></p>
              <p style="margin-bottom:0"><?php echo esc_html(get_theme_mod('fashion_boutique_pro_contact_enquiry_section_content12'));?></p>
              <p><?php echo esc_html(get_theme_mod('fashion_boutique_pro_contact_enquiry_section_content13'));?></p>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 mb-3 mb-md-0">
            <div class="services-box p-3"> 
              <?php $icon = get_theme_mod( 'fashion_boutique_pro_contact_enquiry_section_icon2', '' ); ?>
              <span class="dashicons  dashicons-<?php echo esc_attr( $icon ); ?>"></span>
              <h6 class="my-4"><?php echo esc_html(get_theme_mod('fashion_boutique_pro_contact_enquiry_section_heading_text2'));?></h6>
              <p><?php echo esc_html(get_theme_mod('fashion_boutique_pro_contact_enquiry_section_content2'));?></p>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 mb-3 mb-md-0">
            <div class="services-box p-3"> 
              <?php $icon = get_theme_mod( 'fashion_boutique_pro_contact_enquiry_section_icon3', '' ); ?>
              <span class="dashicons dashicons-<?php echo esc_attr( $icon ); ?>"></span>
              <h6 class="my-4"><?php echo esc_html(get_theme_mod('fashion_boutique_pro_contact_enquiry_section_heading_text3'));?></h6>
              <p style="margin-bottom:0"><?php echo esc_html(get_theme_mod('fashion_boutique_pro_contact_enquiry_section_content3'));?></p>
              <p><?php echo esc_html(get_theme_mod('fashion_boutique_pro_contact_enquiry_section_content4'));?></p>
            </div>
          </div>
        </div>
    </div>
  </div>
  <div class=" loctaion ">
    <div class="google-map " id="map">
      <embed  width="100%" height="600px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q=
      <?php echo esc_attr(get_theme_mod('fashion_boutique_pro_contact_form_loaction_map_latitude')); ?>,
      <?php echo esc_attr(get_theme_mod('fashion_boutique_pro_contact_form_loaction_map_longitude')); ?>
      &hl=es;z=14&amp;output=embed"></embed>
    </div>
  </div>
</div>

<?php get_footer(); ?>
