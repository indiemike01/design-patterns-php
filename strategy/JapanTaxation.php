<?php

require_once('./TaxationInterface.php');

class JapanTaxation implements TaxationInterface
{
    const INTERN_TAX = 0;
    const JUNIOR_TAX = 0;
    const MIDDLE_TAX = 3;
    const SENIOR_TAX = 5;
    const MANAGER_TAX = 10;
    const VP_TAX = 15;
    const CEO_TAX = 20;
    const OVERQUALIFFIED_TAX = 40;

    public function calculate(Employee $employee): int
    {
        switch ($employee->getExperience()) {
            case 1:
                return $employee->getSalary() - $employee->getSalary() * self::INTERN_TAX / 100;
                break;
            case 2:
                return $employee->getSalary() - $employee->getSalary() * self::JUNIOR_TAX / 100;
                break;
            case 3:
                return $employee->getSalary() - $employee->getSalary() * self::MIDDLE_TAX / 100;
                break;
            case 4:
                return $employee->getSalary() - $employee->getSalary() * self::SENIOR_TAX / 100;
                break;
            case 5:
                return $employee->getSalary() - $employee->getSalary() * self::MANAGER_TAX / 100;
                break;
            case 6:
                return $employee->getSalary() - $employee->getSalary() * self::VP_TAX / 100;
                break;
            case 7:
                return $employee->getSalary() - $employee->getSalary() * self::CEO_TAX / 100;
                break;
            default:
                return $employee->getSalary() - $employee->getSalary() * self::OVERQUALIFFIED_TAX / 100;
                break;
        }
    }
}
