<?php if ( ! defined( 'ABSPATH' ) ) {
	die; } // Cannot access directly.
/**
 *
 * Field: spacing
 *
 * @since 1.0.0
 * @version 1.0.0
 */
if ( ! class_exists( 'SP_WQV_Framework_Field_spacing' ) ) {
	class SP_WQV_Framework_Field_spacing extends SP_WQV_Framework_Fields {

		/**
		 * Create fields.
		 *
		 * @param  mixed $field field.
		 * @param  mixed $value value.
		 * @param  mixed $unique unique id.
		 * @param  mixed $where where to add.
		 * @param  mixed $parent parent.
		 * @return void
		 */
		public function __construct( $field, $value = '', $unique = '', $where = '', $parent = '' ) {
			parent::__construct( $field, $value, $unique, $where, $parent );
		}


		/**
		 * Render
		 *
		 * @return void
		 */
		public function render() {

			$args = wp_parse_args(
				$this->field,
				array(
					'top_icon'           => '<i class="fas fa-long-arrow-alt-up"></i>',
					'right_icon'         => '<i class="fas fa-long-arrow-alt-right"></i>',
					'bottom_icon'        => '<i class="fas fa-long-arrow-alt-down"></i>',
					'left_icon'          => '<i class="fas fa-long-arrow-alt-left"></i>',
					'all_icon'           => '<i class="fas fa-arrows-alt"></i>',
					'top_placeholder'    => esc_html__( 'top', 'woo-quickview' ),
					'right_placeholder'  => esc_html__( 'right', 'woo-quickview' ),
					'bottom_placeholder' => esc_html__( 'bottom', 'woo-quickview' ),
					'left_placeholder'   => esc_html__( 'left', 'woo-quickview' ),
					'all_placeholder'    => esc_html__( 'all', 'woo-quickview' ),
					'top'                => true,
					'left'               => true,
					'bottom'             => true,
					'right'              => true,
					'unit'               => true,
					'show_units'         => true,
					'all'                => false,
					'units'              => array( 'px', '%', 'em' ),
				)
			);

			$default_values = array(
				'top'    => '',
				'right'  => '',
				'bottom' => '',
				'left'   => '',
				'all'    => '',
				'unit'   => 'px',
			);

			$value   = wp_parse_args( $this->value, $default_values );
			$unit    = ( count( $args['units'] ) === 1 && ! empty( $args['unit'] ) ) ? $args['units'][0] : '';
			$is_unit = ( ! empty( $unit ) ) ? ' sp_wqv--is-unit' : '';

			echo wp_kses_post( $this->field_before() );

			echo '<div class="sp_wqv--inputs" data-depend-id="' . esc_attr( $this->field['id'] ) . '">';

			if ( ! empty( $args['all'] ) ) {

				$placeholder = ( ! empty( $args['all_placeholder'] ) ) ? ' placeholder="' . esc_attr( $args['all_placeholder'] ) . '"' : '';

				echo '<div class="sp_wqv--input">';
				echo ( ! empty( $args['all_icon'] ) ) ? '<span class="sp_wqv--label sp_wqv--icon">' . $args['all_icon'] . '</span>' : '';
				echo '<input type="number" name="' . esc_attr( $this->field_name( '[all]' ) ) . '" value="' . esc_attr( $value['all'] ) . '"' . $placeholder . ' class="sp_wqv-input-number' . esc_attr( $is_unit ) . '" step="any" />';
				echo ( $unit ) ? '<span class="sp_wqv--label sp_wqv--unit">' . esc_attr( $args['units'][0] ) . '</span>' : '';
				echo '</div>';

			} else {

				$properties = array();

				foreach ( array( 'top', 'right', 'bottom', 'left' ) as $prop ) {
					if ( ! empty( $args[ $prop ] ) ) {
						$properties[] = $prop;
					}
				}

				$properties = ( $properties === array( 'right', 'left' ) ) ? array_reverse( $properties ) : $properties;

				foreach ( $properties as $property ) {

					$placeholder = ( ! empty( $args[ $property . '_placeholder' ] ) ) ? ' placeholder="' . esc_attr( $args[ $property . '_placeholder' ] ) . '"' : '';

					echo '<div class="sp_wqv--input">';
					echo ( ! empty( $args[ $property . '_icon' ] ) ) ? '<span class="sp_wqv--label sp_wqv--icon">' . $args[ $property . '_icon' ] . '</span>' : '';
					echo '<input type="number" name="' . esc_attr( $this->field_name( '[' . $property . ']' ) ) . '" value="' . esc_attr( $value[ $property ] ) . '"' . $placeholder . ' class="sp_wqv-input-number' . esc_attr( $is_unit ) . '" step="any" />';
					echo ( $unit ) ? '<span class="sp_wqv--label sp_wqv--unit">' . esc_attr( $args['units'][0] ) . '</span>' : '';
					echo '</div>';

				}
			}

			if ( ! empty( $args['unit'] ) && ! empty( $args['show_units'] ) && count( $args['units'] ) > 1 ) {
				echo '<div class="sp_wqv--input">';
				echo '<select name="' . esc_attr( $this->field_name( '[unit]' ) ) . '">';
				foreach ( $args['units'] as $unit ) {
					$selected = ( $value['unit'] === $unit ) ? ' selected' : '';
					echo '<option value="' . esc_attr( $unit ) . '"' . esc_attr( $selected ) . '>' . esc_attr( $unit ) . '</option>';
				}
				echo '</select>';
				echo '</div>';
			}

			echo '</div>';

			echo wp_kses_post( $this->field_after() );

		}

		public function output() {

			$output    = '';
			$element   = ( is_array( $this->field['output'] ) ) ? join( ',', $this->field['output'] ) : $this->field['output'];
			$important = ( ! empty( $this->field['output_important'] ) ) ? '!important' : '';
			$unit      = ( ! empty( $this->value['unit'] ) ) ? $this->value['unit'] : 'px';

			$mode = ( ! empty( $this->field['output_mode'] ) ) ? $this->field['output_mode'] : 'padding';

			if ( $mode === 'border-radius' || $mode === 'radius' ) {

				$top    = 'border-top-left-radius';
				$right  = 'border-top-right-radius';
				$bottom = 'border-bottom-right-radius';
				$left   = 'border-bottom-left-radius';

			} elseif ( $mode === 'relative' || $mode === 'absolute' || $mode === 'none' ) {

				$top    = 'top';
				$right  = 'right';
				$bottom = 'bottom';
				$left   = 'left';

			} else {

				$top    = $mode . '-top';
				$right  = $mode . '-right';
				$bottom = $mode . '-bottom';
				$left   = $mode . '-left';

			}

			if ( ! empty( $this->field['all'] ) && isset( $this->value['all'] ) && $this->value['all'] !== '' ) {

				$output  = $element . '{';
				$output .= $top . ':' . $this->value['all'] . $unit . $important . ';';
				$output .= $right . ':' . $this->value['all'] . $unit . $important . ';';
				$output .= $bottom . ':' . $this->value['all'] . $unit . $important . ';';
				$output .= $left . ':' . $this->value['all'] . $unit . $important . ';';
				$output .= '}';

			} else {

				$top    = ( isset( $this->value['top'] ) && $this->value['top'] !== '' ) ? $top . ':' . $this->value['top'] . $unit . $important . ';' : '';
				$right  = ( isset( $this->value['right'] ) && $this->value['right'] !== '' ) ? $right . ':' . $this->value['right'] . $unit . $important . ';' : '';
				$bottom = ( isset( $this->value['bottom'] ) && $this->value['bottom'] !== '' ) ? $bottom . ':' . $this->value['bottom'] . $unit . $important . ';' : '';
				$left   = ( isset( $this->value['left'] ) && $this->value['left'] !== '' ) ? $left . ':' . $this->value['left'] . $unit . $important . ';' : '';

				if ( $top !== '' || $right !== '' || $bottom !== '' || $left !== '' ) {
					$output = $element . '{' . $top . $right . $bottom . $left . '}';
				}
			}

			$this->parent->output_css .= $output;

			return $output;

		}

	}
}
