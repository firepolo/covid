<?php

require_once 'include/BootstrapNavwalker.php';

add_action('after_setup_theme', function() {
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');

    register_nav_menu('main-menu', __('Main menu'));
});