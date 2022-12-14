<?php

namespace Sfolador\LaravelEloquentToggle\Tests\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Sfolador\LaravelEloquentToggle\Casts\Boolean;

class TestModel extends Model
{
    use HasFactory;

    protected $casts = [
        'active' => Boolean::class,
    ];
}
