<?Php
error_reporting(0);
if(isset($_GET['id'])){
    include "classes/Student.php"; 
	$stu = new Student();
    $stu->deleteStudent($_GET);

}