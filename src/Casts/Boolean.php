<?php

namespace Sfolador\LaravelEloquentToggle\Casts;

use Illuminate\Contracts\Database\Eloquent\CastsAttributes;
use Sfolador\LaravelEloquentToggle\ValueObjects\Boolean as BooleanValueObject;
use Illuminate\Contracts\Database\Eloquent\SerializesCastableAttributes;
class Boolean implements CastsAttributes, SerializesCastableAttributes
{
    public function get($model, string $key, $value, array $attributes): BooleanValueObject
    {
        return new BooleanValueObject($value);
    }

    /**
     * @param $model
     * @param string $key
     * @param BooleanValueObject|bool $value
     * @param array $attributes
     * @return bool
     */
    public function set($model, string $key, $value, array $attributes)
    {
        if ($value instanceof BooleanValueObject) {
            return $value->value();
        }
        return (bool) $value;
    }


    public function serialize($model, string $key, $value, array $attributes){

        return $value->value();
    }

}
