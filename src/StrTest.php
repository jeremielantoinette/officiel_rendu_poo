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

    public function testExo15()//Exercice 1.5 transformé en exo 1
    {
        $string = Str::on('my_string')
                ->camelCase()
                ->toString();



        $this->assertSame('myString', $string);
    }

    public function testExo25()//Exercice 2.5
    {
        $string = Str::on('my_string')
            ->camelCase()
            ->toString();

        $string = Str::on('myString')
            ->camelCase()
            ->toString();

        $string = Str::on('my-string')
            ->camelCase()
            ->toString();

        $string = Str::on('my string')
            ->camelCase()
            ->toString();

        $string = Str::on('My String')
            ->camelCase()
            ->toString();



        $this->assertSame('myString', $string);
    }











}




































