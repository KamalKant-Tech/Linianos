<?php
/**
 * Print Number, Linio, IT or Linianos
 * 
 * @author Kamal Kant <kamalkhn888@gmail.com>
 */
class Solution
{
    public function __construct()
    {
        //15 Values for satisfying given condition
        $this->StringOptions = ['', '', 'Linio', '', 'IT', 'Linio', '', '', 'Linio', 'IT', '', 'Linio', '', '', 'Linianos'];
    }
    
    public function printNumberString()
    {
        for ($i = 1; $i <= 100; $i++) {
            $strValue = $this->printString($i);
            if (!empty($strValue)) {
                echo $strValue . PHP_EOL;
                continue;
            }
            echo $i . PHP_EOL;
        }
    }

    public function printString(int $n)
    {
        return $this->StringOptions[($n - 1) % 15] ? $this->StringOptions[($n - 1) % 15] : $n;
    }
}

$class = new Solution();
$class->printNumberString();
