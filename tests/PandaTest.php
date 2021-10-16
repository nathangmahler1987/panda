<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
require __DIR__ . '/../src/DisappointmentPanda.php';

class PandaTest extends TestCase
{
  public function testRandomAdvice_WithDefaultAdviceEntries_ReturnsNotNull()
  {
       $panda = new DisappointmentPanda();
       $this->assertNotNull($panda->getAdvice());
  }

  public function testAdviceArray_WithDefaultEntries_ReturnsCountOf5()
  {
       $panda = new DisappointmentPanda();
       $this->assertCount(5, $panda->advice);
  }

  public function testAddAdvice_WithNewAdvice_ReturnsCountOf6()
  {
      //object creation
       $panda = new DisappointmentPanda();
       // panda object going through addAdvice method, array is getting added to
       $panda->addAdvice('Be excellent to each other');
       //this is the last line
       $this->assertCount(6, $panda->advice);
  }  
}
