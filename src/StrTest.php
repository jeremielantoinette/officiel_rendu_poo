<?php

namespace Strings;

use PHPUnit\Framework\TestCase;

class Strtest extends TestCase{
    
    public function testExo1()
    {
    $string = (string) Str::on('my_string')
        ->replace('_', ' ')
        ->ucwords()
        ->replace(' ', '')
        ->lcfirst();



        $this->assertSame('myString', $string);
    }



/*essais avec point d'interrogation (TEST)
    public function testExo2()
    {
        $string = Str::on('my?string')
            ->camelCase()
            ->toString();




        $this->assertSame('myString', $string);
    }

*/








}




































