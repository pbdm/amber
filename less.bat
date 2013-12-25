@echo off

::lessc --source-map-map-inline public/override.less > public/style.css
recess public/less/override.less --compress > public/css/style.css
pause