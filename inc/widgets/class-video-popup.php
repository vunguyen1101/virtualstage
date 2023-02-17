<?php

namespace Travelcations;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

/**
 * Video Popup
 *
 * Elementor widget for Video Popup.
 */
class Video_Popup extends Widget_Base {

	/**
	 * Retrieve the widget name.
	 *
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'boostify-tour-video-popup';
	}

	/**
	 * Retrieve the widget title.
	 *
	 * @return string Widget title.
	 */
	public function get_title() {
		return esc_html__( 'Video Popup', 'travelcations' );
	}

	/**
	 * Retrieve the widget icon.
	 *
	 * @return string Widget icon.
	 */
	public function get_icon() {
		return 'boostify eicon-play';
	}

	/**
	 * Retrieve the list of categories the widget belongs to.
	 *
	 * Used to determine where to display the widget in the editor.
	 *
	 * @return array Widget categories.
	 */
	public function get_categories() {
		return array( 'travelcations' );
	}

	public function get_script_depends() {
		return array( 'travelcations-video-popup' );
	}

	/**
	 * Register the widget controls.
	 *
	 * Adds different input fields to allow the user to change and customize the widget settings.
	 */
	protected function _register_controls() { // phpcs:ignore
		$this->start_controls_section(
			'section_content',
			array(
				'label' => esc_html__( 'Video Popup', 'travelcations' ),
			)
		);

		$this->add_control(
			'label',
			array(
				'label'       => esc_html__( 'Label', 'travelcations' ),
				'type'        => Controls_Manager::TEXT,
				'default'     => __( 'View Video', 'travelcations' ),
				'placeholder' => esc_attr__( 'Enter Label', 'travelcations' ),
				'label_block' => 'true',
			)
		);

		$this->add_control(
			'source',
			array(
				'label'   => __( 'Source', 'travelcations' ),
				'type'    => Controls_Manager::SELECT,
				'options' => array(
					'youtube' => esc_html__( 'Youtube', 'travelcations' ),
					'vimeo'   => esc_html__( 'Vimeo', 'travelcations' ),
				),
				'default' => 'youtube',
			)
		);

		$this->add_control(
			'youtube_url',
			array(
				'label'       => esc_html__( 'URL', 'travelcations' ),
				'type'        => Controls_Manager::TEXT,
				'default'     => 'https://www.youtube.com/watch?v=9uOETcuFjbE',
				'placeholder' => esc_attr__( 'Enter URL Youtube', 'travelcations' ),
				'default'     => 'icon-travelcations-play',
				'label_block' => 'true',
				'condition'   => array(
					'source' => 'youtube',
				),
			)
		);

		$this->add_control(
			'vimeo_url',
			array(
				'label'       => esc_html__( 'URL', 'travelcations' ),
				'type'        => Controls_Manager::TEXT,
				'default'     => 'https://vimeo.com/235215203',
				'placeholder' => esc_attr__( 'Enter URL Vimeo', 'travelcations' ),
				'label_block' => 'true',
				'condition'   => array(
					'source' => 'vimeo',
				),
			)
		);

		$this->add_control(
			'icon',
			array(
				'label'       => __( 'Social Icons', 'travelcations' ),
				'type'        => \Elementor\Controls_Manager::ICON,
				'label_block' => 'true',
				'default'     => 'icon-travelcations-play',
				'include'     => array(
					'fa fa-video-camera',
					'fa fa-play',
					'fa fa-play-circle',
					'fa fa-play-circle-o',
					'fa fa-youtube-play',
					'icon-travelcations-play',
					'fa fa-film',
					'fa fa-file-video-o',
				),
			)
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'icon_style',
			array(
				'label' => esc_html__( 'Icon', 'travelcations' ),
				'tab'   => Controls_Manager::TAB_STYLE,
			)
		);

		$this->add_control(
			'color_label',
			array(
				'label'     => esc_html__( 'Label', 'travelcations' ),
				'type'      => Controls_Manager::COLOR,
				'default'   => '#010101',
				'selectors' => array(
					'{{WRAPPER}} .video-popup-box .label' => 'color: {{VALUE}};',
				),
			)
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			array(
				'name'     => 'label_typography',
				'label'    => __( 'Typography', 'travelcations' ),
				'scheme'   => \Elementor\Scheme_Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .video-popup-box .label',
			)
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'section_style',
			array(
				'label' => esc_html__( 'Lightbox', 'travelcations' ),
				'tab'   => Controls_Manager::TAB_STYLE,
			)
		);

		$this->add_control(
			'lightbox_width',
			array(
				'label'   => esc_html__( 'Lightbox Width', 'travelcations' ),
				'type'    => Controls_Manager::SLIDER,
				'range'   => array(
					'px' => array(
						'min' => 900,
						'max' => 1170,
					),
				),
				'default' => array(
					'size' => '976',
				),
			)
		);

		$this->add_control(
			'aspect_ratio',
			array(
				'label'   => esc_html__( 'Aspect Ratio', 'travelcations' ),
				'type'    => Controls_Manager::SELECT,
				'options' => array(
					'0.5625'  => '16:9',
					'0.42857' => '21:9',
					'0.75'    => '4:3',
					'0.66666' => '3:2',
					'1'       => '1:1',
				),
				'default' => '0.5625',
			)
		);

		$this->end_controls_section();
	}

	/**
	 * Render the widget output on the frontend.
	 *
	 * Written in PHP and used to generate the final HTML.
	 */
	protected function render() {
		$settings = $this->get_settings_for_display();
		$source   = $settings['source'];
		$url      = $settings[ $source . '_url' ];
		$label    = $settings['label'];
		$icon     = $settings['icon'];
		$width    = $settings['lightbox_width']['size'];
		$height   = (int) $width * (float) $settings['aspect_ratio'];
		if ( 'vimeo' === $source ) {
			$url = str_replace( 'https://vimeo.com', 'https://player.vimeo.com/video', $url );
		}
		?>
		<div class="boostify-tour-widget widget-video-popup">
			<div class="widget-video-popup--wrapper">
				<a href="<?php echo esc_url( $url ); ?>" class="html5lightbox video-popup-box" data-width="<?php echo esc_attr( $width ); ?>" data-height="<?php echo esc_attr( $height ); ?>">
					<span class="icon-video-popup <?php echo esc_attr( $icon ); ?>"></span>
					<span class="label"><?php echo esc_html( $label ); ?></span>
				</a>
			</div>
		</div>
		<?php
	}

}
