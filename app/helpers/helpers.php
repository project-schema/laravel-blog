<?php
/*
list of functions
1. is_active

============================================================
 */

/*
=> return active if route is active
=> otherwise return ""

use
=> class="tm-nav-item {{ is_active('blog-details') }}"
 */

if ( !function_exists( 'is_active' ) ) {
    function is_active( $route ) {
        return request()->is( $route ) ? 'active' : '';
    }
}
// -----------------------------------------------------------