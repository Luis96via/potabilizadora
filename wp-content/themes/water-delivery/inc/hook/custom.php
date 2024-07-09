<?php
/**
 * Custom theme functions.
 *
 * This file contains hook functions attached to theme hooks.
 *
 * @package Water Delivery
 */

if( ! function_exists( 'water_delivery_site_branding' ) ) :
/**
* Site Branding
*
* @since 1.0.0
*/
function water_delivery_site_branding() { ?>
   <?php 
      $show_contact = water_delivery_get_option( 'show_header_contact_info' );
      $phone        = water_delivery_get_option( 'header_phone' ); 
      $show_social  = water_delivery_get_option( 'show_header_social_links' );
    ?>

    <?php if( $show_contact || $show_social ){ ?> 
    <div class="top-bar-widgets-view">
      <div class="wrapper">
        <div class="topbar-header">

          <?php 
            $description = get_bloginfo( 'description', 'display' );
            if ( $description || is_customize_preview() ) : ?>
            <p class="site-description"><?php echo esc_html($description);?></p>
    
            <?php endif; ?>
    
            <?php if( ( ! empty( $phone ) ) && $show_contact ) : ?>
                <div class="contact-phone">
                  <?php 
                      if( ! empty( $phone ) ){
                          echo '<a href="' . esc_url('tel: '. esc_attr( $phone )) .'"><i class="fas fa-phone-alt"></i> <label>Get Free Delivery</label>  <span>+ '. esc_html( $phone ) .'</span></a>';
                      }
                  ?>
                </div><!-- .widget_address_block -->
            <?php endif; 
    
            if ( $show_social ){ ?>
                <div class="header_social_icons">
                  <?php water_delivery_render_social_links(); ?>
                </div><!-- .widget_social_icons -->
            <?php } ?>
        </div> <!-- .topbar-header -->
      </div> <!-- .wrapper -->
    </div> <!-- .top-bar-widgets-view -->
    <?php } ?>
    <div class="wrapper">

      <div class="header-container">

        <div class="site-branding">
            <div class="site-logo">
                <?php if(has_custom_logo()):?>
                    <?php the_custom_logo();?>
                <?php endif;?>
            </div><!-- .site-logo -->

            <div id="site-identity">
              <?php if(!has_custom_logo()):?>
                <h1 class="site-title">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">  <?php bloginfo( 'name' ); ?></a>
                </h1>
              <?php endif;?>
            </div><!-- #site-identity -->
        </div> <!-- .site-branding -->

        <div class="header-content">

          <?php 
            $show_contact = water_delivery_get_option( 'show_header_contact_info' );
            $phone        = water_delivery_get_option( 'header_phone' ); 
            $show_social  = water_delivery_get_option( 'show_header_social_links' );
          ?>

          <?php if( $show_contact || $show_social ){ ?>
    
          <div class="top-bar-widgets">
            <?php 

              $description = get_bloginfo( 'description', 'display' );
              if ( $description || is_customize_preview() ) : ?>
              <p class="site-description"><?php echo esc_html($description);?></p>
            
            <?php endif; ?>

              <?php if( ( ! empty( $phone ) ) && $show_contact ) : ?>
                  <div class="contact-phone">
                    <?php 
                        if( ! empty( $phone ) ){
                            echo '<a href="' . esc_url('tel: '. esc_attr( $phone )) .'"><i class="fas fa-phone-alt"></i> <label>Get Free Delivery</label>  <span>+ '. esc_html( $phone ) .'</span></a>';
                        }
                    ?>
                  </div><!-- .widget_address_block -->
              <?php endif; 

              if ( $show_social ){ ?>
                  <div class="header_social_icons">
                    <?php water_delivery_render_social_links(); ?>
                  </div><!-- .widget_social_icons -->
              <?php } ?>

          </div><!-- #top-bar -->

          <?php
          } ?>
          <nav id="site-navigation" class="main-navigation" role="navigation" aria-label="Primary Menu">
              <button type="button" class="menu-toggle">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
              </button>

              <?php
              wp_nav_menu( array(
                  'theme_location' => 'primary',
                  'menu_id'        => 'primary-menu',
                  'menu_class'     => 'nav-menu',
                  'fallback_cb'    => 'water_delivery_primary_navigation_fallback',
              ) );
              ?>
          </nav><!-- #site-navigation -->

        </div><!--  .header-content -->

      </div><!-- .header-container -->

    </div><!-- .wrapper -->
<?php }
endif;
add_action( 'water_delivery_action_header', 'water_delivery_site_branding', 10 );

if ( ! function_exists( 'water_delivery_footer_top_section' ) ) :

  /**
   * Top  Footer 
   *
   * @since 1.0.0
   */
  function water_delivery_footer_top_section() {
      $footer_sidebar_data = water_delivery_footer_sidebar_class();
      $footer_sidebar    = $footer_sidebar_data['active_sidebar'];
      $footer_class      = $footer_sidebar_data['class'];
      if ( empty( $footer_sidebar ) ) {
        return;
      }      ?>
      <div class="footer-widgets-area section-gap <?php echo esc_attr( $footer_class ); ?>"> <!-- widget area starting from here -->
          <div class="wrapper">
            <?php
              for ( $i = 1; $i <= 4 ; $i++ ) {
                if ( is_active_sidebar( 'footer-' . $i ) ) {
                ?>
                  <div class="hentry">
                    <?php dynamic_sidebar( 'footer-' . $i ); ?>
                  </div>
                  <?php
                }
              }
            ?>
            </div>
          
      </div> <!-- widget area starting from here -->
    <?php
 }
endif;

add_action( 'water_delivery_action_footer', 'water_delivery_footer_top_section', 10 );

if ( ! function_exists( 'water_delivery_footer_section' ) ) :

  /**
   * Footer copyright
   *
   * @since 1.0.0
   */
  function water_delivery_footer_section() { ?>
    <div class="site-info">    
        <?php 
            $copyright_footer = water_delivery_get_option('copyright_text'); 
            if ( ! empty( $copyright_footer ) ) {
                $copyright_footer = wp_kses_data( $copyright_footer );
            }
            // Powered by content.
            $powered_by_text = sprintf( __( ' Theme Water Delivery by %s', 'water-delivery' ), '<a target="_blank" rel="designer" href="'. esc_url( '#' ) .'">Rapid Themes</a>' );
        ?>
        <div class="copy_right_block">
          <div class="wrapper">
              <span class="copy-right"><?php echo esc_html($copyright_footer);?><?php echo $powered_by_text;?></span>
          </div><!-- .wrapper --> 
        </div>
    </div> <!-- .site-info -->
    
  <?php }

endif;
add_action( 'water_delivery_action_footer', 'water_delivery_footer_section', 20 );

if ( ! function_exists( 'water_delivery_footer_sidebar_class' ) ) :
  /**
   * Count the number of footer sidebars to enable dynamic classes for the footer
   *
   * @since water_delivery 0.1
   */
  function water_delivery_footer_sidebar_class() {
    $data = array();
    $active_sidebar = array();
      $count = 0;

      if ( is_active_sidebar( 'footer-1' ) ) {
        $active_sidebar[]   = 'footer-1';
          $count++;
      }

      if ( is_active_sidebar( 'footer-2' ) ){
        $active_sidebar[]   = 'footer-2';
          $count++;
    }

      if ( is_active_sidebar( 'footer-3' ) ){
        $active_sidebar[]   = 'footer-3';
          $count++;
      }

      if ( is_active_sidebar( 'footer-4' ) ){
        $active_sidebar[]   = 'footer-4';
          $count++;
      }

      $class = '';

      switch ( $count ) {
          case '1':
            $class = 'col-1';
            break;
          case '2':
            $class = 'col-2';
            break;
          case '3':
            $class = 'col-3';
            break;
            case '4':
            $class = 'col-4';
            break;
      }

    $data['active_sidebar'] = $active_sidebar;
    $data['class']        = $class;

      return $data;
  }
endif;

if ( ! function_exists( 'water_delivery_excerpt_length' ) ) :

  /**
   * Implement excerpt length.
   *
   * @since 1.0.0
   *
   * @param int $length The number of words.
   * @return int Excerpt length.
   */
  function water_delivery_excerpt_length( $length ) {

    if ( is_admin() ) {
      return $length;
    }

    $excerpt_length = water_delivery_get_option( 'excerpt_length' );

    if ( absint( $excerpt_length ) > 0 ) {
      $length = absint( $excerpt_length );
    }

    return $length;
  }

endif;

add_filter( 'excerpt_length', 'water_delivery_excerpt_length', 999 );

if( ! function_exists( 'water_delivery_banner_header' ) ) :
    /**
     * Page Header
    */
    function water_delivery_banner_header() { 

        $show_header_image  = water_delivery_get_option( 'show_header_image' );
        $show_page_title    = water_delivery_get_option( 'show_page_title' );

        if ( is_front_page() && ! is_home() )
            return;
        $header_image = get_header_image();
        if ( is_singular() ) :
            $header_image = has_post_thumbnail() ? get_the_post_thumbnail_url( get_the_id(), 'full' ) : $header_image;
        endif;
        ?>

        <div id="page-site-header" class="<?php echo esc_attr($show_header_image); ?> <?php echo esc_attr($show_page_title); ?>" style="background-image: url('<?php echo esc_url( $header_image ); ?>');">
            <div class="overlay"></div>
            <header class='page-header'>
                <div class="wrapper">
                    <?php water_delivery_banner_title();?>
                </div><!-- .wrapper -->
            </header>
        </div><!-- #page-site-header -->
        <?php echo '<div class= "wrapper section-gap">';
    }
endif;
add_action( 'water_delivery_banner_header', 'water_delivery_banner_header', 10 );

if( ! function_exists( 'water_delivery_banner_title' ) ) :
/**
 * Page Header
*/
function water_delivery_banner_title(){ 
    if ( ( is_front_page() && is_home() ) || is_home() ){ 
        $your_latest_posts_title = water_delivery_get_option( 'your_latest_posts_title' );?>
        <h2 class="page-title"><?php echo esc_html($your_latest_posts_title); ?></h2><?php
    }

    if( is_singular() ) {
        the_title( '<h2 class="page-title">', '</h2>' );
    }       

    if( is_archive() ){
        the_archive_description( '<div class="archive-description">', '</div>' );
        the_archive_title( '<h2 class="page-title">', '</h2>' );
    }

    if( is_search() ){ ?>
        <h2 class="page-title"><?php printf( esc_html__( 'Search Results for: %s', 'water-delivery' ), '<span>' . get_search_query() . '</span>' ); ?></h2>
    <?php }
    
    if( is_404() ) {
        echo '<h2 class="page-title">' . esc_html__( 'Error 404', 'water-delivery' ) . '</h2>';
    }
}
endif;

if ( ! function_exists( 'water_delivery_posts_tags' ) ) :
    /**
     * Prints HTML with meta information for the current post-date/time and author.
     */
    function water_delivery_posts_tags() {
        // Hide category and tag text for pages.
        if ( 'post' === get_post_type() && has_tag() ) { ?>
                <div class="tags-links">

                    <?php /* translators: used between list items, there is a space after the comma */
                    $tags = get_the_tags();
                    if ( $tags ) {

                        foreach ( $tags as $tag ) {
                            echo '<span><a href="' . esc_url( get_tag_link( $tag->term_id ) ) .'">' . esc_html( $tag->name ) . '</a></span>'; // WPCS: XSS OK.
                        }
                    } ?>
                </div><!-- .tags-links -->
        <?php } 
    }
endif;

/**
 * Render social links.
 *
 * @since 1.0
 */
function water_delivery_render_social_links() {

        $social_link1 = water_delivery_get_option( 'social_link_1' );
        $social_link2 = water_delivery_get_option( 'social_link_2' );
        $social_link3 = water_delivery_get_option( 'social_link_3' );
        $social_link4 = water_delivery_get_option( 'social_link_4' );
        
        if ( empty( $social_link1 ) && empty( $social_link2 ) && empty( $social_link3 ) ) {
                return;
        }

        echo '<div class="social-icons">';
        echo '<ul>';
        if ( ! empty( $social_link1 ) ) {
            echo '<li><a href="' . esc_url( $social_link1 ) . '" target="_blank"></a></li>';
        }
        if ( ! empty( $social_link2 ) ) {
            echo '<li><a href="' . esc_url( $social_link2 ) . '" target="_blank"></a></li>';
        }
        if ( ! empty( $social_link3 ) ) {
            echo '<li><a href="' . esc_url( $social_link3 ) . '" target="_blank"></a></li>';
        }
        if ( ! empty( $social_link4 ) ) {
            echo '<li><a href="' . esc_url( $social_link4 ) . '" target="_blank"></a></li>';
        }
        echo '</ul>';
        echo '</div>';
}