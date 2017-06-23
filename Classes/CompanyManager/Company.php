<?php
/**
 * Created by PhpStorm.
 * User: Octavian
 * Date: 22-Jun-17
 * Time: 1:05 AM
 */
class Company
{
    protected $employees = [];

    public function hire(array $employee){
        foreach($employee as $emp) {
            array_push($this->employees, $emp);
        }
        echo "<pre>";
        echo "Employee added succesfully.";
        print_r($employee);
    }

    public function fire(array $employee){
        foreach($employee as $emp) {
            $key = array_search($emp, $this->employees);
            array_splice($this->employees, $key, 1);
        }
        echo "<pre>";
        echo "Employee fired.";
        print_r($employee);
    }

    public function raise(array $employee){
        foreach($employee as $emp) {

        }
    }

    public function listAllEmployees(){
        foreach($this->employees as $emp) {
            echo "Employee : " . $emp->name . "\n";
            echo "Hour Income : " . $emp->hourIncome  . "\n";
            echo "Working Days : " . $emp->workingDays . "\n";
            echo "Worked hours : " . $emp->workingDays * $emp->workedHours . "\n";
            echo $emp->calculateSalary() . "\n";
            echo "<br />";
        }
    }

}