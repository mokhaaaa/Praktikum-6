<?php
	$datetime = new DateTime();
    $datetime->setTimezone(new DateTimeZone('Asia/Jakarta'));
	$date = $datetime->format('d-m-Y');
	$time = $datetime->format('H:i:s');
	$day = date('l', strtotime($date));
	?>