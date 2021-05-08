<?php

/* ----------------------------------------------------------------------------
 * Gobierno Autonomo Municipal De Laja - Open Source Web Scheduler
 *
 * @package     gamlaja
 * @author      A.Tselegidis <alextselegidis@gmail.com>
 * @copyright   Copyright (c) 2013 - 2020, Ivan Flores
 * @license     http://opensource.org/licenses/GPL-3.0 - GPLv3
 * @link        http://gamlaja.org
 * @since       v1.2.0
 * ---------------------------------------------------------------------------- */

namespace EA\Engine\Api\V1;

/**
 * Request Class
 *
 * This class handles the common request handling before the data are manipulated and
 * returned back with the Response class.
 *
 * @deprecated
 */
class Request {
    /**
     * Get request body as an associative array.
     *
     * @return array
     */
    public function get_body()
    {
        return json_decode(file_get_contents('php://input'), TRUE);
    }
}
