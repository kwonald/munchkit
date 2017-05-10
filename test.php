<?php

date_default_timezone_set('America/Los_Angeles');

    $date = date('Y-m-d G:i:s');

	echo $date ."<br>";
	echo date('m-d-Y', strtotime("+1 Sunday")) . "<br>" ;
	echo date('Y-m-d', strtotime("+2 Sunday")) . "<br>" ;
	echo date('Y-m-d', strtotime("+3 Sunday")) . "<br>" ;
	echo date('Y-m-d', strtotime("+4 Sunday")) . "<br>" ;
	echo date('Y-m-d', strtotime("+5 Sunday")) . "<br>" ;
	echo date('Y-m-d', strtotime("+6 Sunday")) . "<br>" ;
	echo date('Y-m-d', strtotime("+7 Sunday")) . "<br>" ;
	echo date('Y-m-d', strtotime("+8 Sunday")) . "<br>" ;




?>