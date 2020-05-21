<?php
namespace Elementor\Core\Editor\Data\Globals\Endpoints;

use Elementor\Data\Base\Endpoint;

class Colors extends Endpoint {
	private static $fake_data = [
		'primary' => [
			'name' => 'Primary',
			'value' => 'red',
			'id' => 'primary',
		],
		'secondary' => [
			'name' => 'Secondary',
			'value' => 'green',
			'id' => 'secondary',
		],
	];

	public function get_name() {
		return 'colors';
	}

	protected function register() {
		parent::register();

		$this->register_item_route();
	}

	protected function get_items( $request ) {
		return self::$fake_data;
	}

	protected function get_item( $id, $request ) {
		if ( isset( self::$fake_data[ $id ] ) ) {
			return self::$fake_data[ $id ];
		}

		return false;
	}
}