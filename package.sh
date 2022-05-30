#!/bin/bash


#find | egrep -v "(/\.git|\.swp|~$|${0})" 


if [ -e "../resume/Werner-resume.pdf" ]
then
  cp "../resume/Werner-resume.pdf" ./documents/
fi

rsync -auvz --exclude-from package-exclude.ctl . "${1}"
