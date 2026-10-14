<?php

// Your code here
class Student
{
    public $name;
    public $age;
    public $grade;

    
    public function introduce()
    {
        return "Hi, I'm {$this->name}, {$this->age} years old, and I'm in grade {$this->grade}.";
    }

        public function study($subject)
    {
        return "{$this->name} is studying {$subject}.";
    }

}



$student = new Student();
$student->name = "Alice";
$student->age = 16;
$student->grade = 10;

echo $student->introduce(); // Hi, I'm Alice, 16 years old, and I'm in grade 10.
echo $student->study("Mathematics"); // Alice is studying Mathematics.