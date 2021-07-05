<?php

use PHPUnit\Framework\TestCase;

/**
 * Complex NumberSumTest
 * @group group
 */
class ComplexNumberSumTest
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
     * Проверяем конкретное прибавление
     * 
     * @test 
     * */
    public function shouldAddOneToNumber()
    {
        
        $sum = $this->complex->add(1, 1);

        $this->assertSame($sum, '3 + 5i');

    }

    /** 
     * Проверяем, будет ли больше, если прибавить положительное число
     * 
     * @test */
    public function shouldBeGreaterIfPositive()
    {

        $number = $this->complex;

        $this->complex->add(1, 1);
        
        $this->assertGreaterThan(2, $this->complex->a);
        $this->assertGreaterThan(4, $this->complex->b);

    }

    /** 
     * Проверяем, изменится ли число после прибавления
     * 
     * @test */
    public function shouldBeGDifferentIfNotNull()
    {

        $number = $this->complex->getNumber();

        $newNumber = $this->complex->add(1, 1);

        $this->assertNotSame($newNumber, $number);

    }


}
