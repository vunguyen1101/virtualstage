<?php

namespace Travelcations;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

/**
 * Blog
 *
 * Elementor widget for Blog.
 */
class Blog_Slider extends Widget_Base {

	/**
	 * Retrieve the widget name.
	 *
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'boostify-tour-blog-slider';
	}

	/**
	 * Retrieve the widget title.
	 *
	 * @return string Widget title.
	 */
	public function get_title() {
		return esc_html__( 'Blog Slider', 'travelcations' );
	}

	/**
	 * Retrieve the widget icon.
	 *
	 * @return string Widget icon.
	 */
	public function get_icon() {
		return 'boostify eicon-post-slider';
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
		return array( 'travelcations-blog-slider' );
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
				'label' => esc_html__( 'Blog', 'travelcations' ),
			)
		);

		$this->add_responsive_control(
			'columns',
			array(
				'label'          => esc_html__( 'Columns', 'travelcations' ),
				'type'           => Controls_Manager::SELECT,
				'options'        => array(
					'1' => esc_html__( '1', 'travelcations' ),
					'2' => esc_html__( '2', 'travelcations' ),
					'3' => esc_html__( '3', 'travelcations' ),
					'4' => esc_html__( '4', 'travelcations' ),
					'5' => esc_html__( '5', 'travelcations' ),
					'6' => esc_html__( '6', 'travelcations' ),
				),
				'default'        => '3',
				'tablet_default' => '2',
				'mobile_default' => '1',
			)
		);

		$this->add_responsive_control(
			'slide_scroll',
			array(
				'label'          => esc_html__( 'Slide To Scroll', 'travelcations' ),
				'type'           => Controls_Manager::SELECT,
				'options'        => array(
					'1' => esc_html__( '1', 'travelcations' ),
					'2' => esc_html__( '2', 'travelcations' ),
					'3' => esc_html__( '3', 'travelcations' ),
					'4' => esc_html__( '4', 'travelcations' ),
					'5' => esc_html__( '5', 'travelcations' ),
				),
				'default'        => '1',
				'tablet_default' => '1',
				'mobile_default' => '1',
			)
		);

		$this->add_control(
			'posts_per_page',
			array(
				'label'   => esc_html__( 'Posts Per Page', 'travelcations' ),
				'type'    => Controls_Manager::NUMBER,
				'default' => 3,
			)
		);

		$this->add_control(
			'orderby',
			array(
				'label'   => esc_html__( 'Order By', 'travelcations' ),
				'type'    => Controls_Manager::SELECT,
				'options' => array(
					'ID'     => esc_html__( 'ID', 'travelcations' ),
					'date'   => esc_html__( 'Date', 'travelcations' ),
					'title'  => esc_html__( 'Title', 'travelcations' ),
					'author' => esc_html__( 'Author', 'travelcations' ),
					'rand'   => esc_html__( 'Random', 'travelcations' ),
				),
				'default' => 'date',
			)
		);

		$this->add_control(
			'order',
			array(
				'label'   => esc_html__( 'Order', 'travelcations' ),
				'type'    => Controls_Manager::CHOOSE,
				'options' => array(
					'ASC'  => array(
						'title' => esc_html__( 'ASC', 'travelcations' ),
						'icon'  => 'fa fa-sort-numeric-asc',
					),
					'DESC' => array(
						'title' => esc_html__( 'DESC', 'travelcations' ),
						'icon'  => 'fa fa-sort-numeric-desc',
					),
				),
				'default' => 'DESC',
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
				'label' => __( 'Title', 'travelcations' ),
				'type'  => \Elementor\Controls_Manager::HEADING,
			)
		);

		$this->add_control(
			'color_name',
			array(
				'label'     => __( 'Color', 'travelcations' ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'default'   => '#1c1c1c',
				'selectors' => array(
					'{{WRAPPER}} .entry-title' => 'color: {{VALUE}}',
				),
			)
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			array(
				'name'     => 'name_typography',
				'label'    => __( 'Typography', 'travelcations' ),
				'scheme'   => \Elementor\Scheme_Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .entry-title',
			)
		);

		$this->add_control(
			'tax_heading',
			array(
				'label'     => __( 'Category', 'travelcations' ),
				'type'      => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			)
		);

		$this->add_control(
			'tax_name',
			array(
				'label'     => __( 'Color', 'travelcations' ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'default'   => '#1c1c1c',
				'selectors' => array(
					'{{WRAPPER}} .list-category-post-on a' => 'color: {{VALUE}}',
				),
			)
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			array(
				'name'     => 'tax_typography',
				'label'    => __( 'Typography', 'travelcations' ),
				'scheme'   => \Elementor\Scheme_Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .list-category-post-on a',
			)
		);

		$this->add_control(
			'read_more_heading',
			array(
				'label'     => __( 'Continue reading', 'travelcations' ),
				'type'      => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			)
		);

		$this->add_control(
			'read_more_color',
			array(
				'label'     => __( 'Color', 'travelcations' ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'default'   => '#e6183f',
				'selectors' => array(
					'{{WRAPPER}} .more-link'       => 'color: {{VALUE}}',
					'{{WRAPPER}} .more-link:after' => 'background-color: {{VALUE}}',
				),
			)
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			array(
				'name'     => 'read_more_typography',
				'label'    => __( 'Typography', 'travelcations' ),
				'scheme'   => \Elementor\Scheme_Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .more-link',
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
					'{{WRAPPER}} .widget-blog-wrapper.swiper-container-horizontal > .swiper-pagination-bullets .swiper-pagination-bullet' => 'background-color: {{VALUE}};',
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
					'{{WRAPPER}} .widget-blog-wrapper.swiper-container-horizontal > .swiper-pagination-bullets .swiper-pagination-bullet.swiper-pagination-bullet-active' => 'background-color: {{VALUE}};',
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
		$settings       = $this->get_settings_for_display();
		$column         = $settings['columns'];
		$col_tablet     = $settings['columns_tablet'];
		$col_mobile     = $settings['columns_mobile'];
		$scroll         = $settings['slide_scroll'];
		$scroll_tablet  = $settings['slide_scroll_tablet'];
		$scroll_mobile  = $settings['slide_scroll_mobile'];
		$posts_per_page = (int) $settings['posts_per_page'];
		$orderby        = $settings['orderby'];
		$order          = $settings['order'];

		$args = array(
			'post_type'           => 'post',
			'post_status'         => 'publish',
			'posts_per_page'      => $posts_per_page,
			'paged'               => get_query_var( 'paged' ),
			'ignore_sticky_posts' => 1,
			'order'               => $order,
			'orderby'             => $orderby,
		);

		$posts = new \WP_Query( $args );

		?>
		<div class="boostify-tour-widget wiget-blog-slider">
			<div class="widget-blog-wrapper widget-blog-slider-wrapper swiper-container">
				<div
					class="blog list-post swiper-wrapper"
					data-column="<?php echo esc_attr( $column ); ?>"
					data-column-tablet="<?php echo esc_attr( $col_tablet ); ?>"
					data-column-mobile="<?php echo esc_attr( $col_mobile ); ?>"
					data-scroll="<?php echo esc_attr( $column ); ?>"
					data-scroll-tablet="<?php echo esc_attr( $col_tablet ); ?>"
					data-scroll-mobile="<?php echo esc_attr( $col_mobile ); ?>"
				>
					<?php
					if ( $posts->have_posts() ) :
						while ( $posts->have_posts() ) :
							$posts->the_post();
							get_template_part( 'template-parts/content/content-post-slider' );
						endwhile;
						wp_reset_postdata();
					endif;
					?>
				</div>
				<div class="swiper-pagination"></div>
			</div>
		</div>
		<?php
	}

}

