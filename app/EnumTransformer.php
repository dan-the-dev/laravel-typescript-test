<?php
declare(strict_types=1);

namespace App;

use ReflectionClass;
use Spatie\Enum\Enum;
use Spatie\TypeScriptTransformer\Structures\TransformedType;
use Spatie\TypeScriptTransformer\Transformers\Transformer;
use Spatie\TypeScriptTransformer\TypeScriptTransformerConfig;

class EnumTransformer implements Transformer
{
    public function __construct(protected TypeScriptTransformerConfig $config)
    {
    }

    public function transform(ReflectionClass $class, string $name): ?TransformedType
    {
        if (!$class->isEnum()) {
            return null;
        }

        return $this->toType($class, $name);
    }

    private function toType(ReflectionClass $class, string $name): TransformedType
    {
        $options = array_map(
            fn ($value) => "'{$value->name}'",
            $class->getConstants()
        );

        return TransformedType::create(
            $class,
            $name,
            implode(' | ', $options)
        );
    }
}
