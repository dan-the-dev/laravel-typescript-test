<?php
declare(strict_types=1);

namespace App\Http\Controllers;

final class TestTypescript extends Test
{
    public readonly string $string;
    public readonly int $int;
    public readonly float $float;
    public readonly Language $language;
}
