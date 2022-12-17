<?php

namespace App\Http\Controllers\Test;

use App\Custom\Language;
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Http\Response;

class TestResponse extends Response implements Arrayable
{
    public readonly string $string;
    public readonly int $int;
    public readonly float $float;
    public readonly Language $language;

    public function __construct(string $string, int $int, float $float, Language $language)
    {
        $this->string = $string;
        $this->int = $int;
        $this->float = $float;
        $this->language = $language;

        parent::__construct($this->toArray());
    }

    public function toArray()
    {
        return [
            'string' => $this->string,
            'int' => $this->int,
            'float' => $this->float,
            'language' => $this->language,
        ];
    }
}
