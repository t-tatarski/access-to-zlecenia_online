<?php
/**
 * Plugin Name: access to zlecenia online
 * Description: dostęp do "zleceń online" tylko dla zalogowanych (redirect)
 * Author: tatarski 
 * Plugin URI: https://github.com/t-tatarski/access-to-zlecenia_online/
 */

defined('ABSPATH') || exit;

add_action('template_redirect', function () {

 
    if (is_page('zlecenia-online') && !is_user_logged_in()) {

        $login_url = site_url('/log-in');
        $redirect  = urlencode(get_permalink());

        wp_safe_redirect($login_url . '?redirect_to=' . $redirect);
        exit;
    }

});
