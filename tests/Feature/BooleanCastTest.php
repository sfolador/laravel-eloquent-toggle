<?php


use Illuminate\Support\Str;
use Sfolador\LaravelEloquentToggle\Tests\Models\TestModel;

it('can be casted to a boolean true', function () {
    $model = new TestModel();
    $model->active = true;
    expect($model->active->value())->toBeTrue();
});

it('can be casted to a boolean false', function () {
    $model = new TestModel();
    $model->active = false;
    expect($model->active->value())->toBeFalse();
});


it('can be casted to a boolean from string', function () {
    $model = new TestModel();
    $string = Str::random();
    $model->active = $string;
    expect($model->active->value())->toEqual((bool) $string);
});

it('can be toggled', function () {
    $model = new TestModel();
    $model->active = true;

    $model->active->toggle();
    expect($model->active->value())->toBeFalse();
});

it('is a boolean in array', function () {
    $model = new TestModel();
    $model->active = false;
    $model->active->toggle();

    expect($model->toArray())->toEqual([
        'active' => true,
    ]);

});

it('is a boolean in json', function () {
    $model = new TestModel();
    $model->active = false;
    $model->active->toggle();


    expect($model->toJson())->toEqual(json_encode([
        'active' => true,
    ]));
});


