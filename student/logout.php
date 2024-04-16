<?php
 require_once("../scholarClass.php");
$scholarship->student_logout();
 header('Refresh: 3;url=../index.php?log out successfull');