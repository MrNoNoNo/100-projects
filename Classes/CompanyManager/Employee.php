<?php

abstract class Employee {

    public $name;
    public $hourIncome;
    public $workedHours;
    public $workingDays;

    public function __construct($name){
        $this->name = $name;
        $this->workingDays = 22;
        $this->workedHours = 8;
    }

    abstract public function calculateSalary();

}

class HourlyEmployee extends Employee {

    public function __construct($name,$workedHours)
    {
        parent::__construct($name);
        $this->workedHours = $workedHours;
    }

    public function calculateSalary()
    {
        $this->workingDays = 1;
        $this->hourIncome = 5.7;
        return "Salary for " . $this->name . " is " . $this->hourIncome * $this->workedHours * $this->workingDays;
    }

}

class SalariedEmployee extends Employee {

    public function calculateSalary()
    {
        $this->hourIncome = 7.35;
        return "Salary for " . $this->name . " is " . $this->hourIncome * 22 * $this->workedHours;
    }


}

class Manager extends Employee {

    public function calculateSalary()
    {
        $this->hourIncome = 15.7;
        return "Salary for " . $this->name . " is " .  $this->hourIncome * $this->workingDays * $this->workedHours;
    }


}

class Executive extends Employee {

    public function calculateSalary()
    {
        $this->hourIncome = 23.55;
        return "Salary for " . $this->name . " is " . $this->hourIncome * $this->workingDays * $this->workedHours;
    }


}