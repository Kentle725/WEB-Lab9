<?php
use PHPUnit\Framework\TestCase;

require_once '/var/www/html/Patient.php';

class Patient2Test extends TestCase
{
    public function testDelete()
    {
        $patient = new Patient(null);

        $result = $patient->delete(1);
    
        $this->assertTrue($result);
    }
}