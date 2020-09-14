<?php
declare(strict_types=1);

namespace BigChainDB\Tests;

use BigChainDB\Node;
use PHPUnit\Framework\TestCase;

class NodeTest extends TestCase
{
    public function testInstance(): void
    {
        $node = new Node('http://foo.bar');

        self::assertInstanceOf(Node::class, $node);
    }
}
