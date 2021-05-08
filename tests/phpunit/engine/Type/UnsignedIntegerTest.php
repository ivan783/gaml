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

class UnsignedIntegerTest extends TestCase {
    public function testUnsignedIntType()
    {
        $type = new UnsignedInteger(1);
        $this->assertEquals(1, $type->get());
    }

    public function testUnsignedIntTypeThrowsExceptionWithNegative()
    {
        $this->expectException(\InvalidArgumentException::class);
        new UnsignedInteger(-1);
    }

    public function testUnsignedIntTypeThrowsExceptionWithWithString()
    {
        $this->expectException(\InvalidArgumentException::class);
        new UnsignedInteger('invalid');
    }
}
