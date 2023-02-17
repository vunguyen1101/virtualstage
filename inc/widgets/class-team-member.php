<?php

namespace Travelcations;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

/**
 * Site Logo
 *
 * Elementor widget for Site Logo.
 */
class Team_Member extends Widget_Base {

	/**
	 * Retrieve the widget name.
	 *
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'boostify-tour-team-menber';
	}

	/**
	 * Retrieve the widget title.
	 *
	 * @return string Widget title.
	 */
	public function get_title() {
		return esc_html__( 'Team Member', 'travelcations' );
	}

	/**
	 * Retrieve the widget icon.
	 *
	 * @return string Widget icon.
	 */
	public function get_icon() {
		return 'boosify eicon-lock-user';
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
				'label' => esc_html__( 'Team Member', 'travelcations' ),
			)
		);

		$this->add_control(
			'image',
			array(
				'label'   => __( 'Avatar', 'travelcations' ),
				'type'    => \Elementor\Controls_Manager::MEDIA,
				'default' => array(
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				),
			)
		);

		$this->add_control(
			'name',
			array(
				'label'       => __( 'Name', 'travelcations' ),
				'type'        => \Elementor\Controls_Manager::TEXT,
				'default'     => 'Emma Adela',
				'label_block' => 'true',
			)
		);

		$this->add_control(
			'position',
			array(
				'label'       => __( 'Position', 'travelcations' ),
				'type'        => \Elementor\Controls_Manager::TEXT,
				'default'     => 'Tour Guide',
				'label_block' => 'true',
			)
		);

		$this->add_group_control(
			\Elementor\Group_Control_Image_Size::get_type(),
			array(
				'name'    => 'size', // // Usage: `{name}_size` and `{name}_custom_dimension`, in this case `thumbnail_size` and `thumbnail_custom_dimension`.
				'default' => 'full',
			)
		);

		$repeater = new \Elementor\Repeater();

		$repeater->add_control(
			'icon',
			array(
				'label'       => esc_html__( 'Icon', 'travelcations' ),
				'type'        => \Elementor\Controls_Manager::ICON,
				'label_block' => true,
				'default'     => 'fa fa-star',
			)
		);

		$repeater->add_control(
			'link',
			array(
				'label'       => esc_html__( 'Link', 'travelcations' ),
				'type'        => \Elementor\Controls_Manager::URL,
				'label_block' => true,
				'placeholder' => esc_attr( 'https://member-link.com' ),
				'default'     => array(
					'is_external' => 'true',
					'url'         => '#',
				),
			)
		);

		$this->add_control(
			'contact_list',
			array(
				'label'       => esc_html__( 'Social Icons', 'travelcations' ),
				'type'        => \Elementor\Controls_Manager::REPEATER,
				'fields'      => $repeater->get_controls(),
				'title_field' => '{{{ icon }}}',
				'default'     => array(
					array(
						'icon' => 'fa fa-twitter',
					),
				),
			)
		);

		$this->add_control(
			'content_align',
			array(
				'label'     => esc_html__( 'Align', 'travelcations' ),
				'type'      => Controls_Manager::CHOOSE,
				'default'   => 'center',
				'options'   => array(
					'flex-start' => array(
						'title' => esc_html__( 'Left', 'travelcations' ),
						'icon'  => 'fa fa-align-left',
					),
					'center'     => array(
						'title' => esc_html__( 'Center', 'travelcations' ),
						'icon'  => 'fa fa-align-center',
					),
					'flex-end'   => array(
						'title' => esc_html__( 'Right', 'travelcations' ),
						'icon'  => 'fa fa-align-right',
					),
				),

				'selectors' => array(
					'{{WRAPPER}} .widget-team-member' => 'justify-content: {{VALUE}};',
					'{{WRAPPER}} .member-info'        => 'align-items: {{VALUE}};',
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

		$this->start_controls_tabs( 'name_style' );

		$this->start_controls_tab(
			'name_normal',
			array(
				'label' => __( 'Normal', 'travelcations' ),
			)
		);

		$this->add_control(
			'color_name',
			array(
				'label'     => __( 'Color', 'travelcations' ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'default'   => '#333333',
				'selectors' => array(
					'{{WRAPPER}} .member-info .member-name' => 'color: {{VALUE}}',
				),
			)
		);

		$this->end_controls_tab();

		$this->start_controls_tab(
			'name_hover',
			array(
				'label' => __( 'Hover', 'travelcations' ),
			)
		);

		$this->add_control(
			'name_color_hover',
			array(
				'label'     => __( 'Color', 'travelcations' ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'default'   => '#333',
				'selectors' => array(
					'{{WRAPPER}} .widget-team-member--wrapper:hover .member-info .member-name' => 'color: {{VALUE}}',
				),
			)
		);

		$this->end_controls_tab();

		$this->end_controls_tabs();

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			array(
				'name'     => 'name_typography',
				'label'    => __( 'Typography', 'travelcations' ),
				'scheme'   => \Elementor\Scheme_Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .member-name',
			)
		);

		$this->add_control(
			'position_heading',
			array(
				'label'     => __( 'Position', 'travelcations' ),
				'type'      => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			)
		);

		$this->start_controls_tabs( 'position_style' );

		$this->start_controls_tab(
			'position_normal',
			array(
				'label' => __( 'Normal', 'travelcations' ),
			)
		);

		$this->add_control(
			'color_position',
			array(
				'label'     => __( 'Color', 'travelcations' ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'default'   => '#787878',
				'selectors' => array(
					'{{WRAPPER}} .member-info .member-position' => 'color: {{VALUE}}',
				),
			)
		);

		$this->end_controls_tab();

		$this->start_controls_tab(
			'position_hover',
			array(
				'label' => __( 'Hover', 'travelcations' ),
			)
		);

		$this->add_control(
			'position_color_hover',
			array(
				'label'     => __( 'Color', 'travelcations' ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'default'   => '#e6183f',
				'selectors' => array(
					'{{WRAPPER}} .widget-team-member--wrapper:hover .member-info .member-position' => 'color: {{VALUE}}',
				),
			)
		);

		$this->end_controls_tab();

		$this->end_controls_tabs();

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			array(
				'name'     => 'position_typography',
				'label'    => __( 'Typography', 'travelcations' ),
				'scheme'   => \Elementor\Scheme_Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .member-info .member-position',
			)
		);

		$this->add_control(
			'list_contact_heading',
			array(
				'label'     => __( 'List Contact', 'travelcations' ),
				'type'      => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			)
		);

		$this->add_responsive_control(
			'icon_font',
			array(
				'label'      => __( 'Fontsize', 'travelcations' ),
				'type'       => Controls_Manager::SLIDER,
				'size_units' => array( 'px' ),
				'range'      => array(
					'px' => array(
						'min'  => 10,
						'max'  => 30,
						'step' => 1,
					),
				),
				'selectors'  => array(
					'{{WRAPPER}} .icon-contact' => 'font-size: {{SIZE}}{{UNIT}};',
				),
			)
		);

		$this->add_control(
			'bdrs',
			array(
				'label'      => __( 'Border Radius', 'travelcations' ),
				'type'       => Controls_Manager::DIMENSIONS,
				'size_units' => array( 'px', '%', 'em' ),
				'selectors'  => array(
					'{{WRAPPER}} .icon-contact' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				),
			)
		);

		$this->start_controls_tabs( 'list_contact_style' );

		$this->start_controls_tab(
			'list_contact_normal',
			array(
				'label' => __( 'Normal', 'travelcations' ),
			)
		);

		$this->add_control(
			'color_list_contact',
			array(
				'label'     => __( 'Color', 'travelcations' ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'default'   => '#ffffff',
				'selectors' => array(
					'{{WRAPPER}} .icon-contact' => 'color: {{VALUE}}',
				),
			)
		);

		$this->add_control(
			'background_color_list_contact',
			array(
				'label'     => __( 'Background Color', 'travelcations' ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'default'   => '#777777',
				'selectors' => array(
					'{{WRAPPER}} .icon-contact' => 'background-color: {{VALUE}}',
				),
			)
		);

		$this->end_controls_tab();

		$this->start_controls_tab(
			'list_contact_hover',
			array(
				'label' => __( 'Hover', 'travelcations' ),
			)
		);

		$this->add_control(
			'list_contact_color_hover',
			array(
				'label'     => __( 'Color', 'travelcations' ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'default'   => '#ffffff',
				'selectors' => array(
					'{{WRAPPER}} .icon-contact:hover:before' => 'color: {{VALUE}}',
				),
			)
		);

		$this->add_control(
			'background_color_list_contact_hover',
			array(
				'label'     => __( 'Background Color', 'travelcations' ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'default'   => '#e6183f',
				'selectors' => array(
					'{{WRAPPER}} .icon-contact:hover' => 'background-color: {{VALUE}}',
				),
			)
		);

		$this->end_controls_tab();

		$this->end_controls_tabs();

		$this->end_controls_section();

	}

	/**
	 * Render the widget output on the frontend.
	 *
	 * Written in PHP and used to generate the final HTML.
	 */
	protected function render() {
		$settings     = $this->get_settings_for_display();
		$name         = $settings['name'];
		$position     = $settings['position'];
		$contact_list = $settings['contact_list'];

		if ( empty( $settings['image']['id'] ) ) {
			$image_html = \Elementor\Group_Control_Image_Size::get_attachment_image_html( $settings, 'size', 'image' );
		} else {
			$image_url = \Elementor\Group_Control_Image_Size::get_attachment_image_src( $settings['image']['id'], 'size', $settings );

			$image_html = '<img src="' . esc_url( $image_url ) . '" alt="' . esc_attr( 'Avatar of ' . $name ) . '" >';
		}
		?>
		<div class="boostify-tour-widget widget-team-member">
			<div class="widget-team-member--wrapper">
				<div class="member-avatar">
					<?php
					echo wp_kses(
						$image_html,
						array(
							'img' => array(
								'src'   => array(),
								'class' => array(),
								'alt'   => array(),
							),
						)
					);
					?>
					<div class="member-contact">
						<div class="contact--wrapper">
							<?php foreach ( $contact_list as $item ) : ?>
								<div class="item-contact">
									<a href="<?php echo esc_url( $item['link']['url'] ); ?>" class="icon-contact <?php echo esc_attr( $item['icon'] ); ?>"></a>
								</div>
							<?php endforeach ?>
						</div>
					</div>
				</div>
				<div class="member-info">
					<h4 class="member-name"><?php echo esc_html( $name ); ?></h4>
					<span class="member-position"><?php echo esc_html( $position ); ?></span>
				</div>
			</div>
		</div>
		<?php
	}

}
