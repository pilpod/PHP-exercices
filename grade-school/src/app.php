<?php 

namespace App;

use App\GradeSchool;

$gradeSchool = new GradeSchool;

$gradeSchool->add("Marc", 5);
$gradeSchool->add("Virginie", 5);
$gradeSchool->add("Giacomo", 1);
$gradeSchool->add("Claire", 5);
$gradeSchool->add("Mehdi", 4);
$gradeSchool->studentsByGradeAlphabetical();

?>