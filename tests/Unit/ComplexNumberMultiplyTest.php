<?php

use PHPUnit\Framework\TestCase;

/**
 * ComplexNumberSubstractTest
 * @group group
 */
class ComplexNumberMultiplyTest
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
     * Проверяем конкретное умножение
     * 
     * @test 
     * */
    public function shouldMultiplyByCertainNumber2()
    {
        
        $production = $this->complex->devide(2, 2);

        $this->assertSame($production, '1.5 + 0.5i');

    }

    /** 
     * Проверяем деление на 1
     * 
     * @test 
     * */
    public function shouldReturnTheSame()
    {
        
        $production = $this->complex->devide(1);

        $this->assertSame($production, '2 + 4i');

    }

    /** 
     * Проверяем умножение на 0
     * 
     * @test */
    public function shouldReturnZero()
    {

        $production = $this->complex->multiply(0);

        $this->assertSame((int)$production, 0);
    }

    /** 
     * Проверяем, изменятся ли знаки на противоположные
     * 
     * @test */
    public function shouldReturnInverted()
    {

        $production = $this->complex->multiply(-1);

        $this->assertNotSame($production, "4 - 12i");

    }


}
