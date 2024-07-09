<?php
/**
 *
 * Widget .
 *
 */
class Location_Search_Widget extends \Elementor\Widget_Base {

	public function get_name() {
		return 'restrofood-location-search';
	}

	public function get_title() {
		return __( 'Location Search', 'restrofood' );
	}


	public function get_icon() {
		return 'eicon-search';
    }


	public function get_categories() {
		return [ 'restrofood' ];
	}


	protected function register_controls() {

		$this->start_controls_section(
			'location_search_content',
			[
				'label' => __( 'Content', 'restrofood' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

        $this->add_control(
			'title',
			[
				'label' => __( 'Title', 'restrofood' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default'  => __( 'Hello Dear,', 'restrofood' )
			]
		);
        $this->add_control(
			'sub_title',
			[
				'label' => __( 'Sub Title', 'restrofood' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default'  => __( 'Hungry? You\'re in right place...? Order From "New Hampshire"', 'restrofood' )
			]
		);
        $this->add_control(
			'img',
			[
				'label' => __( 'Image', 'restrofood' ),
                'type' => \Elementor\Controls_Manager::MEDIA
			]
		);

        $this->end_controls_section();


        $this->start_controls_section(
			'section_wrapper_Section_style_section',
			[
				'label' => __( 'Wrapper Section', 'restrofood' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
        );

        $this->add_responsive_control(
			'section_wrapper_margin',
			[
				'label' => __( 'Margin', 'restrofood' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .restrofood-location-checker-section-wrap' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
			]
        );

        $this->add_responsive_control(
			'section_wrapper_padding',
			[
				'label' => __( 'Padding', 'restrofood' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .restrofood-location-checker-section-wrap' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
			]
		);
		$this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name'      => 'section_wrapper_border',
                'label'     => esc_html__( 'Border', 'staraddons' ),
                'selector'  => '{{WRAPPER}} .restrofood-location-checker-section-wrap',
            ]
        );
        $this->add_responsive_control(
            'section_wrapper_radius',
            [
                'label' => esc_html__( 'Border Radius', 'staraddons' ),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'devices' => [ 'desktop', 'tablet', 'mobile' ],
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restrofood-location-checker-section-wrap' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'section_wrapper_shadow',
                'label' => esc_html__( 'Box Shadow', 'staraddons' ),
                'selector' => '{{WRAPPER}} .restrofood-location-checker-section-wrap',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name'      => 'section_wrapper_bg',
                'label'     => __( 'Background', 'restrofood' ),
                'types'     => [ 'classic', 'gradient', 'video' ],
                'selector'  => '{{WRAPPER}} .restrofood-location-checker-section-wrap',
            ]
        );
        $this->end_controls_section();


        $this->start_controls_section(
			'section_title_style_section',
			[
				'label' => __( 'Title', 'restrofood' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
        );

        $this->add_control(
			'section_title_color',
			[
				'label' => __( 'Title Color', 'restrofood' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .restrofood-location-checker-section-wrap .restrofood-location-checker-content h2' => 'color: {{VALUE}}',
				],
			]
		);
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'section_title_typography',
				'label' => __( 'Title Typography', 'restrofood' ),
				'selector' => '{{WRAPPER}} .restrofood-location-checker-section-wrap .restrofood-location-checker-content h2',
			]
        );

        $this->add_responsive_control(
			'section_title_margin',
			[
				'label' => __( 'Title Margin', 'restrofood' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .restrofood-location-checker-section-wrap .restrofood-location-checker-content h2' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
			]
        );

        $this->add_responsive_control(
			'section_title_padding',
			[
				'label' => __( 'Title Padding', 'restrofood' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .restrofood-location-checker-section-wrap .restrofood-location-checker-content h2' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
                'separator' => 'after'
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'section_sub_title_style_section',
			[
				'label' => __( 'Sub Title', 'restrofood' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
        );

        $this->add_control(
			'section_sub_title_color',
			[
				'label' => __( 'Sub Title Color', 'restrofood' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .restrofood-location-checker-section-wrap .restrofood-location-checker-content p' => 'color: {{VALUE}}',
				],
			]
        );

        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'section_sub_title_typography',
				'label' => __( 'Typography', 'restrofood' ),
				'selector' => '{{WRAPPER}} .restrofood-location-checker-section-wrap .restrofood-location-checker-content p',
			]
        );

        $this->add_responsive_control(
			'section_sub_title_margin',
			[
				'label' => __( 'Margin', 'restrofood' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .restrofood-location-checker-section-wrap .restrofood-location-checker-content p' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
			]
        );

        $this->add_responsive_control(
			'section_sub_title_padding',
			[
				'label' => __( 'Padding', 'restrofood' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .restrofood-location-checker-section-wrap .restrofood-location-checker-content p' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
			]
		);

        $this->end_controls_section();

	}

	protected function render() {

        $settings = $this->get_settings_for_display();
		echo '<div class="restrofood-location-checker-section-wrap">';
			if( !empty( $settings['img']['url'] ) ) {
				echo '<div class="location-checker-image">';
					echo '<img src="'.esc_url( $settings['img']['url'] ).'" />';
				echo '</div>';
			}
			
			echo '<div class="restrofood-location-checker-content">';
				//
				if( !empty( $settings['title'] ) ){
					echo '<h2>'.esc_html( $settings['title'] ).'</h2>';
				}
				//
				if( !empty( $settings['sub_title'] ) ) {
					echo '<p>'.esc_html( $settings['sub_title'] ).'</p>';
				}
				echo do_shortcode( '[restrofood_delivery_ability_checker]' );
			echo '</div>';
		echo '</div>';

	}

}