<?php

$students = array ('vikas'=>array('age'=>20, 'magrks'=>40, 'class'=>'MCA'),
	               'rahul'=>array('age'=>40, 'marks'=>50, 'class'=>'bca'));

 echo "<pre>";
 print_r($students);

 echo $students['rahul']['age'];

 // echo $students['mpct']['teacher']['b.tech'];

 ?>