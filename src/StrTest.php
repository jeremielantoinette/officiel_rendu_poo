<?php

namespace Strings;

use PHPUnit\Framework\TestCase;

class Strtest extends TestCase{

    public function testExo1()//Exercice 1
    {
        $string = (string) Str::on('my_string')
            ->replace('_', ' ')
            ->ucwords()
            ->replace(' ', '')
            ->lcfirst();



        $this->assertSame('myString', $string);
    }

    public function testExo2()//exercice 2
    {
        $string = Str::on('my_string')
            ->camelCase()
            ->toString();



        $this->assertSame('myString', $string);
    }








}
