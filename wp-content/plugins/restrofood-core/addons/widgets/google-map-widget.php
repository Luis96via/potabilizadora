<?php
/**
 *
 * Google Map Widget .
 *
 */
class Google_Map_Widget extends \Elementor\Widget_Base {


	public function get_name() {
		return 'srestrofoodmapwidget';
	}

	public function get_title() {
		return esc_html__( 'Google Map', 'restrofood' );
	}

	public function get_icon() {
		return 'eicon-google-maps';
	}

	public function get_categories() {
		return [ 'restrofood' ];
	}


	// Add The Input For User
	protected function register_controls(){
		$this->start_controls_section(
			'section_content',
			[
				'label'		=> esc_html__( 'Set Content','restrofood' ),
				'tab'		=> \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'map_latitude',
			[
				'label' 		=> esc_html__( 'Map Latitude', 'restrofood' ),
				'type' 			=> \Elementor\Controls_Manager::TEXT,
                'placeholder'   => esc_html__( 'Type Map Latitude', 'restrofood' ),
                'default'       => '40.6785635'
			]
		);
		$this->add_control(
			'map_longitude',
			[
				'label' 		=> esc_html__( 'Map Longitude', 'restrofood' ),
				'type' 			=> \Elementor\Controls_Manager::TEXT,
                'placeholder'   => esc_html__( 'Type Map Longitude', 'restrofood' ),
                'default'       => '-73.9664109'
			]
		);
		$this->add_control(
			'map_zoom',
			[
				'label' 		=> esc_html__( 'Map Zoom', 'restrofood' ),
				'type' 			=> \Elementor\Controls_Manager::SLIDER,
				'size_units' 	=> [ 'px' ],
				'range' 		=> [
					'px' 	=> [
						'min' 	=> 0,
						'max' 	=> 100,
						'step' 	=> 1,
					],
				],
				'default' 	=> [
					'unit' 		=> 'px',
					'size' 		=> 11,
				],
			]
        );

        $this->add_control(
			'marker_image',
			[
				'label' => __( 'Choose Map Marker', 'restrofood' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

		$repeater = new \Elementor\Repeater();

		$repeater->add_control(
			'map_latitudes', [
				'label' 		=> __( 'Map Latitude', 'restrofood' ),
				'type' 			=> \Elementor\Controls_Manager::TEXTAREA,
				'default' 		=> __( '40.6785635' , 'restrofood' ),
				'label_block' 	=> true,
			]
		);

		$repeater->add_control(
			'map_longitudes', [
				'label' 		=> __( 'Map Longitude', 'restrofood' ),
				'type' 			=> \Elementor\Controls_Manager::TEXTAREA,
				'default' 		=> __( '-73.9664109' , 'restrofood' ),
				'show_label' 	=> false,
			]
		);

		$this->add_control(
			'list',
			[
				'label' => __( 'Marker List', 'restrofood' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'map_latitudes' 		=> __( '23.790546', 'restrofood' ),
						'map_longitudes' 		=> __( '78.757671', 'restrofood' ),
					],
					[
						'map_latitudes' 		=> __( '34.9862056', 'restrofood' ),
						'map_longitudes' 		=> __( '102.8388954', 'restrofood' ),
					],
					[
						'map_latitudes' 		=> __( '19.0825223', 'restrofood' ),
						'map_longitudes' 		=> __( '72.7411178', 'restrofood' ),
					],
					[
						'map_latitudes' 		=> __( '7.8784551', 'restrofood' ),
						'map_longitudes' 		=> __( '81.2146297', 'restrofood' ),
					],
				],
				'title_field' => '{{{ map_latitudes }}}',
			]
		);

		$this->end_controls_section();

	}

	// Output For User
	protected function render(){

		$settings = $this->get_settings_for_display();

		$marker_image = $settings['marker_image']['url'];

		?>
		<!-- Data centers Map-->
            <div id="map-data-center" data-marker="<?php echo esc_url( $marker_image ); ?>" data-map-latitude="<?php echo esc_attr( $settings['map_latitude'] ); ?>" data-map-longitude="<?php echo esc_attr( $settings['map_longitude'] ); ?>" data-map-zoom="<?php echo esc_attr( $settings['map_zoom']['size'] ); ?>" data-map-marker="[<?php
				$count = count( $settings['list'] );
				$i = 0;
				foreach( $settings['list'] as $value => $single_data ){
					echo '['.esc_html( $single_data['map_latitudes'] ).',';echo esc_html( $single_data['map_longitudes'] ).']';
					if( $i == $count-1 ){
						echo '';
					}else{
						echo ',';
					}
					$i++;
				}
			 ?>]"></div>
		<?php
	}
}