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
 * Class Migration_Add_date_format_setting
 *
 * @property CI_DB_query_builder $db
 * @property CI_DB_forge $dbforge
 */
class Migration_Add_date_format_setting extends CI_Migration {
    /**
     * Upgrade method.
     *
     * @throws Exception
     */
    public function up()
    {
        $this->db->insert('settings', [
            'name' => 'date_format',
            'value' => 'DMY'
        ]);
    }

    /**
     * Downgrade method.
     *
     * @throws Exception
     */
    public function down()
    {
        $this->db->delete('settings', ['name' => 'date_format']);
    }
}