<?php
	use \Elementor\Widget_Base;
	use \Elementor\Controls_Manager;
	use \Elementor\Utils;
	use \Elementor\Repeater;
	use \Elementor\Group_Control_Typography;
/**
 *
 * Location Map Widget .
 *
 */
class Location_Map_widget extends Widget_Base {

	public function get_name() {
		return 'restrofoodlocationmap';
	}

	public function get_title() {
		return __( 'Location Map', 'dvpn' );
	}

	public function get_icon() {
		return 'eicon-map-pin';
    }

	public function get_categories() {
		return [ 'restrofood' ];
	}

	protected function register_controls() {
		$this->start_controls_section(
			'map_option',
			[
				'label' 	=> __( 'Location Map', 'restrofood' ),
				'tab' 		=> Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'map_image',
			[
				'label' 		=> __( 'Map Image', 'restrofood' ),
				'type' 			=> Controls_Manager::MEDIA,
				'default' 		=> [
					'url' 	=> Utils::get_placeholder_image_src(),
				],
			]
		);
		
		$repeater = new Repeater();

		$repeater->add_control(
			'country_name', [
				'label'         => __( 'Country Name', 'restrofood' ),
				'type'          => Controls_Manager::TEXTAREA,
				'label_block'   => true,
				'default'		=> __( 'Australia','restrofood' )
			]
		);
		$repeater->add_control(
			'cities', [
				'label'         => __( 'Cities?', 'restrofood' ),
				'type'          => Controls_Manager::TEXTAREA,
				'label_block'   => true,
				'default'		=> __( '39 Cities','restrofood' )
			]
		);
		$repeater->add_responsive_control(
			'position_top', [
				'label'         => __( 'Position Top', 'restrofood' ),
				'type'          => Controls_Manager::NUMBER,
				'label_block'   => true
			]
		);
		$repeater->add_responsive_control(
			'position_bottom', [
				'label'         => __( 'Position Bottom', 'restrofood' ),
				'type'          => Controls_Manager::NUMBER,
				'label_block'   => true
			]
		);
		$repeater->add_responsive_control(
			'position_right', [
				'label'         => __( 'Position Right', 'restrofood' ),
				'type'          => Controls_Manager::NUMBER,
				'label_block'   => true
			]
		);
		$repeater->add_responsive_control(
			'position_left', [
				'label'         => __( 'Position Left', 'restrofood' ),
				'type'          => Controls_Manager::NUMBER,
				'label_block'   => true
			]
		);
		$this->add_control(
			'map_list',
			[
				'label'         => __( 'Repeater List. Use Only Six. After That It Will Not Work.', 'restrofood' ),
				'type'          => Controls_Manager::REPEATER,
				'fields'        => $repeater->get_controls(),
				'default'       => [
					[
						'country_name'      => __( 'Australia', 'restrofood' ),
					],
					[
						'country_name'      => __( 'Australia', 'restrofood' ),
					],
				],
				'title_field' => '{{{country_name}}}',
			]
		);
		
		
        $this->end_controls_section();
		
		$this->start_controls_section(
			'box_style',
			[
				'label' 	=> __( 'Style', 'restrofood' ),
				'tab' 		=> Controls_Manager::TAB_STYLE,
			]
        );
		$this->add_control(
			'box_bg_color',
			[
				'label' 		=> __( 'Box Background Color', 'restrofood' ),
				'type' 			=> Controls_Manager::COLOR,
				'selectors' 	=> [
					'{{WRAPPER}} .restrofood_map-img .l_info .info-box' => 'background-color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'dot_color',
			[
				'label' 		=> __( 'Dot Color', 'restrofood' ),
				'type' 			=> Controls_Manager::COLOR,
				'selectors' 	=> [
					'{{WRAPPER}} .restrofood_map-img .l_info .circle-ball,{{WRAPPER}} .dvpn_map-img .l_info .circle-ball:after' => 'background-color: {{VALUE}}',
				],
			]
		);
        $this->add_control(
			'countryname_color',
			[
				'label' 		=> __( 'Country Name Color', 'restrofood' ),
				'type' 			=> Controls_Manager::COLOR,
				'selectors' 	=> [
					'{{WRAPPER}} .restrofood_map-img .l_info .info-box h3' => 'color: {{VALUE}}',
				],
			]
		);
        $this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name' 			=> 'countryname_typography',
				'label' 		=> __( 'Country Name Typography', 'restrofood' ),
				'selector' 		=> '{{WRAPPER}} .restrofood_map-img .l_info .info-box h3',
			]
        );
        $this->add_control(
			'cities_color',
			[
				'label' 		=> __( 'City Name Color', 'restrofood' ),
				'type' 			=> Controls_Manager::COLOR,
				'selectors' 	=> [
					'{{WRAPPER}} .restrofood_map-img .l_info .info-box span' => 'color: {{VALUE}}',
				],
			]
		);
        $this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name' 			=> 'cities_typography',
				'label' 		=> __( 'City Name Typography', 'restrofood' ),
				'selector' 		=> '{{WRAPPER}} .restrofood_map-img .l_info .info-box span',
			]
        );
		$this->end_controls_section();
    }

	protected function render() {

        $settings = $this->get_settings_for_display();

		echo '<div class="restrofood_map-wrapper text-center"><div class="restrofood_map-img">';
			if( ! empty( $settings['map_image']['url'] ) ){
				echo restrofood_img_tag( array(
					'url'	=> esc_url( $settings['map_image']['url'] ),
				) );
			}
			if( ! empty( $settings['map_list'] ) ) {
				$x = 1;
				foreach( $settings['map_list'] as $map_location ) {
					
					$top 	= !empty( $map_location['position_top'] ) ? $map_location['position_top'].'%' : '';
					$bottom = !empty( $map_location['position_bottom'] ) ? $map_location['position_bottom'].'%' : '';
					$right  = !empty( $map_location['position_right'] ) ? $map_location['position_right'].'%' : '';
					$left   =  !empty( $map_location['position_left'] ) ? $map_location['position_left'].'%' : '';


					if( $x == '4' ){
						$active = ' active';
					}else{
						$active = '';
					}
					echo '<!-- Location Information -->';
					echo '<div class="l_info l_info'.esc_attr( $x.$active ).'" style="top:'.$top.';bottom:'.$bottom.';left:'.$left.';right:'.$right.';">';
						echo '<span class="circle-ball">+</span>';

						echo '<div class="info-box text-center">';
							if( ! empty( $map_location['country_name'] ) ){
								echo '<h3>'.esc_html( $map_location['country_name'] ).'</h3>';
							}
							if( ! empty( $map_location['cities'] ) ){
								echo '<span>'.esc_html( $map_location['cities'] ).'</span>';
							}
						echo '</div>';
					echo '</div>';
					echo '<!-- End Location Information -->';
					$x++;
				}
			}
		echo '</div></div>';
	}
}