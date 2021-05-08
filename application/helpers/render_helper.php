<?php defined('BASEPATH') or exit('No direct script access allowed');

/* ----------------------------------------------------------------------------
 * Gobierno Autonomo Municipal De Laja - Open Source Web Scheduler
 *
 * @package     gamlaja
 * @author      A.Tselegidis <alextselegidis@gmail.com>
 * @copyright   Copyright (c) 2013 - 2020, Ivan Flores
 * @license     http://opensource.org/licenses/GPL-3.0 - GPLv3
 * @link        http://gamlaja.org
 * @since       v1.4.0
 * ---------------------------------------------------------------------------- */

/**
 * Render the HTML output of a timezone dropdown element.
 *
 * @param string $attributes HTML element attributes of the dropdown.
 *
 * @return string
 */
function render_timezone_dropdown($attributes = '')
{
    $CI = get_instance();

    $CI->load->library('timezones');

    $timezones = $CI->timezones->to_grouped_array();

    return $CI->load->view('partials/timezone_dropdown', [
        'timezones' => $timezones,
        'attributes' => $attributes
    ], TRUE);
}
