<?php
/**
 *
 * Contact Info Widget .
 *
 */
class Contact_Info_Widget extends \Elementor\Widget_Base {

	public function get_name() {
		return 'srestrofoodcontactinfo';
	}

	public function get_title() {
		return __( 'Contact Info', 'restrofood' );
	}


	public function get_icon() {
		return 'eicon-info-box';
    }


	public function get_categories() {
		return [ 'restrofood' ];
	}


	protected function register_controls() {

		$this->start_controls_section(
			'contact_info_section',
			[
				'label' => __( 'Contact Info', 'restrofood' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
        );

        $this->add_control(
			'contact_info_align',
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
						'icon' => 'eicon-text-align-right',
					],
					'text-right' => [
						'title' => __( 'Right', 'restrofood' ),
						'icon' => 'eicon-text-align-right',
					],
				],
				'default' => 'text-left',
				'toggle' => true,
			]
        );

        $this->add_control(
			'contact_info_type',
			[
				'label' => __( 'Contact Info Type', 'restrofood' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => '1',
				'options' => [
					'1'  => __( 'Location/Office Hour', 'restrofood' ),
					'2' => __( 'Phone', 'restrofood' ),
					'3' => __( 'Email', 'restrofood' ),
				],
			]
		);

        $this->add_control(
			'contact_info_title',
			[
				'label' => __( 'Title', 'restrofood' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default'  => __( 'Title', 'restrofood' )
			]
        );

        $repeater = new \Elementor\Repeater();

		$repeater->add_control(
			'phone_no', [
				'label' => __( 'Phone Number', 'restrofood' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __( '+967-321-111-222' , 'restrofood' ),
				'label_block' => true,
			]
		);


		$this->add_control(
			'phone_nos',
			[
				'label' => __( 'Phone Number', 'restrofood' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'phone_no' => __( '+967-321-111-222', 'restrofood' ),
					],
				],
                'title_field' => '{{{ phone_no }}}',
                'condition' => [
                    'contact_info_type' => '2'
                ]
			]
        );

        $repeater = new \Elementor\Repeater();

		$repeater->add_control(
			'email_address', [
				'label' => __( 'Email Address', 'restrofood' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __( 'support@yourmail.com' , 'restrofood' ),
				'label_block' => true,
			]
		);


		$this->add_control(
			'email_addresss',
			[
				'label' => __( 'Email Address', 'restrofood' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'email_address' => __( 'support@yourmail.com', 'restrofood' ),
					],
				],
                'title_field' => '{{{ email_address }}}',
                'condition' => [
                    'contact_info_type' => '3'
                ]
			]
		);

        $this->add_control(
			'contact_info_description',
			[
				'label' => __( 'Contact Info Description', 'restrofood' ),
				'type' => \Elementor\Controls_Manager::WYSIWYG,
                'placeholder' => __( 'Type your description here', 'restrofood' ),
                'condition' => [
                    'contact_info_type' => '1'
                ]
			]
		);

        $this->end_controls_section();

        $this->start_controls_section(
			'contact_info_title_style_section',
			[
				'label' => __( 'Title', 'restrofood' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
        );

        $this->add_control(
			'contact_info_title_color',
			[
				'label' => __( 'Title Color', 'restrofood' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .single-contact-info h3' => 'color: {{VALUE}}',
				],
			]
        );

        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'contact_info_title_typography',
				'label' => __( 'Title Typography', 'restrofood' ),
				'selector' => '{{WRAPPER}} .single-contact-info h3',
			]
        );

        $this->add_responsive_control(
			'contact_info_title_margin',
			[
				'label' => __( 'Title Margin', 'restrofood' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .single-contact-info h3' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
			]
        );

        $this->add_responsive_control(
			'contact_info_title_padding',
			[
				'label' => __( 'Title Padding', 'restrofood' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .single-contact-info h3' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
                'separator' => 'after'
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'contact_info_style_section',
			[
				'label' => __( 'Info', 'restrofood' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
        );

        $this->add_control(
			'contact_info_color',
			[
				'label' => __( 'Info Color', 'restrofood' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .single-contact-info p' => 'color: {{VALUE}}',
				],
				'condition' => [
                    'contact_info_type' => '1'
                ],
			]
        );

        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'contact_info_typography',
				'label' => __( 'Info Typography', 'restrofood' ),
				'selector' => '{{WRAPPER}} .single-contact-info p',
				'condition' => [
                    'contact_info_type' => '1'
                ],
			]
        );

        $this->add_responsive_control(
			'contact_info_margin',
			[
				'label' => __( 'Info Margin', 'restrofood' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .single-contact-info p' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'condition' => [
                    'contact_info_type' => '1'
                ],
			]
        );

        $this->add_responsive_control(
			'contact_info_padding',
			[
				'label' => __( 'Info Padding', 'restrofood' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .single-contact-info p' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'condition' => [
                    'contact_info_type' => '1'
                ],
                'separator' => 'after'
			]
		);

		$this->add_control(
			'contact_info_anchor_color',
			[
				'label' => __( 'Anchor Color', 'restrofood' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .single-contact-info a' => 'color: {{VALUE}}',
				],
				'condition' => [
                    'contact_info_type' => ['2','3']
                ]
			]
		);

		$this->add_control(
			'contact_info_anchor_hover_color',
			[
				'label' => __( 'Anchor Hover Color', 'restrofood' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .single-contact-info a:hover' => 'color: {{VALUE}}',
				],
				'condition' => [
                    'contact_info_type' => ['2','3']
                ]
			]
        );

        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'contact_info_anchor_typography',
				'label' => __( 'Anchor Typography', 'restrofood' ),
				'selector' => '{{WRAPPER}} .single-contact-info a',
				'condition' => [
                    'contact_info_type' => ['2','3']
                ]
			]
        );

        $this->add_responsive_control(
			'contact_info_anchor_margin',
			[
				'label' => __( 'Anchor Margin', 'restrofood' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .single-contact-info a' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'condition' => [
					'contact_info_type' => ['2','3']
                ]
			]
        );

        $this->add_responsive_control(
			'contact_info_anchor_padding',
			[
				'label' => __( 'Anchor Padding', 'restrofood' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .single-contact-info a' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
				'separator' => 'after',
				'condition' => [
					'contact_info_type' => ['2','3']
                ]
			]
		);

        $this->end_controls_section();

    }

    // Flat Content wysiwyg output with meta key and post id
    protected function restrofood_get_textareahtml_output( $content ) {

        global $wp_embed;

        $content = $wp_embed->autoembed( $content );
        $content = $wp_embed->run_shortcode( $content );
        $content = wpautop( $content );
        $content = do_shortcode( $content );

        return $content;
    }

	protected function render() {

        $settings = $this->get_settings_for_display();
        echo '<!-- Single Contact Info -->';
        echo '<div class="single-contact-info '.esc_attr( $settings['contact_info_align'] ).'">';
            if( !empty( $settings['contact_info_title'] ) ) {
                echo restrofood_heading_tag( array(
                    "tag"   => "h3",
                    "text"  => wp_kses_post( $settings['contact_info_title'] )
                ) );
            }
            if( $settings['contact_info_type'] == '1' ) {
                if( !empty( $settings['contact_info_description'] ) ) {
                    echo wp_kses_post( $this->restrofood_get_textareahtml_output( $settings['contact_info_description'] ) );
                }
            } elseif( $settings['contact_info_type'] == '2' ) {

                if( !empty( $settings['phone_nos'] )  ) {
                    $phonenos = $settings['phone_nos'];
                } else {
                    $phonenos = array();
                }

                echo '<p>';
                    foreach( $phonenos as $singlephone ) {
                        //Remove ' ' , '-', ' - ' from phone link
                        $replace = array(' ','-',' - ');
                        $with = array('','','');
                        $mobileurl = str_replace( $replace, $with, $singlephone['phone_no']);
                        echo '<a href="callto:'.esc_attr($mobileurl).'">'.esc_html($singlephone['phone_no']).'</a>';
                    }
                echo '</p>';

            } else {
                if( !empty( $settings['email_addresss'] )  ) {
                    $email_addresss = $settings['email_addresss'];
                } else {
                    $email_addresss = array();
                }

                echo '<p>';
                    foreach( $email_addresss as $singlemail ) {
                        //Remove ' ' , '-', ' - ' from address link
                        $email_address = is_email( $singlemail['email_address'] );
                        $replace = array(' ','-',' - ');
                        $with = array('','','');

                        $emailurl = str_replace( $replace, $with, $email_address );
                        echo '<a href="'.esc_attr($emailurl).'">'.esc_html( $email_address ).'</a>';
                    }

                echo '</p>';
            }
        echo '</div>';
        echo '<!-- End Single Contact Info --> ';

	}

}