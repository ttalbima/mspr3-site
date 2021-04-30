<?php

namespace Tests\Entity;
use App\Entity\Info;

use PHPUnit\Framework\TestCase;

 class InfotTest extends TestCase
{
    

    public function testGetId()
    {
        $info = new Info(1000,'Fatou','40;
        $this->assertSame(1000, $info->getId());
    }

    public function testGetName()
    {
        $fatou = new Info(1000,'Fatou','40000');
        $pierre = new Info(1001,'Pierre','45000');
        $manuel = new Info(1002,'Manuel','35000');
        $amine = new Info(1003,'Amine','34000');

        $this->assertSame('Fatou', $fatou->getName());
        $this->assertSame('Pierre', $pierre->getName());
        $this->assertSame('Manuel', $manuel->getName());
        $this->assertSame('Amine', $amine->getName());
    }



    public function testGetValue()
    {
        $fatou = new Info(1000,'Fatou','40000');
        $pierre = new Info(1001,'Pierre','45000');
        $manuel = new Info(1002,'Manuel','35000');
        $amine = new Info(1003,'Amine','34000');

        $this->assertSame('40000', $fatou->getValue());
        $this->assertSame('45000', $pierre->getValue());
        $this->assertSame('35000', $manuel->getValue());
        $this->assertSame('34000', $amine->getValue());
    }


    public function testSetName()
    {
        $fatou = new Info(1000,'Fatou','40000');
        $pierre = new Info(1001,'Pierre','45000');
        $manuel = new Info(1002,'Manuel','35000');
        $amine = new Info(1003,'Amine','34000');

        $fatou->setName('NDIAYE');
        $pierre->setName('JIMBON');
        $manuel->setName('HARPON');
        $amine->setName('TTALBI');


        $this->assertSame('NDIAYE', $fatou->getName());
        $this->assertSame('JIMBON', $pierre->getName());
        $this->assertSame('HARPON', $manuel->getName());
        $this->assertSame('TTALBI', $amine->getName());
    }


    public function testSetValue()
    {
        $fatou = new Info(1000,'Fatou','40000');
        $pierre = new Info(1001,'Pierre','45000');
        $manuel = new Info(1002,'Manuel','35000');
        $amine = new Info(1003,'Amine','34000');
        $fatou->setValue('45000');
        $pierre->setValue('50000');
        $manuel->setValue('40000');
        $amine->setValue('40000');

        $this->assertSame('45000', $fatou->getValue());
        $this->assertSame('50000', $pierre->getValue());
        $this->assertSame('40000', $manuel->getValue());
        $this->assertSame('40000', $amine->getValue());
    }
   
}  