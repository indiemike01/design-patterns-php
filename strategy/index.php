<?php

require_once('./Taxes.php');
// require './Employee.php';

$john = new Employee(1500, 3, 'UK');
$mike = new Employee(2200, 6, 'Japan');
$josé = new Employee(1700, 12, 'Turkey');
$oliver = new Employee(2200, 10, 'Germany');
$luca = new Employee(1100, 1, 'Germany');

$ukOffice = new Taxes('UK');
$germanyOffice = new Taxes('Germany');
$turkishOffice = new Taxes('Turkey');
$japaneseOffice = new Taxes('Japan');

$ukOffice->calculateEndSalary($josé);
echo $josé->getSalaryAfterTaxes();
echo "\n";

$germanyOffice->calculateEndSalary($josé);
echo $josé->getSalaryAfterTaxes();
echo "\n";

$turkishOffice->calculateEndSalary($josé);
echo $josé->getSalaryAfterTaxes();
echo "\n";

$japaneseOffice->calculateEndSalary($josé);
echo $josé->getSalaryAfterTaxes();
echo "\n";
