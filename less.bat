@echo off
lessc --source-map-map-inline --source-map-rootpath=../bootstrap/less public/bootstrap/less/bootstrap.less > public/css/bootstrap.css
pause