<?php

/* 
 * This file is used to insert a new student 
 */
spl_autoload_register(function($class){
    require $class .".phpS";
});
class addstudent{
    public function additon($name, $father_name, $father_number, $paid_fin, $class, $year){
        $cl = new Connect();
        $sql = "INSERT INTO student (name, father-name, father_number, paid-fin, class, year) VALUES ('$name', '$father_name', '$father_number', '$paid_fin', '$class', '$year')";
        $rs = mysqli_query($cl->connection(), $sql);
        if($rs){
            echo "success";
        }
    }
}
$name              = $_POST["name"]; 
$father_name       = $_POST["father_name"];
$father_numbe      = $_POST["father_numbe"];
$paid_fin          = $_POST["paid_fin"];
$class             = $_POST["class"];
$year              = $_POST["year"];
$use = new addstudent();
$use->additon($name, $father_name, $father_number, $paid_fin, $class, $year);

