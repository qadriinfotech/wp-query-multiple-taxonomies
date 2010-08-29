<?php
/*
Plugin Name: Query Multiple Taxonomies
Version: 1.3.1-alpha3
Description: Filter posts through multiple custom taxonomies
Author: scribu
Author URI: http://scribu.net
Plugin URI: http://scribu.net/wordpress/query-multiple-taxonomies
Text Domain: taxonomy-drill-down
Domain Path: /lang


Copyright (C) 2010 Cristi Burcă (scribu@gmail.com)

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 3 of the License, or
( at your option ) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program. If not, see <http://www.gnu.org/licenses/>.
*/

require dirname( __FILE__ ) . '/scb/load.php';

function _qmt_init() {
	load_plugin_textdomain( 'taxonomy-drill-down', '', dirname( plugin_basename( __FILE__ ) ) . '/lang' );

	require dirname( __FILE__ ) . '/core.php';
	require dirname( __FILE__ ) . '/tax-api.php';
	require dirname( __FILE__ ) . '/widget.php';

	if ( !is_admin() ) {
		QMT_Query::init();
		QMT_Template::init();
	}

	Taxonomy_Drill_Down_Widget::init();
	scbWidget::init( 'Taxonomy_Drill_Down_Widget', __FILE__, 'taxonomy-drill-down' );
}
scb_init( '_qmt_init' );

