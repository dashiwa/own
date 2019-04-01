<?php

namespace Simplex\Tests;
use PHPUnit\Framework\TestCase;
use Simplex\Observer;
use Simplex\Subject;


class SubjectTest extends TestCase
{
    public function testObserversAreUpdated()
    {
        // Создать подставной объект для Observer,
        // имитируя только метод update().
        $observer = $this->getMockBuilder(Observer::class)
          ->setMethods(['update'])
          ->getMock();

        $observer->expects($this->once())
          ->method('update')
          ->willReturn('foo');


        $subject = $this->getMockBuilder(Subject::class)
          ->setMethods(['doSomething'])
          ->getMock();

        $subject->expects($this->once())
            ->method('doSomething')
            ->willReturn('something');

        $this->assertSame('foo',$observer->update());




    }
}