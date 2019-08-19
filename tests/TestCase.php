<?php

namespace Tests;

use PHPUnit\Framework\TestCase as BaseTestCase;
#use Illuminate\Foundation\Testing\TestCase as BaseTestCase; # requires laravel/framework to be installed

/**
 * Class TestCase
 * @package Tests
 */
abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;
}
