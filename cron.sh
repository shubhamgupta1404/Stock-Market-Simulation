#!/bin/bash

unalias -a
trap onexit SIGINT SIGSEGV SIGQUIT SIGTERM

prog="/var/www/sms/5sec.sh"
lock="/tmp/${prog}.lock"

onexit () {
        rm -f "${lock}"
        exit
}

# check if the lock file is in place.
if [ -f $lock ]; then
        # silent exit is better from cron jobs,
        # echo "$0 Error: Lock file $lock is in place."
        # echo "Make sure an old instance of this program is not running, remove i
t and try again."
        exit
fi
date > $lock

#
# your script goes here
#
   
# 
# exit your program calling onexit
#

onexit
