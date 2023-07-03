<?php
$myBirthDayTimes = mktime(0, 0, 0, 3, 1, 2022);
$CurrentTime = time();

const SECS_PER_DAY = 60 * 60 * 24;

$DaysToNextBirthDay = intval(($myBirthDayTimes - $CurrentTime)/SECS_PER_DAY);

echo "$DaysToNextBirthDay" . "<br>";
echo "<br>";

$CurrentDate = "2022-02-23";
$NewDate = date("d-m-Y", strtotime($CurrentDate));
echo $NewDate . "<br>";
echo "<br>";

$fromDate = strtotime("2022-01-01");
$toDate = time();
$subDate =intval(($toDate - $fromDate)/SECS_PER_DAY);
echo $subDate;




