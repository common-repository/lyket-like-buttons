<?php
/**
    * https://developer.wordpress.org/plugins/plugin-basics/header-requirements/
    * WordPress Setting Page for a React.
    *
    * @package WordPress
    * @since 5.0.0
    *
    * Plugin Name: Like button - Lyket
    * Plugin URI: https://lyket.dev/docs/wordpress
    * Description: Add beautiful like, clap and like/dislike buttons to your website!
    * Version: 1.2
    * Author: Lyket
    * Author URI: https://lyket.dev
    * Text Domain: lyket
**/

include dirname(__FILE__) . '/scripts/load_lyket.php';
include dirname(__FILE__) . '/admin/main.php';
include dirname(__FILE__) . '/app/main.php';

function lyket_absolute_url()
{
    return plugin_dir_url(__FILE__) . '/';
}
