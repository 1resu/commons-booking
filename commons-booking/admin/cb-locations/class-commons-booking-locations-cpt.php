<?php
/**
 * Define the location custom post type
 * items
 *
 *
 * @package   Commons_Booking
 * @author    Florian Egermann <florian@macht-medien.de>
 * @license   GPL-2.0+
 * @link      http://www.wielebenwir.de
 * @copyright 2015 wielebenwir
 */


class Commons_Booking_Locations_CPT extends CPT_Core {

    /**
     * Register Location Post Type. 
     */
    public function __construct() {

        // Register this cpt
        // First parameter should be an array with Singular, Plural, and Registered name
        parent::__construct(
            array( 
                __( 'Location', 'your-text-domain' ), 
                __( 'locations', 'your-text-domain' ), 
                'cb_locations' 
                ),
            array( 
                'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail' ), 
                'show_in_menu' => true,
                'menu_position' => 32,
                'menu_icon' => 'dashicons-location-alt'
                )

        );

    }

}
?>