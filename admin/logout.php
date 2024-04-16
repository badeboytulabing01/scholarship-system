<?php
 require_once("../scholarClass.php");
$scholarship->logout();
 header('Refresh: 3;url=../index.php?log out successfull');