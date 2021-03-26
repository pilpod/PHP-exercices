<?php

namespace App;

use App\Models\StudentModel;

class GradeSchool {
    
    private $studentsList = [];

    public function add(string $name, int $grade)
    {
        $student = new StudentModel($name, $grade);
        array_push($this->studentsList, $student);
    }

    public function grade(int $grade)
    {
        $studentsInGrade = [];

        foreach ($this->studentsList as $student) {
            if($student->getGrade() == $grade) {
                array_push($studentsInGrade, $student->getName());
            }
        }
        var_dump($studentsInGrade);
        return $studentsInGrade;
    }

    public function studentsByGradeAlphabetical()
    {
        $alphabeticalListOfStudents = [];

        foreach ($this->studentsList as $key => $student) {
            $key = $student->getGrade();

            if(array_key_exists($key, $alphabeticalListOfStudents)) {
                array_push($alphabeticalListOfStudents[$key], $student->getName());
                sort($alphabeticalListOfStudents[$key]);
            } else {
                $alphabeticalListOfStudents[$key] = [$student->getName()];
            }

            ksort($alphabeticalListOfStudents);
        }

        return ($alphabeticalListOfStudents);
    }

}