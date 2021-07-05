<?php

use PHPUnit\Framework\TestCase;

/**
 * ComplexNumberSubstractTest
 * @group group
 */
class ComplexNumberSubstractTest
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
     * Проверяем конкретное отнятие
     * 
     * @test 
     * */
    public function shouldAddOneToNumber()
    {
        
        $sum = $this->complex->substract(1, 1);

        $this->assertSame($sum, '1 + 3i');

    }

    /** 
     * Проверяем, будет ли меньше, если отнять положительное число
     * 
     * @test */
    public function shouldBeLessIfPositive()
    {

        $this->complex->substract(1, 1);

        $this->assertLessThan(2, $this->complex->a);
        $this->assertLessThan(4, $this->complex->a);

    }

    /** 
     * Проверяем, изменится ли число после прибавления
     * 
     * @test */
    public function shouldBeGDifferentIfNotNull()
    {

        $number = $this->complex->getNumber();

        $newNumber = $this->complex->substract(1, 1);

        $this->assertNotSame($newNumber, $number);

    }


}
