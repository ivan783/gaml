<?php defined('BASEPATH') or exit('No direct script access allowed');

/* ----------------------------------------------------------------------------
 * Gobierno Autonomo Municipal De Laja - Open Source Web Scheduler
 *
 * @package     gamlaja
 * @author      A.Tselegidis <alextselegidis@gmail.com>
 * @copyright   Copyright (c) 2013 - 2020, Ivan Flores
 * @license     http://opensource.org/licenses/GPL-3.0 - GPLv3
 * @link        http://gamlaja.org
 * @since       v1.1.0
 * ---------------------------------------------------------------------------- */

/**
 * Print Google Analytics script.
 *
 * This helper function should be used in view files in order to output the Google Analytics script. It will check
 * whether the code is set in the database and print it, otherwise nothing will be outputted. This eliminates the need
 * for extra checking before outputting.
 */
function google_analytics_script()
{
    $CI =& get_instance();

    $CI->load->model('settings_model');

    $google_analytics_code = $CI->settings_model->get_setting('google_analytics_code');

    if ($google_analytics_code !== '')
    {
        echo '
            <script>
                (function(i,s,o,g,r,a,m){i["GoogleAnalyticsObject"]=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
                })(window,document,"script","//www.google-analytics.com/analytics.js","ga");
                ga("create", "' . $google_analytics_code . '", "auto");
                ga("send", "pageview");
            </script>
        ';
    }
}
