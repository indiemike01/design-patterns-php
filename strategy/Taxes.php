<?php

require_once("./UKTaxation.php");
require_once("./GermanyTaxation.php");
require_once("./JapanTaxation.php");
require_once("./TurkeyTaxation.php");

class Taxes
{
    private TaxationInterface $strategy;

    public function __construct(string $country)
    {
        switch ($country) {
            case 'UK':
                $this->strategy = new UKTaxation;
                break;
            case 'Germany':
                $this->strategy = new GermanyTaxation;
                break;
            case 'Japan':
                $this->strategy = new JapanTaxation;
                break;
            case 'Turkey':
                $this->strategy = new TurkeyTaxation;
                break;
            default:
                throw new \Exception("The country doesn't exist");
                break;
        }
    }

    public function calculateEndSalary(Employee $employee): void
    {
        $newSalary =  $this->strategy->calculate($employee);
        $employee->setSalaryAfterTaxes($newSalary);
    }
}
