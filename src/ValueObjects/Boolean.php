<?php

namespace Sfolador\LaravelEloquentToggle\ValueObjects;




class Boolean
{
    private bool $value;

    public function __construct(bool $value)
    {
        $this->value = $value;
    }

    public static function true(): self
    {
        return new Boolean(true);
    }

    public static function false(): self
    {
        return new Boolean(false);
    }

    public function value(): bool
    {
        return $this->value;
    }

    public function toggle(): void
    {
        $this->value = !$this->value;
    }

    public function __toString(): string
    {
        return $this->value ? 'true' : 'false';
    }


}
