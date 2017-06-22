<?php
/**
 * Created by PhpStorm.
 * User: Octavian
 * Date: 22-Jun-17
 * Time: 1:17 AM
 */
require('Employee.php');
require('Company.php');

$mainCompany = new Company();

$employee1 = new HourlyEmployee('Christian', 64);
$employee2 = new SalariedEmployee('Andrew');
$employee3 = new Manager('Steve');
$employee4 = new Executive('George');

echo "<pre>";
print $employee1->calculateSalary();
echo "\n";
print $employee2->calculateSalary();
echo "\n";
print $employee3->calculateSalary();
echo "\n";
print $employee4->calculateSalary();

$mainCompany->hire([$employee1]);
$mainCompany->hire([$employee2]);
$mainCompany->hire([$employee3]);
$mainCompany->hire([$employee4]);

$mainCompany->fire([$employee3]);