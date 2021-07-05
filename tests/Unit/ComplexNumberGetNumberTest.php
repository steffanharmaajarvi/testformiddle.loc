<?php

use PHPUnit\Framework\TestCase;

/**
 * ComplexNumberSubstractTest
 * @group group
 */
class ComplexNumberGetNumberTest
    extends TestCase
{

    /**
     * Комплексное число для теста
     */
    private $complex;

    public function setUp(): void
    {
        
        $this->complex = new \App\ComplexNumber(2, 4);

    }

    /** 
     * Проверяем наличие плюса
     * 
     * @test 
     * */
    public function shouldReturnPlus()
    {
        
        $this->complex->b = 2;

        $number = $this->complex->getNumber();

        $array = explode('+', $number);
        
        $this->complex->a = -2;

        $this->assertGreaterThan(1, count($array));



    }


    /** 
     * Проверяем наличие минуса
     * 
     * @test 
     * */
    public function shouldReturnMinus()
    {
        
        $this->complex->b = -2;

        $number = $this->complex->getNumber();

        $array = explode('-', $number);
        
        $this->complex->a = 2;

        $this->assertGreaterThan(1, count($array));

        $this->complex->b = -2;

        $this->assertGreaterThan(2, count($array));


    }

    /** 
     * Проверяем, не пустое ли значение возвращает функция
     * 
     * @test */
    public function shouldBeNotNull()
    {

        $number = $this->complex->getNumber();

        $this->assertNotNull($number);

    }


    /** 
     * Проверяем, вернёт ли нуль функция
     * 
     * @test */
    public function shouldReturnZero()
    {

        $this->complex->a = 0;
        $this->complex->b = 0;

        $number = $this->complex->getNumber();

        $this->assertEquals(0, $number);

    }


}
