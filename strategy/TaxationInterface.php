<?php
require './Employee.php';

interface TaxationInterface
{
    public function calculate(Employee $employee): int;
}
