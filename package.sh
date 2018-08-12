#!/bin/bash


#find | egrep -v "(/\.git|\.swp|~$|${0})" 

rsync -avz --exclude-from package-exclude.ctl . "${1}"
