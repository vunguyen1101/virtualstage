<?php

namespace Travelcations;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Group_Control_Image_Size;

/**
 * Site Logo
 *
 * Elementor widget for Site Logo.
 */
class Testimonial extends Widget_Base {

	/**
	 * Retrieve the widget name.
	 *
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'boostify-tour-testimonial';
	}

	/**
	 * Retrieve the widget title.
	 *
	 * @return string Widget title.
	 */
	public function get_title() {
		return esc_html__( 'Testimonial', 'travelcations' );
	}

	/**
	 * Retrieve the widget icon.
	 *
	 * @return string Widget icon.
	 */
	public function get_icon() {
		return 'boostify eicon-testimonial';
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
		return array( 'travelcations-testimonial' );
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
				'label' => esc_html__( 'Testimonial', 'travelcations' ),
			)
		);

		$repeater = new \Elementor\Repeater();

		$repeater->add_control(
			'content',
			array(
				'label'   => __( 'Content', 'travelcations' ),
				'type'    => \Elementor\Controls_Manager::TEXTAREA,
				'rows'    => 10,
				'default' => __( 'Me and my travel buddy decided to book a tour on Travelcations, and that is the best decision we’ve ever made. The tour itself is full  excitement activities, but the staff are also kind & helpful. I’d love  to recommend this agent for all travel lovers', 'travelcations' ),
			)
		);

		$repeater->add_control(
			'name',
			array(
				'label'       => __( 'Name', 'travelcations' ),
				'type'        => \Elementor\Controls_Manager::TEXT,
				'default'     => __( 'Megan lynch', 'travelcations' ),
				'placeholder' => __( 'Enter Name', 'travelcations' ),
			)
		);

		$this->add_control(
			'testi',
			array(
				'label'       => __( 'Testimonial', 'travelcations' ),
				'type'        => \Elementor\Controls_Manager::REPEATER,
				'fields'      => $repeater->get_controls(),
				'title_field' => '{{{ name }}}',
				'default'     => array(
					array(
						'name'    => 'John Doe',
						'content' => 'Me and my travel buddy decided to book a tour on Travelcations, and that is the best decision we’ve ever made. The tour itself is full  excitement activities, but the staff are also kind & helpful. I’d love  to recommend this agent for all travel lovers',
					),
					array(
						'name'    => 'Nick',
						'content' => 'Me and my travel buddy decided to book a tour on Travelcations, and that is the best decision we’ve ever made. The tour itself is full  excitement activities, but the staff are also kind & helpful. I’d love  to recommend this agent for all travel lovers',
					),
				),
			)
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'section_style',
			array(
				'label' => __( 'Style', 'travelcations' ),
				'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
			)
		);

		$this->add_control(
			'name_heading',
			array(
				'label' => __( 'Name', 'travelcations' ),
				'type'  => \Elementor\Controls_Manager::HEADING,
			)
		);

		$this->add_control(
			'name_color',
			array(
				'label'     => __( 'Color', 'travelcations' ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'default'   => '#1c1c1c',
				'selectors' => array(
					'{{WRAPPER}} .name' => 'color: {{VALUE}};',
				),
			)
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			array(
				'name'     => 'name_typography',
				'label'    => __( 'Typography', 'travelcations' ),
				'scheme'   => \Elementor\Scheme_Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .name',
			)
		);

		$this->add_responsive_control(
			'space',
			array(
				'label'      => __( 'Space', 'travelcations' ),
				'type'       => Controls_Manager::SLIDER,
				'size_units' => array( 'px' ),
				'range'      => array(
					'px' => array(
						'min'  => 1,
						'max'  => 90,
						'step' => 1,
					),
				),
				'selectors'  => array(
					'{{WRAPPER}} .name' => 'margin-top: {{SIZE}}{{UNIT}};',
				),
			)
		);

		$this->add_control(
			'content_heading',
			array(
				'label'     => __( 'Content', 'travelcations' ),
				'type'      => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			)
		);

		$this->add_control(
			'content_color',
			array(
				'label'     => __( 'Color', 'travelcations' ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'default'   => '#1c1c1c',
				'selectors' => array(
					'{{WRAPPER}} .content' => 'color: {{VALUE}};',
				),
			)
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			array(
				'name'     => 'conent_typography',
				'label'    => __( 'Typography', 'travelcations' ),
				'scheme'   => \Elementor\Scheme_Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .content',
			)
		);

		$this->add_control(
			'dots_heading',
			array(
				'label'     => __( 'Dots', 'travelcations' ),
				'type'      => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			)
		);

		$this->add_control(
			'dots_color',
			array(
				'label'     => __( 'Color', 'travelcations' ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'default'   => '#8d8d8d',
				'selectors' => array(
					'{{WRAPPER}} .widget-testimonial--wrapper.swiper-container-horizontal > .swiper-pagination-bullets .swiper-pagination-bullet' => 'background-color: {{VALUE}};',
				),
			)
		);

		$this->add_control(
			'dots_color_active',
			array(
				'label'     => __( 'Color Active', 'travelcations' ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'default'   => '#e6183f',
				'selectors' => array(
					'{{WRAPPER}} .widget-testimonial--wrapper.swiper-container-horizontal > .swiper-pagination-bullets .swiper-pagination-bullet.swiper-pagination-bullet-active' => 'background-color: {{VALUE}};',
				),
			)
		);

		$this->add_responsive_control(
			'space_dots',
			array(
				'label'      => __( 'Space', 'travelcations' ),
				'type'       => Controls_Manager::SLIDER,
				'size_units' => array( 'px' ),
				'range'      => array(
					'px' => array(
						'min'  => 1,
						'max'  => 90,
						'step' => 1,
					),
				),
				'selectors'  => array(
					'{{WRAPPER}} .swiper-pagination-bullets' => 'margin-top: {{SIZE}}{{UNIT}};',
				),
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
		$list     = $settings['testi'];
		?>

		<h1 class="vutest">
			tESST cSSS
		</h1>
		<div class="boostify-tour-widget widget-testimonial">
			<div class="widget-testimonial--wrapper swiper-container">
				<div class="testimonial-list swiper-wrapper">
				<?php foreach ( $list as $item ) : ?>
					<div class="testimonial-item swiper-slide">
						<div class="testimonial-item--wrapper">
							<span class="content">
								<?php echo esc_html( $item['content'] ); ?>
							</span>
							<span class="name"><?php echo esc_html( $item['name'] ); ?></span>
						</div>
					</div>
				<?php endforeach ?>
				</div>
				<div class="swiper-pagination"></div>
			</div>
		</div>
		<?php
	}

}
