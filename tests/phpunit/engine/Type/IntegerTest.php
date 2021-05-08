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

class IntegerTest extends TestCase {
    public function testIntType()
    {
        $type = new Integer(1);
        $this->assertEquals(1, $type->get());
    }

    public function testIntTypeThrowsExceptionWithFloat()
    {
        $this->expectException(\InvalidArgumentException::class);
        new Integer(100.00);
    }

    public function testIntTypeThrowsExceptionWithWithString()
    {
        $this->expectException(\InvalidArgumentException::class);
        new Integer('invalid');
    }
}
