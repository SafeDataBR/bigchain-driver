<?php
declare(strict_types=1);

namespace BigChainDB\Collections;

use BigChainDB\Node;

final class NodesCollection
{
    private iterable $nodes;

    public function add(Node $node): void
    {
        $this->nodes[] = $node;
    }

    public function nodes(): iterable
    {
        return $this->nodes;
    }
}
