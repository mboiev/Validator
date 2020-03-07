<?php

namespace Tests\Morebec\Validator\Rule;
use InvalidArgumentException;
use Morebec\Validator\Rule\ContainsLowercaseCharacters;
use PHPUnit\Framework\TestCase;


class ContainsLowercaseCharactersTest extends TestCase
{
    public function testValidate(){
        $ruleFirst = new ContainsLowercaseCharacters(1,true);
        $ruleSecond = new ContainsLowercaseCharacters(1,false);
        $ruleThird= new ContainsLowercaseCharacters(1,false,"Custom Message");
        $this->assertTrue($ruleFirst->validate("tEST STRING"));
        $this->assertFalse($ruleFirst->validate("tEST sTRING"));
        $this->assertFalse($ruleSecond->validate('TEST STRING'));
        $this->assertTrue($ruleSecond->validate('tEST sTRING'));
        $this->assertEquals( "Custom Message", $ruleThird->getMessage("test string"));
        $this->expectException(InvalidArgumentException::class);
        $ruleFourth = new ContainsLowercaseCharacters(-1,false);
    }
}