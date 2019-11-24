<?php

function track($times)
{
    $sum = 0;
    if (!empty($times)) {
        foreach ($times as $time) {
            if ($time < 0)
                $time = 0;
            if (empty($time))
                $time = 0;
            $sum += $time;
        }
    }
    $days = ($sum / 24 / 60 / 60 / 1000);
    $iDays = (int)$days;

    $resD = $days - $iDays;
    $hours = $resD * 24;
    $iHours = (int)$hours;

    $resH = $hours - $iHours;
    $minutes = $resH * 60;
    $iMinutes = (int)$minutes;

    $resM = $minutes - $iMinutes;
    $seconds = $resM * 60;
    $iSeconds = (int)$seconds;

    $resS = $seconds - $iSeconds;
    $iMilliseconds = (int)($resS * 1000);
    return array($iDays, $iHours, $iMinutes, $iSeconds, $iMilliseconds);
}
