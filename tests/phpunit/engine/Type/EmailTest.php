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

class EmailTest extends TestCase {
    public function testEmailType()
    {
        $type = new Email('john@doe.com');
        $this->assertEquals('john@doe.com', $type->get());
    }

    public function testEmailTypeThrowsExceptionWithInvalidEmail()
    {
        $this->expectException(\InvalidArgumentException::class);
        new Email('abcdef');
    }

    public function testEmailTypeThrowsExceptionWithInvalidValue()
    {
        $this->expectException(\InvalidArgumentException::class);
        new Email(NULL);
    }
}
