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

namespace EA\Engine\Type;

use PHPUnit\Framework\TestCase;

class BooleanTest extends TestCase {
    public function testBoolType()
    {
        $type = new Boolean(TRUE);
        $this->assertEquals(TRUE, $type->get());
    }

    public function testBoolTypeThrowsExceptionWithInvalidValue()
    {
        $this->expectException(\InvalidArgumentException::class);
        new Boolean(NULL);
    }
}
