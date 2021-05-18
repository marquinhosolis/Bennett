<?php
    register_nav_menus( array(
        'mainNav' => 'Main Nav',
    ) );

    add_theme_support( 'post-thumbnails' ); 

    // GLOBAL VARIABLES: SOCIAL LINKS, ADDRESSES, PHONE NUMBERS
    function theme_variables($query) {
        $dataArray = array(
            'address_north_orlando' => "1800 Pembrook Drive, Suite 300 <br>Orlando, FL 32810",
            'google_maps_link_north_orlando' => 'https://goo.gl/maps/C9z2hiEQhL7iNWiR6',
            
            'address_winter_springs' => "156 Tuskawilla Road, Suite 2326 <br>Winter Springs, FL 32708",
            'google_maps_link_winter_springs' => 'https://goo.gl/maps/4uBYqDpTJiUCLRjZA',

            'phone' => "407.236.9739",
            

            'facebook' => "https://www.facebook.com/",
            'linkedin' => "https://www.linkedin.com/",
            'twitter' => "https://www.twitter.com",
            //'instagram' => "https://www.instagram.com",
            //'youtube' => "https://www.youtube.com",
        );
        echo $dataArray[$query];
    }
    add_action( 'init', 'theme_variables' );

?>