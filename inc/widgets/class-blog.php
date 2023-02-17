<?php

namespace Travelcations;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

/**
 * Blog
 *
 * Elementor widget for Blog.
 */
class Blog extends Widget_Base {

	/**
	 * Retrieve the widget name.
	 *
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'boostify-tour-blog';
	}

	/**
	 * Retrieve the widget title.
	 *
	 * @return string Widget title.
	 */
	public function get_title() {
		return esc_html__( 'Blog', 'travelcations' );
	}

	/**
	 * Retrieve the widget icon.
	 *
	 * @return string Widget icon.
	 */
	public function get_icon() {
		return 'boostify eicon-posts-grid';
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
		return array( 'travelcations-blog' );
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

		$this->add_control(
			'layout',
			array(
				'label'   => esc_html__( 'Layout', 'travelcations' ),
				'type'    => Controls_Manager::SELECT,
				'options' => array(
					'grid'    => esc_html__( 'Grid', 'travelcations' ),
					'masonry' => esc_html__( 'Masonry', 'travelcations' ),
					'box'     => esc_html__( 'Box', 'travelcations' ),
				),
				'default' => 'grid',
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
				),
				'default'        => '3',
				'tablet_default' => '2',
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

		$this->add_control(
			'pagination',
			array(
				'label'        => __( 'Load More', 'travelcations' ),
				'type'         => \Elementor\Controls_Manager::SWITCHER,
				'label_on'     => __( 'Show', 'travelcations' ),
				'label_off'    => __( 'Hide', 'travelcations' ),
				'return_value' => 'yes',
				'default'      => 'yes',
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
			'excerpt_heading',
			array(
				'label' => __( 'Excerpt', 'travelcations' ),
				'type'  => \Elementor\Controls_Manager::HEADING,
			)
		);

		$this->add_control(
			'excerpt_name',
			array(
				'label'     => __( 'Color', 'travelcations' ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'default'   => '#9e9e9e',
				'selectors' => array(
					'{{WRAPPER}} .entry-summary' => 'color: {{VALUE}}',
				),
			)
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			array(
				'name'     => 'excerpt_typography',
				'label'    => __( 'Typography', 'travelcations' ),
				'scheme'   => \Elementor\Scheme_Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .entry-summary',
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
			'load_more_heading',
			array(
				'label'     => __( 'Load More', 'travelcations' ),
				'type'      => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
				'condition' => array(
					'pagination' => 'yes',
				),
			)
		);

		$this->add_control(
			'load_more_color',
			array(
				'label'     => __( 'Color', 'travelcations' ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'default'   => '#fff',
				'selectors' => array(
					'{{WRAPPER}} .btn-load-more' => 'color: {{VALUE}}',
				),
				'condition' => array(
					'pagination' => 'yes',
				),
			)
		);

		$this->add_control(
			'load_more_background_color',
			array(
				'label'     => __( 'Background Color', 'travelcations' ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'default'   => '#e6183f',
				'selectors' => array(
					'{{WRAPPER}} .btn-load-more' => 'background-color: {{VALUE}}',
				),
				'condition' => array(
					'pagination' => 'yes',
				),
			)
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			array(
				'name'      => 'load_more_typography',
				'label'     => __( 'Typography', 'travelcations' ),
				'scheme'    => \Elementor\Scheme_Typography::TYPOGRAPHY_1,
				'selector'  => '{{WRAPPER}} .btn-load-more',
				'condition' => array(
					'pagination' => 'yes',
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
		$layout         = $settings['layout'];
		$column         = $settings['columns'];
		$col_tablet     = $settings['columns_tablet'];
		$col_mobile     = $settings['columns_mobile'];
		$posts_per_page = (int) $settings['posts_per_page'];
		$orderby        = $settings['orderby'];
		$order          = $settings['order'];
		$pagination     = $settings['pagination'];

		$args = array(
			'post_type'           => 'post',
			'post_status'         => 'publish',
			'posts_per_page'      => $posts_per_page,
			'paged'               => get_query_var( 'paged' ),
			'ignore_sticky_posts' => 1,
			'order'               => $order,
			'orderby'             => $orderby,
		);

		$posts      = new \WP_Query( $args );
		$total_page = $posts->max_num_pages;
		?>
		<div class="boostify-tour-widget wiget-blog">
			<div class="widget-blog-wrapper blog-<?php echo esc_attr( $layout ); ?>">
				<div
					class="blog list-post boostify-grid boostify-grid-<?php echo esc_attr( $column ); ?> boostify-grid-tablet-<?php echo esc_attr( $col_tablet ); ?> boostify-grid-mobile-<?php echo esc_attr( $col_mobile ); ?>"
					data-total-page="<?php echo esc_attr( $total_page ); ?>"
					data-order="<?php echo esc_attr( $order ); ?>"
					data-order-by="<?php echo esc_attr( $orderby ); ?>"
					data-offset="<?php echo esc_attr( $posts_per_page ); ?>"
				>
					<?php
					if ( $posts->have_posts() ) :
						while ( $posts->have_posts() ) :
							$posts->the_post();
							if ( 'box' !== $layout ) {
								get_template_part( 'template-parts/content/content-grid' );
							} else {
								get_template_part( 'template-parts/content/content-post-box' );
							}
						endwhile;
						wp_reset_postdata();
					endif;
					?>
				</div>
				<?php if ( 'yes' === $pagination && $total_page > 1 ) : ?>
					<div class="blog-pagination">
						<a href="#" class="btn-load-more" ><?php echo esc_html__( 'More Post', 'travelcations' ); ?></a>
					</div>
				<?php endif ?>
			</div>
		</div>
		<?php
	}

}

