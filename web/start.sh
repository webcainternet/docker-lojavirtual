#!/bin/bash

# Start apache
/usr/sbin/apache2 -D FOREGROUND



# Start postfix
#service syslog-ng start
#service postfix start
#tail -F /var/log/mail.log