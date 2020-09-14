<?php
declare(strict_types=1);

namespace BigChainDB;

use BigChainDB\Collections\NodesCollection;
use Psr\Http\Client\ClientInterface;

final class Connection
{
    private NodesCollection $nodes;
    private ClientInterface $client;

    public function __construct(ClientInterface $client, NodesCollection $nodesCollection)
    {
        $this->nodes = $nodesCollection;
        $this->client = $client;
    }
}
