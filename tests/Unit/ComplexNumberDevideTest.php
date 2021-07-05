<?php

use PHPUnit\Framework\TestCase;

/**
 * ComplexNumberSubstractTest
 * @group group
 */
class ComplexNumberDevideTest
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
    public function shouldAddOneToNumber()
    {
        
        $production = $this->complex->multiply(2, 2);

        $this->assertSame($production, '-4 + 12i');

    }

    /** 
     * Проверяем умножение на 1
     * 
     * @test 
     * */
    public function shouldReturnTheSame()
    {
        
        $production = $this->complex->multiply(1);

        $this->assertSame($production, '2 + 4i');

    }

    /** 
     * Проверяем деление на 0
     * 
     * @test */
    public function shouldReturnNull()
    {

        $production = $this->complex->devide(0);

        $this->assertSame($production, "");
    }

    /** 
     * Проверяем, изменятся ли знаки на противоположные
     * 
     * @test */
    public function shouldReturnInverted()
    {

        $production = $this->complex->devide(-1);

        $this->assertNotSame($production, "-2 - 4i");

    }


}
