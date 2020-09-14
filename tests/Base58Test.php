<?php
declare(strict_types=1);

namespace BigChainDB\Tests;

use BigChainDB\Base58;
use PHPUnit\Framework\TestCase;

class Base58Test extends TestCase
{
    public function testingBase58Encode(): void
    {
        $encoder = new Base58();
        $encoded = $encoder->encode(100);

        self::assertIsString($encoded);
        self::assertEquals('2J', $encoded);
    }

    public function testBase58Decode(): void
    {
        $decoder = new Base58();
        $value = $decoder->decode('2J');

        self::assertIsInt($value);
        self::assertEquals(100, $value);
    }
}
