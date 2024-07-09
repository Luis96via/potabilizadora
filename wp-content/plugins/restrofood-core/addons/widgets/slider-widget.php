<?php
/**
 *
 * Slider Widget .
 *
 */
class Slider_Widget extends \Elementor\Widget_Base {

	public function get_name() {
		return 'srestrofoodsliderwidget';
	}

	public function get_title() {
		return __( 'Slider', 'restrofood' );
	}

	public function get_icon() {
		return 'eicon-slider-3d';
    }

	public function get_categories() {
		return [ 'restrofood' ];
	}
	
	protected function register_controls() {
		$this->start_controls_section(
			'slider_option',
			[
				'label' 	=> __( 'Slider', 'restrofood' ),
				'tab' 		=> \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

        $repeater = new \Elementor\Repeater();

		$repeater->add_control(
			'slider_banner_image',
			[
				'label' 	=> __( 'Choose Banner Image', 'elementor' ),
				'type' 		=> \Elementor\Controls_Manager::MEDIA,
				'default' 	=> [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

		$repeater->add_group_control(
			\Elementor\Group_Control_Image_Size::get_type(),
			[
				'name' 		=> 'banner_image',
				'include' 	=> [],
				'default' 	=> 'full',
			]
		);
		$repeater->add_control(
			'image_link',
			[
				'label' 		=> __( 'Link', 'restrofood' ),
				'type' 			=> \Elementor\Controls_Manager::URL,
				'placeholder' 	=> __( 'https://your-link.com', 'restrofood' ),
				'show_external' => true,
				'default' 		=> [
					'url' 			=> '#',
					'is_external' 	=> true,
					'nofollow' 		=> true,
				],
			]
		);
		$this->add_control(
			'restrofood_slider',
			[
				'label' 		=> __( 'Add Slider', 'restrofood' ),
				'type' 			=> \Elementor\Controls_Manager::REPEATER,
				'fields' 		=> $repeater->get_controls(),
				'title_field' 	=> 'Slider Image',
			]
		);

        $this->end_controls_section();

		$this->start_controls_section(
			'slider_control',
			[
				'label' 	=> __( 'Slider Control', 'restrofood' ),
				'tab' 		=> \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'data_owl_loop',
			[
				'label' 		=> __( 'Slider Loop', 'restrofood' ),
				'type' 			=> \Elementor\Controls_Manager::SWITCHER,
				'label_on' 		=> __( 'On', 'restrofood' ),
				'label_off' 	=> __( 'Off', 'restrofood' ),
				'return_value' 	=> 'yes',
				'default' 		=> 'yes',
			]
		);
		$this->add_control(
			'data_owl_autoplay',
			[
				'label' 		=> __( 'Slider Autoplay', 'restrofood' ),
				'type' 			=> \Elementor\Controls_Manager::SWITCHER,
				'label_on' 		=> __( 'Yes', 'restrofood' ),
				'label_off' 	=> __( 'No', 'restrofood' ),
				'return_value' 	=> 'yes',
				'default' 		=> 'yes',
			]
		);
		$this->add_control(
			'data_owl_dots',
			[
				'label' 		=> __( 'Slider Dots', 'restrofood' ),
				'type' 			=> \Elementor\Controls_Manager::SWITCHER,
				'label_on' 		=> __( 'Yes', 'restrofood' ),
				'label_off' 	=> __( 'No', 'restrofood' ),
				'return_value' 	=> 'yes',
				'default' 		=> 'false',
			]
		);
		$this->add_control(
			'data_owl_nav',
			[
				'label' 		=> __( 'Slider Nav', 'restrofood' ),
				'type' 			=> \Elementor\Controls_Manager::SWITCHER,
				'label_on' 		=> __( 'Yes', 'restrofood' ),
				'label_off' 	=> __( 'No', 'restrofood' ),
				'return_value' 	=> 'yes',
				'default' 		=> 'false',
			]
		);

        $this->end_controls_section();

    }



	protected function render() {

        $settings = $this->get_settings_for_display();

		// Slider Owl Loop
		if( $settings['data_owl_loop'] =='yes' ){
			$slider_owl_loop = 'true';
		}else{
			$slider_owl_loop = 'false';
		}

		// Slider Owl Autoplay
		if( $settings['data_owl_autoplay'] =='yes' ){
			$slider_owl_autoplay = 'true';
		}else{
			$slider_owl_autoplay = 'false';
		}

		// Slider Owl Dots
		if( $settings['data_owl_dots'] =='yes' ){
			$slider_owl_dots = 'true';
		}else{
			$slider_owl_dots = 'false';
		}

		// Slider Owl Nav
		if( $settings['data_owl_nav'] =='yes' ){
			$slider_owl_nav = 'true';
		}else{
			$slider_owl_nav = 'false';
		}

		// Slider Enable Disble
		if( count( $settings['restrofood_slider'] ) < 2 ){
			$slider_enable = '';
		}else{
			$slider_enable = ' owl-carousel';
		}

        echo '<!-- Banner -->';
        if( $settings['restrofood_slider'] ):
	        echo '<div class="banner-slider">';
	            echo '<div class="banner_slider '.esc_attr( $slider_enable ).'" data-owl-loop="'.esc_attr( $slider_owl_loop ).'" data-owl-autoplay="'.esc_attr( $slider_owl_autoplay ).'" data-owl-dots="'.esc_attr( $slider_owl_dots ).'" data-owl-nav="'.esc_attr( $slider_owl_nav ).'">';
	                echo '<!-- Single Slider -->';
	                foreach( $settings['restrofood_slider'] as $slider ):
						$target = $slider['image_link']['is_external'] ? ' target="_blank"' : '';
						$nofollow = $slider['image_link']['nofollow'] ? ' rel="nofollow"' : '';
	                    echo '<div class="single_slide">';
	                            echo '<!-- Single Banner Image -->';
	                            echo '<div class="single-banner-image">';
									echo '<a '.wp_kses_post( $target.$nofollow ).' href="'.esc_url( $slider['image_link']['url'] ).'">';
	                                	echo \Elementor\Group_Control_Image_Size::get_attachment_image_html( $slider, 'banner_image', 'slider_banner_image' );
									echo '</a>';
								echo '</div>';
	                            echo '<!-- End Single Banner Image -->';
	                    echo '</div>';
	                endforeach;
	                echo '<!-- End Single Slider -->';
	            echo '</div>';
	        echo '</div>';
        endif;
		echo '<!-- End Banner -->';
	}

}