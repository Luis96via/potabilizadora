<?php
/**
 *
 * Pricing Table Widget .
 *
 */
class Pricing_Table_Widget extends \Elementor\Widget_Base {

	public function get_name() {
		return 'srestrofoodpricingtable';
	}

	public function get_title() {
		return __( 'Pricing Table', 'restrofood' );
	}
	
	public function get_icon() {
		return 'eicon-price-list';
    }

	public function get_categories() {
		return [ 'restrofood' ];
	}


	protected function register_controls() {

		$this->start_controls_section(
			'pricing_table_section',
			[
				'label' => __( 'Pricing Table', 'restrofood' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
        );

        $this->add_control(
			'plan_name',
			[
				'label' => __( 'Plan Name', 'restrofood' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default'  => __( 'Basic', 'restrofood' )
			]
        );

        $this->add_control(
			'plan_image',
			[
				'label' => __( 'Plan Image', 'restrofood' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
			]
        );

        $repeater = new \Elementor\Repeater();

		$repeater->add_control(
			'plan_feature', [
				'label' => __( 'Feature', 'restrofood' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __( 'Feature' , 'restrofood' ),
				'label_block' => true,
			]
		);

		$this->add_control(
			'plan_features',
			[
				'label' => __( 'Features', 'restrofood' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'plan_feature' => __( 'Feature #1', 'restrofood' ),
					],
				],
				'title_field' => '{{{ plan_feature }}}',
			]
		);

        $this->add_control(
			'currency',
			[
				'label' => __( 'Currency', 'restrofood' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default'  => __( '$', 'restrofood' )
			]
        );

        $this->add_control(
			'table_price',
			[
				'label' => __( 'Price', 'restrofood' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default'  => __( '120.00', 'restrofood' )
			]
        );

        $this->add_control(
			'btn_text',
			[
				'label' => __( 'Button Text', 'restrofood' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default'  => __( 'Buy Now', 'restrofood' )
			]
        );

        $this->add_control(
			'btn_link',
			[
				'label' => __( 'Button Link', 'restrofood' ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => __( 'https://your-link.com', 'restrofood' ),
				'show_external' => true,
				'default' => [
					'url' => '#',
					'is_external' => true,
					'nofollow' => true,
				],
			]
        );

        $this->add_control(
			'table_active',
			[
				'label' => __( 'Active', 'plugin-domain' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => __( 'Yes', 'your-plugin' ),
				'label_off' => __( 'No', 'your-plugin' ),
				'return_value' => 'active',
				'default' => 'no',
			]
		);

        $this->add_control(
			'table_align',
			[
				'label' => __( 'Alignment', 'restrofood' ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'options' => [
					'text-left' => [
						'title' => __( 'Left', 'restrofood' ),
						'icon' => 'eicon-text-align-left',
					],
					'text-center' => [
						'title' => __( 'Center', 'restrofood' ),
						'icon' => 'eicon-text-align-center',
					],
					'text-right' => [
						'title' => __( 'Right', 'restrofood' ),
						'icon' => 'eicon-text-align-right',
					],
				],
				'default' => 'text-center',
				'toggle' => true,
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'general_style_section',
			[
				'label' => __( 'General', 'restrofood' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'seperator_color',
			[
				'label' => __( 'Seperator Color', 'restrofood' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .single-pricing-table .pt-body' => 'border-bottom-color: {{VALUE}}',
				],
			]
		);

		$this->add_control(
			'plan_bg_color',
			[
				'label' => __( 'Background Color', 'restrofood' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .single-pricing-table' => 'background-color: {{VALUE}}',
				],
			]
		);

		$this->add_control(
			'active_plan_bg_color',
			[
				'label' => __( 'Active Plan Background Color', 'restrofood' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .single-pricing-table.active' => 'background-color: {{VALUE}}',
				],
				'condition'	=> [
					"table_active"	=> 'active'
				]
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'pricing_plan_name_style_section',
			[
				'label' => __( 'Plan Name', 'restrofood' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'plan_name_color',
			[
				'label' => __( 'Plan Name Color', 'restrofood' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .single-pricing-table .pt-header h2' => 'color: {{VALUE}}',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'plan_name_typography',
				'label' => __( 'Plan Name Typography', 'restrofood' ),
				'selector' => '{{WRAPPER}} .single-pricing-table .pt-header h2',
			]
        );

        $this->add_responsive_control(
			'plan_name_margin',
			[
				'label' => __( 'Plan Name Margin', 'restrofood' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .single-pricing-table .pt-header h2' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
			]
        );

        $this->add_responsive_control(
			'plan_name_padding',
			[
				'label' => __( 'Plan Name Padding', 'restrofood' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .single-pricing-table .pt-header h2' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
                'separator' => 'after'
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'pricing_style_section',
			[
				'label' => __( 'Price', 'restrofood' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'price_color',
			[
				'label' => __( 'Price Color', 'restrofood' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .single-pricing-table .pt-footer h2.price' => 'color: {{VALUE}}',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'price_typography',
				'label' => __( 'Price Typography', 'restrofood' ),
				'selector' => '{{WRAPPER}} .single-pricing-table .pt-footer h2.price',
			]
        );

        $this->add_responsive_control(
			'price_margin',
			[
				'label' => __( 'Price Margin', 'restrofood' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .single-pricing-table .pt-footer h2.price' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
			]
        );

        $this->add_responsive_control(
			'pricing_padding',
			[
				'label' => __( 'Price Padding', 'restrofood' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .single-pricing-table .pt-footer h2.price' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
                'separator' => 'after'
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'feature_style_section',
			[
				'label' => __( 'Feature', 'restrofood' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
        );

        $this->add_control(
			'feature_color',
			[
				'label' => __( 'Color', 'restrofood' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .single-pricing-table .list-unstyled li' => 'color: {{VALUE}}',
				],
			]
		);


        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'feature_typography',
				'label' => __( 'Typography', 'restrofood' ),
				'selector' => '{{WRAPPER}} .single-pricing-table .list-unstyled li',
			]
        );

        $this->add_responsive_control(
			'feature_margin',
			[
				'label' => __( 'Margin', 'restrofood' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .single-pricing-table .list-unstyled li' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
			]
        );

        $this->add_responsive_control(
			'feature_padding',
			[
				'label' => __( 'Padding', 'restrofood' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .single-pricing-table .list-unstyled li' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
                'separator' => 'after'
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'button_style_section',
			[
				'label' => __( 'Button', 'restrofood' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'btn_typography',
				'label' => __( 'Typography', 'restrofood' ),
				'selector' => '{{WRAPPER}} .single-pricing-table .pt-footer .btn',
			]
		);

		$this->add_control(
			'btn_color',
			[
				'label' => __( 'Color', 'restrofood' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .single-pricing-table .pt-footer .btn' => 'color: {{VALUE}}',
				],
			]
		);

		$this->add_control(
			'btn_bg_color',
			[
				'label' => __( 'Background Color', 'restrofood' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .single-pricing-table .pt-footer .btn' => 'background-color: {{VALUE}}',
				],
			]
		);

		$this->add_control(
			'btn_hover_color',
			[
				'label' => __( 'Hover Color', 'restrofood' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .single-pricing-table .pt-footer .btn:hover' => 'color: {{VALUE}}',
				],
			]
		);

		$this->add_control(
			'btn_hover_bg_color',
			[
				'label' => __( 'Hover Background Color', 'restrofood' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .single-pricing-table .pt-footer .btn:hover' => 'background-color: {{VALUE}}',
				],
			]
		);

		$this->add_control(
			'border_color',
			[
				'label' => __( 'Border Color', 'restrofood' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .single-pricing-table .pt-footer .btn' => 'border-color: {{VALUE}}',
				],
				'condition'	=> [
					"table_active!"	=> 'active'
				]
			]
		);

		$this->add_control(
			'border_corner_color',
			[
				'label' => __( 'Border Corner Color', 'restrofood' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}}  .single-pricing-table .pt-footer .btn:before' => 'border-color: {{VALUE}}',
					'{{WRAPPER}}  .single-pricing-table .pt-footer .btn:after' => 'border-color: {{VALUE}}',
				],
				'condition'	=> [
					"table_active!"	=> 'active'
				]
			]
		);

		$this->add_responsive_control(
			'btn_margin',
			[
				'label' => __( 'Margin', 'restrofood' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}}  .single-pricing-table .pt-footer .btn' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
			]
        );

        $this->add_responsive_control(
			'btn_padding',
			[
				'label' => __( 'Padding', 'restrofood' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}}  .single-pricing-table .pt-footer .btn' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
                'separator' => 'after'
			]
		);

		$this->end_controls_section();

	}

	protected function render() {

        $settings = $this->get_settings_for_display();
        $target = $settings['btn_link']['is_external'] ? ' target="_blank"' : '';
		$nofollow = $settings['btn_link']['nofollow'] ? ' rel="nofollow"' : '';
        $url = $settings['btn_link']['url'] ? $settings['btn_link']['url'] : '#';
		echo '<!-- Single Pricing Plan -->';
        echo '<div class="single-pricing-table '.esc_attr($settings['table_align']).' '.esc_attr($settings['table_active']).'">';
            echo '<div class="pt-header">';
                if( !empty( $settings['plan_image']['url'] ) ) {
                    echo '<div class="icon">';
                        echo restrofood_img_tag( array(
                            "url"   => esc_url( $settings['plan_image']['url'] )
                        ) );
                    echo '</div>';
                }
                if( !empty( $settings['plan_name'] ) ) {
                    echo  '<h2 class="title">'.esc_html( $settings['plan_name'] ).'</h2>';
                }
            echo '</div>';
            if( !empty( $settings['plan_features'] ) && is_array( $settings['plan_features'] ) ) {
                echo '<div class="pt-body">';
                    echo '<ul class="list-unstyled">';
                        foreach( $settings['plan_features'] as $singlefeature ) {
                            echo '<li>'.esc_html( $singlefeature['plan_feature'] ).'</li>';
                        }
                    echo '</ul>';
                echo '</div>';
            }

            echo '<div class="pt-footer">';
                if( !empty( $settings['currency'] ) || !empty( $settings['table_price'] ) ) {
                    echo '<h2 class="price">'.esc_html( $settings['currency'] ).esc_html( $settings['table_price'] ).'</h2>';
                }
                if( !empty( $settings['btn_text'] ) ) {
                    echo '<a '.wp_kses_post( $target ).wp_kses_post( $nofollow ).' href="'.esc_url($url).'" class="btn">'.esc_html( $settings['btn_text'] ).'</a>';
                }
            echo '</div>';
        echo '</div>';
        echo '<!-- End Single Pricing Plan -->';

	}

}