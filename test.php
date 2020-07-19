<?php
$date = $today =  date('d-m-Y');
//echo date();
echo $now =time()."<br>";
echo $time = strtotime('03:00pm')."<br>";
echo $timeplus = strtotime("+30 Minutes")."<br>";

if(($now< $time) && ($time < $timeplus)){
	echo "true" ."<br>";
}

echo date('H:ia', strtotime("+30 Minutes"));
?>