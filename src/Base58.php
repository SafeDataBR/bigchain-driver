<?php
declare(strict_types=1);

namespace BigChainDB;

use function strlen;
use function strpos;

final class Base58
{
    private string $alphabet = '123456789abcdefghijkmnopqrstuvwxyzABCDEFGHJKLMNPQRSTUVWXYZ';

    public function encode(int $int): string
    {
        $output = '';
        $base = strlen($this->alphabet);
        while ($int >= $base) {
            $div = floor($int / $base);
            $mod = $int % $base;
            $output = $this->alphabet[$mod] . $output;
            $int = $div;
        }

        if ($int) {
            $output = $this->alphabet[(int)$int] . $output;
        }

        return $output;
    }

    public function decode($base58)
    {
        $value = 0;
        for ($i = strlen($base58) - 1, $j = 1, $base = strlen($this->alphabet); $i >= 0; $i--, $j *= $base) {
            $value += $j * strpos($this->alphabet, $base58[$i]);
        }
        return $value;
    }
}
