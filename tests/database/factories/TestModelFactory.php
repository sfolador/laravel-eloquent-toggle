<?php

namespace Sfolador\LaravelEloquentToggle\Tests\database\factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Sfolador\LaravelEloquentToggle\Tests\Models\TestModel;

class TestModelFactory extends Factory
{
    protected $model = TestModel::class;

    public function definition(): array
    {
        return [
            'active' => $this->faker->boolean,
        ];
    }

    public function active(): TestModelFactory
    {
        return $this->state([
            'active' => true,
        ]);
    }
}
