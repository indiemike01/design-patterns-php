<?php

class Employee
{
    private int $salary;
    private int $salaryAfterTaxes;
    private int $experience;
    private string $country;

    public function __construct(int $salary, int $experience, string $country)
    {
        $this->salary = $salary;
        $this->experience = $experience;
        $this->country = $country;
    }

    public function setSalary($salary): void
    {
        $this->salary = $salary;
    }

    public function setExperience($experience): void
    {
        $this->experience = $experience;
    }

    public function getSalary(): int
    {
        return $this->salary;
    }

    public function getExperience(): int
    {
        return $this->experience;
    }

    public function setSalaryAfterTaxes($newSalary): void
    {
        $this->salaryAfterTaxes = $newSalary;
    }

    public function getSalaryAfterTaxes(): int
    {
        return $this->salaryAfterTaxes;
    }

    public function getCountry(): string
    {
        return $this->country;
    }
}
