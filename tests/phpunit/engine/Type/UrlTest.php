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

class UrlTest extends TestCase {
    public function testUrlType()
    {
        $type = new Url('http://localhost');
        $this->assertEquals('http://localhost', $type->get());
    }

    public function testUrlTypeThrowsExceptionWithInvalidUrl()
    {
        $this->expectException(\InvalidArgumentException::class);
        new Url('abcdef');
    }

    public function testUrlTypeThrowsExceptionWithInvalidValue()
    {
        $this->expectException(\InvalidArgumentException::class);
        new Url(NULL);
    }
}
