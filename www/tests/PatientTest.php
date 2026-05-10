<?php


use PHPUnit\Framework\TestCase;

require_once '/var/www/html/Patient.php';

class PatientTest extends TestCase
{
    public function testAdd()
    {
        $patient = new Patient(null);

        $result = $patient->add($_ENV["DB_PATIENT_NAME"], $_ENV["DB_AGE"], $_ENV["DB_DOCTOR"], $_ENV["DB_FIRST_CONSULTATION"], $_ENV["DB_VISIT_FORM"]);
    
        $this->assertEquals("Patient " .$_ENV["DB_PATIENT_NAME"] . " created", $result);
    }
}