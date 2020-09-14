<?php
declare(strict_types=1);

namespace BigChainDB;

final class Node
{
    private string $url;

    public function __construct(string $url)
    {
        $this->url = $url;
    }
}
