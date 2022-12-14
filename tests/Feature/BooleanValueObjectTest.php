<?php


use Sfolador\LaravelEloquentToggle\Tests\Models\TestModel;
use Sfolador\LaravelEloquentToggle\ValueObjects\Boolean;

it('can be false', function () {

    $boolean = Boolean::false();
    expect($boolean->value())->toBeFalse();

});

it('can be true', function () {

    $boolean = Boolean::true();
    expect($boolean->value())->toBeTrue();

});


it('can be created true', function () {

    $boolean = new Boolean(true);
    expect($boolean->value())->toBeTrue();

});

it('can be created false', function () {

    $boolean = new Boolean(false);
    expect($boolean->value())->toBeFalse();

});


it('can be toggled from false', function () {

    $boolean = Boolean::false();
    $boolean->toggle();
    expect($boolean->value())->toBeTrue();

});


it('can be toggled from true', function () {

    $boolean = Boolean::true();
    $boolean->toggle();
    expect($boolean->value())->toBeFalse();

});

it('can be converted to string from true', function () {

    $boolean = Boolean::true();
    expect((string) $boolean)->toBe('true');

});

it('can be converted to string from false', function () {

    $boolean = Boolean::false();
    expect((string) $boolean)->toBe('false');

});

it('can be returned in json as a boolean true', function () {

        $boolean = Boolean::true();
        expect($boolean->toJson())->toBeTrue();

});


it('can be returned in json as a boolean false', function () {

    $boolean = Boolean::false();
    expect($boolean->toJson())->toBeFalse();

});
