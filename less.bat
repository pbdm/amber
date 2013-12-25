@echo off

::lessc --source-map-map-inline public/override.less > public/style.css
recess public/override.less --compress > public/style.css
pause