@echo off

lessc --source-map-map-inline --source-map-rootpath=../bootstrap/less public/less/override.less > public/css/style.css

pause