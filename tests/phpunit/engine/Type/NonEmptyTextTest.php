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

class NonEmptyTextTest extends TestCase {
    public function testNonEmptyStringType()
    {
        $type = new NonEmptyText('Hello!');
        $this->assertEquals('Hello!', $type->get());
    }

    public function testNonEmptyStringTypeThrowsExceptionWithEmptyString()
    {
        $this->expectException(\InvalidArgumentException::class);
        new NonEmptyText('');
    }

    public function testNonEmptyStringTypeThrowsExceptionWithInvalidValue()
    {
        $this->expectException(\InvalidArgumentException::class);
        new NonEmptyText(NULL);
    }
}
