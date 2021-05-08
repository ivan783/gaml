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
 * Check if Gobierno Autonomo Municipal De Laja is installed.
 *
 * This function will check some factors to determine if Gobierno Autonomo Municipal De Laja is installed or not. It is possible that the
 * installation is properly configure without being recognized by this method.
 *
 * Notice: You can add more checks into this file in order to further check the installation state of the application.
 *
 * @return bool Returns whether E!A is installed or not.
 */
function is_app_installed()
{
    $CI =& get_instance();

    return $CI->db->table_exists('users');
}
