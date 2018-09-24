<?php

namespace LordDashMe\BrownbagPHPPackage\Tests\Unit;

use Mockery as Mockery;
use PHPUnit\Framework\TestCase;
use LordDashMe\BrownbagPHPPackage\SampleClass;

class SampleClassTest extends TestCase
{
    /**
     * @test
     */
    public function it_should_load_sample_class()
    {
        $this->assertInstanceOf(SampleClass::class, new SampleClass());
    }

    /**
     * @test
     */
    public function it_should_add()
    {
        $sample = new SampleClass();

        $this->assertTrue($sample->add());
    }
}