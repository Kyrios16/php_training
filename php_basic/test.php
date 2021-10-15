<?php 
 /*
 *show student information
 *@param $name
 *@param $rollNumber
 */
 class StudentInfo {
     public $name;
     public $rollNumber;
     public function __construct($name, $rollNumber) {
         $this->name = $name;
         $this->rollNumber = $rollNumber;
     }

     public function showInfo() {
        return 'Student name is ' .$this->name. ' and roll number is ' .$this->rollNumber;
     } 
 }

 $newStudent = new StudentInfo('Kaung Khant Naing', '5CS-18');
 echo $newStudent->showInfo();
 echo '<br>';
 $newStudent = new StudentInfo('Kaung Kaung', '5CS-17');
 echo $newStudent->showInfo();
 echo '<br>';
 echo '<br>';

 $x =0;
 while ($x < 10) {
     if($x == 4) {
         $x++;
         continue;
     }
     echo 'number is ' .$x.'<br>';
     $x++;
 }

 