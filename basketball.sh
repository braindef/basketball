#/bin/bash

dbPath="/home/linaro/basketball/$(date +%Y-%m-%d-%H-%M).txt"
#echo $dbPath

/usr/bin/wget -O $dbPath http://basketball.gztelli.ch/export.php 2>/dev/null >>/home/linaro/basketball/cron.log

cat $dbPath | wc -c | bc -l

