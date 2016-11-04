<?php

//wc -w nov2016.txt | awk -v date="$(date +%s)" '{ print date " " $1 }' >> log

$file = file("log");
for ($i = max(0, count($file)-2); $i < count($file); $i++) {
  $row = explode(' ', $file[$i]);
  $date[] = $row[0];
  $wc[] = $row[1];
 }

if ($wc[0] < $wc[1]) {
  $time = $date[1] - $date[0];
  $total = $wc[1] - $wc[0];


exec('t update #NaNoWriMo2016 automated update: ' . $total . " words in " . $timecomputed . " minutes");
//print 'update: ' . $total . " words in " . $timecomputed . " " . $timename . "\n";
}
 else {
  //print "no change \n";
 }

