<?php
/**
 * Usage: phpunit ./SolutionUnitTest
 */
use PHPUnit\Framework\TestCase;

require('Solution.php');

class SolutionUnitTest extends TestCase {
    
    public function testNonMultiple(){
        $class = new Solution();
        $this->assertSame($class->printString(2),2);
    }

    public function testMultipleByThree(){
        $class = new Solution();
        $this->assertSame($class->printString(3),'Linio');
    }

    public function testMultipleByFive(){
        $class = new Solution();
        $this->assertSame($class->printString(5),'IT');
    }

    public function testMultipleByBoth(){
        $class = new Solution();
        $this->assertSame($class->printString(15),'Linianos');
    }

}